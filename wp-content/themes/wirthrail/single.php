<?php
/* @package understrap */
defined( 'ABSPATH' ) || exit;
get_header();
while ( have_posts() ) : the_post();
?>
	<div class="wrapper" id="nouvelle">
		<div class="photo" style="background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID(),"large"); ?>');"></div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 offset-xs-0 col-sm-9 offset-sm-3 col-md-8 offset-md-4 contenant">
					<div class="symbole"></div>
					<div class="contenu">
						<h1 class="titre"><?php the_title(); ?></h1>
						<div class="texte">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; get_footer(); ?>