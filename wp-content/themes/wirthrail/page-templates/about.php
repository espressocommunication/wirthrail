<?php
/**
 * Template Name: About
 * @package understrap
 */
defined( 'ABSPATH' ) || exit;
get_header();
while ( have_posts() ) : the_post();
?>
	<div class="wrapper" id="entete">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 offset-sm-2 col-md-9 offset-md-3 col-lg-6 offset-lg-6 col-xl-5 offset-xl-7 content-area">
					<div class="contenu">
						<div class="surtitre"><?php the_field('entete_surtitre'); ?></div>
						<h1 class="titre"><?php the_field('entete_titre'); ?></h1>
						<a href="<?php the_field('entete_url_bouton'); ?>"><?php the_field('entete_libelle_bouton'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper" id="intro">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-8 col-lg-8 duction">
					<div class="contenu">
						<h2 class="titre"><?php the_field('presentation_titre'); ?></h2>
						<div class="texte"><?php the_field('presentation_texte'); ?></div>
						<a href="<?php the_field('presentation_url_bouton'); ?>" target="<?php the_field('presentation_cible_bouton'); ?>"><?php the_field('presentation_libelle_bouton'); ?></a>
					</div>
				</div>
				<div class="col-sm-0 col-md-4 col-lg-4 visuel"></div>
			</div>
		</div>
	</div>
	<div class="wrapper" id="citation">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 offset-sm-0 col-md-8 offset-md-4 col-lg-6 offset-lg-6 content-area">
					<div class="contenu">
						<?php the_field('citation'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper" id="qualite">
		<div class="container">
			<div class="row un">
				<div class="col-sm-12 col-md-8 gauche">
					<h2 class="titre"><?php the_field('qualite_titre'); ?></h2>
					<div class="texte"><?php the_field('qualite_texte'); ?></div>
				</div>
				<div class="col-sm-12 col-md-4 droite">
					<image src="<?php echo get_stylesheet_directory_uri(); ?>/images/about_qualite_1.jpg" alt="Worker" />
				</div>
			</div>
			<div class="row deux">
				<div class="col-sm-12 col-md-8 gauche">
					<image src="<?php echo get_stylesheet_directory_uri(); ?>/images/about_qualite_2.jpg" alt="Factory" />
				</div>
				<div class="col-sm-12 col-md-4 droite">
					<image src="<?php echo get_stylesheet_directory_uri(); ?>/images/about_qualite_3.jpg" alt="Blue print" />
				</div>
			</div>
		</div>
	</div>
<?php endwhile; get_footer(); ?>