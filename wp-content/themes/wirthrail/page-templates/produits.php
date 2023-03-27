<?php
	/**
	 * Template Name: Produits
	 * @package understrap
	 */
	defined( 'ABSPATH' ) || exit;
	get_header();
	while ( have_posts() ) : the_post();
?>
	<div class="wrapper" id="titre">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper" id="produits">
		<div class="container">
			<div class="row">
<?php 
		while( have_rows('produits') ) : 
			the_row();
?>
				<div class="col-sm-12 col-md-6 col-lg-4">
					<a href="<?php the_sub_field('page_produit'); ?>" class="produit">
						<img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('titre'); ?>" />
						<div class="legende">
							<h3><?php the_sub_field('titre'); ?></h3>
							<div class="sous-titre">
								<?php the_sub_field('sous-titre'); ?>&nbsp;<i class="fa-solid fa-caret-right"></i>
							</div>
						</div>
					</a>
				</div>
<?php 
		endwhile;
?>				
			</div>
		</div>
	</div>
	<div class="wrapper" id="tele">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-5 col-lg-4 visuel"><a href="<?php the_field('telechargement_url_bouton'); ?>" title="<?php the_field('telechargement_libelle_bouton'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wirth-rail-catalog.jpg" alt="Wirth Rail catalog" /></a></div>
				<div class="col-sm-6 col-md-5 col-lg-4 chargement">
					<div class="contenu">
						<h2 class="titre"><?php the_field('telechargement_titre'); ?></h2>
						<div class="texte"><?php the_field('telechargement_texte'); ?></div>
						<a href="<?php the_field('telechargement_url_bouton'); ?>" target="_blank"><?php the_field('telechargement_libelle_bouton'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php 
	endwhile;
	get_footer();
?>