<?php

/**
 * WPML_Element_Translation Class
 *
 * @package wpml-core
 * @abstract
 */
abstract class WPML_Element_Translation extends WPML_WPDB_User {
	/** @var array[] $element_data */
	protected $element_data = [];

	/** @var array[] $translations */
	protected $translations = [];

	/** @var array[] $trid_groups */
	protected $trid_groups = [];

	/** @var array[] $trid_groups */
	protected $translation_ids_element = [];

	/** @var int $type_prefix_length */
	private $type_prefix_length;
	/**
	 * @param wpdb $wpdb
	 */
	public function __construct( &$wpdb ) {
		parent::__construct( $wpdb );
		$this->type_prefix_length = strlen( $this->get_type_prefix() );
	}

	abstract protected function get_element_join();
	abstract protected function get_type_prefix();

	/**
	 * Clears the cached translations.
	 */
	public function reload() {
		$this->element_data            = [];
		$this->translations            = [];
		$this->trid_groups             = [];
		$this->translation_ids_element = [];

	}

	public function get_element_trid( $element_id ) {
		return $this->maybe_populate_cache( $element_id )
			? $this->element_data[ $element_id ]['trid'] : null;
	}

	/**
	 * @param int        $element_id
	 * @param string     $lang
	 * @param bool|false $original_fallback if true will return input $element_id if no translation is found
	 *
	 * @return null|int
	 */
	public function element_id_in( $element_id, $lang, $original_fallback = false ) {
		$result = ( $original_fallback ? (int) $element_id : null );
		if ( $this->maybe_populate_cache( $element_id ) && isset( $this->translations[ $element_id ][ $lang ] ) ) {
			$result = (int) $this->translations[ $element_id ][ $lang ];
		}

		return $result;
	}

	/**
	 * @param int  $element_id
	 * @param bool $root if true gets the root element of the trid which itself
	 * has no original. Otherwise returns the direct original of the given
	 * element_id.
	 *
	 * @return int|null null if the element has no original
	 */
	public function get_original_element( $element_id, $root = false ) {
		$element_id  = (int) $element_id;
		$source_lang = $this->maybe_populate_cache( $element_id )
			? $this->element_data[ $element_id ]['source_lang'] : null;

		if ( null === $source_lang ) {
			return null;
		}

		if ( ! $root && isset( $this->translations[ $element_id ][ $source_lang ] ) ) {
			return (int) $this->translations[ $element_id ][ $source_lang ];
		}

		if ( $root ) {
			foreach ( $this->translations[ $element_id ] as $trans_id ) {
				if ( ! $this->element_data[ $trans_id ]['source_lang'] ) {
					return (int) $trans_id;
				}
			}
		}

		return null;
	}

	public function get_element_id( $lang, $trid ) {
		$this->maybe_populate_cache( false, $trid );

		return isset( $this->trid_groups [ $trid ][ $lang ] ) ? $this->trid_groups [ $trid ][ $lang ] : null;
	}

	/**
	 * @param int $element_id
	 *
	 * @return null|string
	 */
	public function get_element_lang_code( $element_id ) {
		$result = null;

		if ( $this->maybe_populate_cache( $element_id ) ) {
			$result = $this->element_data[ $element_id ]['lang'];
		}

		return $result;
	}

	/**
	 * @param int    $element_id
	 * @param string $output
	 *
	 * @return array|null|stdClass
	 */
	public function get_element_language_details( $element_id, $output = OBJECT ) {
		$result = null;
		if ( $element_id && $this->maybe_populate_cache( $element_id ) ) {
			$result                       = new stdClass();
			$result->element_id           = $element_id;
			$result->trid                 = $this->element_data[ $element_id ]['trid'];
			$result->language_code        = $this->element_data[ $element_id ]['lang'];
			$result->source_language_code = $this->element_data[ $element_id ]['source_lang'];
		}

		if ( $output == ARRAY_A ) {
			return $result ? get_object_vars( $result ) : null;
		} elseif ( $output == ARRAY_N ) {
			return $result ? array_values( get_object_vars( $result ) ) : null;
		} else {
			return $result;
		}
	}

	public function get_source_lang_code( $element_id ) {

		return $this->maybe_populate_cache( $element_id )
			? $this->element_data[ $element_id ]['source_lang'] : null;
	}

	public function get_type( $element_id ) {
		return $this->maybe_populate_cache( $element_id ) ? $this->element_data[ $element_id ]['type'] : null;
	}

	public function get_source_lang_from_translation_id( $translation_id ) {
		$lang       = array(
			'code'  => null,
			'found' => false,
		);
		$element_id = $this->get_element_from_translation_id( $translation_id );
		if ( $element_id ) {
			$lang['code']  = $this->get_source_lang_code( $element_id );
			$lang['found'] = true;
		}

		return $lang;

	}

	public function get_translation_id( $element_id ) {
		return $this->maybe_populate_cache( $element_id )
			? $this->element_data[ $element_id ]['translation_id'] : null;
	}

	public function get_translations_ids() {
		$translation_ids = array();
		foreach ( $this->element_data as $data ) {
			$translation_ids[] = $data['translation_id'];
		}

		return $translation_ids;
	}

	/**
	 * @param int       $element_id
	 * @param int|false $trid
	 * @param bool      $actual_translations_only
	 *
	 * @return array<int,int>
	 */
	public function get_element_translations( $element_id, $trid = false, $actual_translations_only = false ) {
		$valid_element = $this->maybe_populate_cache( $element_id, $trid );

		if ( $element_id ) {
			$res = $valid_element
				? ( $actual_translations_only
					? $this->filter_for_actual_trans( $element_id ) : $this->translations[ $element_id ] ) : array();
		} elseif ( $trid ) {
			$res = isset( $this->trid_groups[ $trid ] ) ? $this->trid_groups[ $trid ] : array();
		}

		return isset( $res ) ? $res : array();
	}

	public function get_element_from_translation_id( $translation_id ) {
		return isset( $this->translation_ids_element[ $translation_id ] ) ? $this->translation_ids_element[ $translation_id ] : null;
	}

	public function get_trid_from_translation_id( $translation_id ) {
		$trid       = null;
		$element_id = $this->get_element_from_translation_id( $translation_id );
		if ( $element_id ) {
			$trid = $this->get_element_trid( $element_id );
		}

		return $trid;
	}

	public function get_trids() {
		return array_keys( $this->trid_groups );
	}

	public function prefetch_ids( $element_ids ) {
		$element_ids = (array) $element_ids;
		$element_ids = array_diff( $element_ids, array_keys( $this->element_data ) );
		if ( (bool) $element_ids === false ) {
			return;
		}

		$elements = $this->wpdb->get_results( $this->get_sql_by_element_ids( $element_ids ), ARRAY_A ); // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared

		$this->group_and_populate_cache( $elements );
	}

	/**
	 * @return string
	 */
	private function get_base_sql() {
		return "
			SELECT
				wpml_translations.translation_id,
				wpml_translations.element_id,
				wpml_translations.language_code,
				wpml_translations.source_language_code,
				wpml_translations.trid,
				wpml_translations.element_type
			FROM {$this->wpdb->prefix}icl_translations wpml_translations
			" . $this->get_element_join();
	}

	/**
	 * @param array $element_ids
	 *
	 * @return string
	 */
	private function get_sql_by_element_ids( $element_ids ) {
		return $this->get_base_sql()
		. "
		JOIN {$this->wpdb->prefix}icl_translations tridt
			ON tridt.element_type = wpml_translations.element_type
				AND tridt.trid = wpml_translations.trid
		WHERE tridt.element_id IN(" . wpml_prepare_in( $element_ids, '%d' ) . ")"; // phpcs:ignore Squiz.Strings.DoubleQuoteUsage.NotRequired
	}

	/**
	 * @param int $trid
	 *
	 * @return string
	 */
	private function get_sql_by_trid( $trid ) {
		return $this->get_base_sql()
			. $this->wpdb->prepare( ' WHERE wpml_translations.trid = %d', $trid );
	}

	private function maybe_populate_cache( $element_id, $trid = false ) {
		if ( ! $element_id && ! $trid ) {
			return false;
		}
		if ( ! $element_id && isset( $this->trid_groups [ $trid ] ) ) {
			return true;
		}
		if ( ! $element_id || ! isset( $this->translations[ $element_id ] ) ) {
			if ( ! $element_id ) {
				$sql = $this->get_sql_by_trid( $trid );
			} else {
				$sql = $this->get_sql_by_element_ids( [ $element_id ] );
			}

			$elements = $this->wpdb->get_results( $sql, ARRAY_A ); // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared
			$this->populate_cache( $elements );
			if ( $element_id && ! isset( $this->translations[ $element_id ] ) ) {
				$this->translations[ $element_id ] = array();
			}
		}

		return ! empty( $this->translations[ $element_id ] );
	}

	private function group_and_populate_cache( $elements ) {
		$trids = array();
		foreach ( $elements as $element ) {
			$trid = $element['trid'];
			if ( ! isset( $trids[ $trid ] ) ) {
				$trids[ $trid ] = array();
			}
			$trids[ $trid ][] = $element;
		}
		foreach ( $trids as $trid_group ) {
			$this->populate_cache( $trid_group );
		}
	}

	private function populate_cache( $elements ) {
		if ( ! $elements ) {
			return;
		}
		$element_ids = array();
		foreach ( $elements as $element ) {
			$element_id                    = $element['element_id'];
			$language_code                 = $element['language_code'];
			$element_ids[ $language_code ] = $element_id;

			$this->element_data[ $element_id ] = array(
				'translation_id' => $element['translation_id'],
				'trid'           => $element['trid'],
				'lang'           => $language_code,
				'source_lang'    => $element['source_language_code'],
				'type'           => substr( $element['element_type'], $this->type_prefix_length ),
			);

			$this->translation_ids_element[ $element['translation_id'] ] = $element_id;
		}
		foreach ( $element_ids as $element_id ) {
			$trid                              = $this->element_data[ $element_id ]['trid'];
			$this->trid_groups[ $trid ]        = $element_ids;
			$this->translations[ $element_id ] = &$this->trid_groups[ $trid ];
		}
	}

	private function filter_for_actual_trans( $element_id ) {
		$res = $this->translations[ $element_id ];
		foreach ( $res as $lang => $element ) {
			if ( $this->element_data[ $element ]['source_lang'] !== $this->element_data[ $element_id ]['lang'] ) {
				unset( $res[ $lang ] );
			}
		}

		return $res;
	}

	/**
	 * @param int $post_id
	 *
	 * @return bool
	 */
	public function is_a_duplicate( $post_id ) {
		return (bool) get_post_meta( $post_id, '_icl_lang_duplicate_of', true );
	}
}
