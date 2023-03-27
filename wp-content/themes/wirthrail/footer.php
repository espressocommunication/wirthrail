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
							<h6>Navigation</h6>
							<?php wp_nav_menu(
								array(
									'theme_location'	=> 'footer-navigation',
									'container'			=> '',
								)
							); ?>

						</div>
						<div class="col-sm-7 col-md-8 rails">
							<h6>Rails</h6>
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
							<h6>Address</h6>
								<div class="row">
									<div class="col-md-7 adresse">
										M.F. Wirth Rail Corporation<br />
										740 Notre-Dame Street West<br />
										Suite 1240<br />
										Montréal&nbsp;(QC)&nbsp;&nbsp;H3C&nbsp;3X6<br />
										Canada<br /><br />
										Wirth Rail America Inc.<br />
										PO Box 4845<br />
										Harrisburg, PA 17111<br />
										USA
									</div>
									<div class="col-md-5 telephone">
										<a href="tel:+18669099133">+1&nbsp;866&nbsp;909-9113</a><br />
										<a href="tel:+15143697245">+1&nbsp;514&nbsp;369-7245</a><br />
										<a href="mailto:info@wirthrail.com">info@wirthrail.com</a><br /><br />
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