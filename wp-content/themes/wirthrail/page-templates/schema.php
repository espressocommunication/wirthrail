<?php
/**
 * Template Name: Schéma
 * @package understrap
 */
defined( 'ABSPATH' ) || exit;
get_header();
while ( have_posts() ) : the_post();
?>
	<div class="wrapper" id="intro">
		<div class="container">
			<div class="row entete">
				<div class="col-sm-12 col-md-6 titre">
					<h1><?php the_title(); ?></h1>
					<?php if(get_field('sous-titre')): ?><h3><?php the_field('sous-titre'); ?></h3><?php endif; ?>
				</div>
				<div class="col-sm-12 col-md-6 print">
					<a href="<?php the_field('pdf'); ?>" target="_blank"><?php _e('Print friendly page', 'wirthrail'); ?></a>
					<a href="<?php echo get_permalink($post->post_parent); ?>"><?php _e('See more profiles', 'wirthrail'); ?></a>
				</div>
			</div>
			<div class="row contenu">
				<div class="col-sm-12 col-md-9 visuel">
					<?php if(get_field('schema_image')): ?><div class="schema"><img src="<?php the_field('schema_image'); ?>" alt="<?php the_title(); if(get_field('sous-titre')){ echo ' (' . get_field('sous-titre') . ')'; }; ?>" /></div><?php endif; ?>
				</div>
				<div class="col-sm-12 col-md-2 offset-md-1 texte">
					<div class="row data">
<?php while(have_rows('data')): the_row(); ?>
						<div class="item">
							<h5><?php the_sub_field('titre'); ?></h5>
							<div><?php the_sub_field('valeur_metrique'); ?> <span><?php the_sub_field('unite_metrique'); ?></span></div>
							<div class="imperial"><?php the_sub_field('valeur_imperiale'); ?> <span><?php the_sub_field('unite_imperiale'); ?></span></div>
						</div>
<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; get_footer(); ?>