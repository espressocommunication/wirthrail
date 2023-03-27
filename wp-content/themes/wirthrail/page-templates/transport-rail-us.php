<?php
	/**
	 * Template Name: Transport Rail US
	 * @package understrap
	 */
	defined( 'ABSPATH' ) || exit;
	get_header();
	while ( have_posts() ) : the_post();
?>
	<div class="wrapper" id="intro">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-4 col-xl-4 visuel">
					<img src="<?php the_field('image_rail'); ?>" alt="<?php the_title(); ?>" />
				</div>
				<div class="col-sm-6 col-lg-4 col-xl-3 titre">
					<h1><?php the_field('titre'); ?></h1>
					<div class="sous-titre"><?php the_field('sous-titre'); ?></div>
				</div>
				<div class="col-sm-12 col-lg-4 col-xl-5 texte">
					<?php the_field('intro'); ?>
				</div>
			</div>
<?php 
		if(get_field('intro_suite')): 
?>
			<div class="row">
				<div class="col-sm-12 suite">
					<?php the_field('intro_suite'); ?>
				</div>
			</div>
<?php 
		endif;

		$dimensions_tableau = get_field('dimensions_tableau');
		$dimensions_shortcode = '[ninja_tables id="' . $dimensions_tableau . '"]';

		$mechanical_tableau = get_field('mechanical_tableau');
		$mechanical_shortcode = '[ninja_tables id="' . $mechanical_tableau . '"]';

		$chemical_tableau = get_field('chemical_tableau');
		$chemical_shortcode = '[ninja_tables id="' . $chemical_tableau . '"]';

		$drilling_tableau = get_field('drilling_tableau');
		$drilling_shortcode = '[ninja_tables id="' . $drilling_tableau . '"]'; 

		$technical_tableau = get_field('technical_tableau');
		$technical_shortcode = '[ninja_tables id="' . $technical_tableau . '"]'; 

		$example_of_installation = get_field('example_of_installation');

		$description_texte_gauche = get_field('description_texte_gauche');
		$description_texte_droite = get_field('description_texte_droite');
?>
		</div>
	</div>
	<div class="wrapper" id="sous-nav">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<ul>
<?php 
		if($dimensions_tableau):
?>
						<li><a href="#dimensions"><?php _e('Basic Dimensions', 'wirthrail'); ?></a></li>
<?php 
		endif;
		if($mechanical_tableau):
?>
						<li><a href="#mechanical-properties"><?php _e('Mechanical properties', 'wirthrail'); ?></a></li>
<?php 
		endif;
		if($chemical_tableau):
?>
						<li><a href="#chemical-composition"><?php _e('Chemical composition', 'wirthrail'); ?></a></li>
<?php 
		endif;
		if($drilling_tableau):
?>
						<li><a href="#drilling"><?php _e('Drilling', 'wirthrail'); ?></a></li>
<?php 
		endif;
		if($technical_tableau):
?>
						<li><a href="#technical-parameters"><?php _e('Technical Parameters', 'wirthrail'); ?></a></li>
<?php 
		endif;
		if($example_of_installation):
?>
						<li><a href="#example"><?php _e('Example of Installation', 'wirthrail'); ?></a></li>
<?php 
		endif;
		if($description_texte_gauche):
?>
						<li><a href="#description"><?php _e('Description', 'wirthrail'); ?></a></li>
<?php 
		endif;
?>
					</ul>
				</div>
			</div>
		</div>
	</div>
<?php 
		if($dimensions_tableau):
?>
	<div class="wrapper" id="dimensions">
		<div id="accordion-dimensions" class="container">
			<div id="head-dimensions" class="row heading">
				<div class="col-sm-12">
					<h2 data-toggle="collapse" data-target="#collapse-dimensions" aria-expanded="true" aria-controls="collapse-dimensions" style="background-image:url('<?php the_field('icone_dimensions'); ?>');"><?php _e('Basic Dimensions', 'wirthrail'); ?><i class="fa fa-arrow-up"></i></h2>
				</div>
			</div>
			<div id="collapse-dimensions" class="row collapse show" aria-labelledby="heading-dimensions" data-parent="#accordion-dimensions">
				<div class="col-sm-12">
					<div class="tableau">
						<?php echo do_shortcode($dimensions_shortcode); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
<?php 
		endif;
		if($mechanical_tableau):
?>
	<div class="wrapper" id="mechanical-properties">
		<div id="accordion-mechanical" class="container">
			<div id="head-mechanical" class="row heading">
				<div class="col-sm-12">
					<h2 data-toggle="collapse" data-target="#collapse-mechanical" aria-expanded="true" aria-controls="collapse-mechanical"><?php _e('Mechanical properties', 'wirthrail'); ?><i class="fa fa-arrow-up"></i></h2>
				</div>
			</div>
			<div id="collapse-mechanical" class="row collapse show" aria-labelledby="heading-mechanical" data-parent="#accordion-mechanical">
				<div class="col-sm-12">
					<div class="tableau">
						<?php echo do_shortcode($mechanical_shortcode); ?>

					</div>
<?php 
			if(get_field('mechanical_legende')): 
?>
					<div class="legende">
						<?php the_field('mechanical_legende'); ?>
					</div>
<?php
			endif; 
?>
				</div>
			</div>
		</div>
	</div>
<?php 
		endif;
		if($chemical_tableau):
?>
	<div class="wrapper" id="chemical-composition">
		<div id="accordion-chemical" class="container">
			<div id="head-chemical" class="row heading">
				<div class="col-sm-12">
					<h2 data-toggle="collapse" data-target="#collapse-chemical" aria-expanded="true" aria-controls="collapse-chemical"><?php _e('Chemical composition', 'wirthrail'); ?><i class="fa fa-arrow-up"></i><div class="sous-titre"><?php _e('<strong>AREMA</strong> provides two possible steel chemistries: Carbon Steel or Low Alloy Steel', 'wirthrail'); ?></div></h2>
				</div>
			</div>
			<div id="collapse-chemical" class="row collapse show" aria-labelledby="heading-chemical" data-parent="#accordion-chemical">
				<div class="col-sm-12">
					<div class="tableau">
						<?php echo do_shortcode($chemical_shortcode); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
<?php 
		endif;
		if($drilling_tableau):
?>
	<div class="wrapper" id="drilling">
		<div id="accordion-drilling" class="container">
			<div id="head-drilling" class="row heading">
				<div class="col-sm-12">
					<h2 data-toggle="collapse" data-target="#collapse-drilling" aria-expanded="true" aria-controls="collapse-drilling"><?php _e('Drilling', 'wirthrail'); ?><i class="fa fa-arrow-up"></i></h2>
				</div>
			</div>
			<div id="collapse-drilling" class="row collapse show" aria-labelledby="heading-drilling" data-parent="#accordion-drilling">
				<div class="col-sm-12">
					<div class="tableau">
						<?php echo do_shortcode($drilling_shortcode); ?>

					</div>
<?php 
			if(get_field('drilling_image')): 
?>
					<div class="schema">
						<img src="<?php the_field('drilling_image'); ?>" alt="<?php _e('Drilling', 'wirthrail'); ?> - <?php the_field('titre'); ?>" />
					</div>
<?php 
			endif; 
?>
				</div>
			</div>
		</div>
	</div>
<?php 
		endif;
		if($technical_tableau):
?>
	<div class="wrapper" id="technical-parameters">
		<div id="accordion-technical" class="container">
			<div id="head-technical" class="row heading">
				<div class="col-sm-12">
					<h2 data-toggle="collapse" data-target="#collapse-technical" aria-expanded="true" aria-controls="collapse-technical"><?php _e('Technical Parameters', 'wirthrail'); ?><i class="fa fa-arrow-up"></i></h2>
				</div>
			</div>
			<div id="collapse-technical" class="row collapse show" aria-labelledby="heading-technical" data-parent="#accordion-technical">
				<div class="col-sm-12">
<?php 
			if(get_field('technical_intro')): 
?>
					<?php the_field('technical_intro'); ?>
<?php
			endif; 
?>
					<div class="tableau">
						<?php echo do_shortcode($technical_shortcode); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
<?php 
		endif;
		if($example_of_installation):
?>
	<div class="wrapper" id="example">
		<div id="accordion-example" class="container">
			<div id="head-example" class="row heading">
				<div class="col-sm-12">
					<h2 data-toggle="collapse" data-target="#collapse-example" aria-expanded="true" aria-controls="collapse-example"><?php _e('Example of Installation', 'wirthrail'); ?><i class="fa fa-arrow-up"></i></h2>
				</div>
			</div>
			<div id="collapse-example" class="row collapse show" aria-labelledby="heading-example" data-parent="#accordion-example">
				<div class="col-sm-12 offset-sm-0 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
					<img src="<?php echo $example_of_installation; ?>" alt="<?php _e('Example of Installation', 'wirthrail'); ?>" />
				</div>
			</div>
		</div>
	</div>
<?php 
		endif;
		if($description_texte_gauche):
?>
	<div class="wrapper" id="description">
		<div id="accordion-description" class="container">
			<div id="head-description" class="row heading">
				<div class="col-sm-12">
					<h2 data-toggle="collapse" data-target="#collapse-description" aria-expanded="true" aria-controls="collapse-description"><?php _e('Description', 'wirthrail'); ?><i class="fa fa-arrow-up" aria-hidden="true"></i></h2>
				</div>
			</div>
			<div id="collapse-description" class="row collapse show" aria-labelledby="heading-description" data-parent="#accordion-description">
				<div class="col-sm-12 col-md-6 texte">
					<?php the_field('description_texte_gauche'); ?>
				</div>
				<div class="col-sm-12 col-md-6 texte">
					<?php the_field('description_texte_droite'); ?>
				</div>
			</div>
		</div>
	</div>
<?php 
		endif;
		$souspages = get_pages(array(
			'child_of' => $post->ID,
			'sort_column' => 'menu_order',
			'sort_order' => 'asc'
		));
		foreach($souspages as $souspage): 
			$titre = get_the_title($souspage->ID);
			$soustitre = get_field('sous-titre', $souspage->ID);
			$imgurl = get_field('schema_image', $souspage->ID);
			$contenu = get_the_content($souspage->ID);
			$printurl = get_field('pdf', $souspage->ID);
			$premiercaracteretitre = substr($titre, 0, 1);
			if (is_numeric($premiercaracteretitre)) {
				$id = 'WR-'.$titre;
			} else {
				$id = $titre;
			}
?>
	<div class="modal fade" id="<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="label-<?php echo $titre; ?>" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="row">
						<div class="col-sm-6">
							<h1><?php echo $titre; ?></h1>
							<?php if($soustitre): ?><h3><?php echo $soustitre; ?></h3><?php endif; ?>

						</div>
						<div class="col-sm-6 print">
							<a href="<?php echo $printurl; ?>" target="_blank"><?php _e('Print friendly page', 'wirthrail'); ?></a>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<?php if($imgurl): ?><div class="schema"><img src="<?php echo $imgurl; ?>" alt="<?php echo $titre; if($soustitre){ echo ' (' . $soustitre . ')'; }; ?>" /></div><?php endif; ?>
						</div>
					</div>
					<div class="row data">
<?php 
			while(have_rows('data', $souspage->ID)): the_row(); 
?>
						<div class="col-sm-6 col-md-4 item">
							<h5><?php the_sub_field('titre'); ?></h5>
							<div><?php the_sub_field('valeur_metrique'); ?>&nbsp;<span><?php the_sub_field('unite_metrique'); ?></span></div>
							<div class="imperial"><?php the_sub_field('valeur_imperiale'); ?>&nbsp;<span><?php the_sub_field('unite_imperiale'); ?></span></div>
						</div>
<?php 
			endwhile; 
?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php 
		endforeach;
	endwhile;
	get_footer();
?>