<?php
/**
 * @package understrap
 */
defined( 'ABSPATH' ) || exit;
?>
	<div class="wrapper" id="wrapper-footer-nav">
		<div class="container">
			<div class="row">
				<div class="col-sm-7 col-md-6 navigation">
					<div class="row">
						<div class="col-sm-5 col-md-4">
							<h6><?php echo __('Navigation', 'esp'); ?></h6>
							<?php wp_nav_menu(
								array(
									'theme_location'	=> 'footer-navigation',
									'container'			=> '',
								)
							); ?>

						</div>
						<div class="col-sm-7 col-md-8 rails">
							<h6><?php echo __('Rails', 'esp'); ?></h6>
							<div class="row">
								<div class="col-md-6">
									<?php wp_nav_menu(
										array(
											'theme_location'	=> 'footer-rails-1',
											'container'			=> '',
											'menu_id'			=> 'footer-rails-1',
										)
									); ?>

								</div>
								<div class="col-md-6">
									<?php wp_nav_menu(
										array(
											'theme_location'	=> 'footer-rails-2',
											'container'			=> '',
											'menu_id'			=> 'footer-rails-2',
										)
									); ?>

								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-5 col-md-6 coordonnees">
					<div class="row">
						<div class="col-md-12">
							<h6><?php echo __('Address', 'esp'); ?></h6>
								<div class="row">
									<div class="col-md-7 adresse">
                                                                            <?php if(get_field('address','options')){ ?>
                                                                            <?php echo get_field('address','options'); ?>
                                                                            <?php } ?>
									</div>
									<div class="col-md-5 telephone">
                                                                                <?php 
                                                                                $tels = get_field('tel','options');
                                                                                if( $tels ) {
                                                                                    foreach( $tels as $tel ) { ?>
                                                                                        <a href="tel:<?php echo $tel['number']; ?>"><?php echo $tel['number']; ?></a><br />
                                                                                    <?php }
                                                                                }
                                                                                ?>
                                                                                <?php if(get_field('email','options')){ ?>
                                                                                <a href="mailto:<?php echo get_field('email','options'); ?>"><?php echo get_field('email','options'); ?></a><br /><br />
                                                                                <?php } ?>
										
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/carbon-care-enviro-access.png" alt="CARBON CARE &bull; ENVIRO-ACCESS" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper" id="wrapper-footer-copyright-privacy">
		<div class="container">
			<div class="row">
				<div class="col-md-6 copyright">&copy; <a href="/">Wirth Rail</a> <?php echo date("Y"); ?></div>
				<div class="col-md-6 privacy">
 					<?php wp_nav_menu(
						array(
							'theme_location'	=> 'sub-footer',
							'container'			=> '',
						)
					); ?>

				</div>
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>