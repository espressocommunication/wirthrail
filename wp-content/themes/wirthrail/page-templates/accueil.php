<?php
/**
 * Template Name: Accueil
 * @package understrap
 */
defined( 'ABSPATH' ) || exit;
get_header();
while ( have_posts() ) : the_post();
?>
	<div class="wrapper" id="entete">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-10 col-lg-7 col-xl-6 content-area">
					<div class="contenu">
						<div class="surtitre"><?php the_field('entete_surtitre'); ?></div>
						<h1 class="titre"><?php the_field('entete_titre'); ?></h1>
						<a href="<?php the_field('entete_url_bouton'); ?>" target="<?php the_field('entete_cible_bouton'); ?>"><?php the_field('entete_libelle_bouton'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper" id="intro">
		<div class="container">
			<div class="row">
				<div class="col-sm-0 col-md-4 col-lg-4 visuel"></div>
				<div class="col-sm-12 col-md-8 col-lg-8 duction">
					<div class="contenu">
						<h2 class="titre"><?php the_field('presentation_titre'); ?></h2>
						<div class="texte"><?php the_field('presentation_texte'); ?></div>
						<a href="<?php the_field('presentation_url_bouton'); ?>"><?php the_field('presentation_libelle_bouton'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper" id="nouvelles-entete">
		<div class="container">
			<div class="row titre">
				<div class="col-md-12">
					<h2 class="titre-section"><?php echo __('Why work with us?', 'wr'); ?></h2>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper" id="nouvelles">
		<div class="container">
			<div class="row items">
			<?php
				$news_query = new WP_Query('posts_per_page=3');
				while ($news_query->have_posts()) : $news_query->the_post();
			?>

				<div class="col-sm-6 col-md-4 item">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php the_field('icone'); ?>" alt="<?php the_title(); ?>" /></a>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<div class="amorce"><?php the_excerpt(); ?></div>
					<a href="<?php the_permalink(); ?>" class="suite"><?php echo __('See more', 'wr'); ?></a>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
	<div class="wrapper" id="clients">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="titre-section"><?php echo __('Our clients', 'wr'); ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-lg-3">
					<a href="#" target="_blank" title="_"><img src="/wp-content/uploads/2020/05/reseau-express-metropolitain.jpg" alt="_" /></a>
				</div>
				<div class="col-sm-6 col-lg-3">
					<a href="#" target="_blank" title="_"><img src="/wp-content/uploads/2020/05/reseau-express-metropolitain.jpg" alt="_" /></a>
				</div>
				<div class="col-sm-6 col-lg-3">
					<a href="#" target="_blank" title="_"><img src="/wp-content/uploads/2020/05/reseau-express-metropolitain.jpg" alt="_" /></a>
				</div>
				<div class="col-sm-6 col-lg-3">
					<a href="#" target="_blank" title="_"><img src="/wp-content/uploads/2020/05/reseau-express-metropolitain.jpg" alt="_" /></a>
				</div>
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
<?php endwhile; get_footer(); ?>