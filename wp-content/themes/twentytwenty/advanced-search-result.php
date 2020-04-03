<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
$has_sidebar_1 = is_active_sidebar( 'sidebar-1' );
$get = json_encode($_GET);
?>
<main id="site-content" role="main">

	<!-- Arcive edit Iary -->

	<div class="cover-header bg-image bg-attachment-fixed" style="background-image: url( http://wp.tous-les-numeros.fr/wp-content/uploads/2020/03/bg-home.jpg );">
		<div class="cover-header-inner-wrapper screen-height">
			<div class="cover-header-inner">
				<div class="cover-color-overlay color-accent opacity-80" style="color: #000000;"></div>

					<header class="entry-header has-text-align-center">
						<div class="entry-header-inner section-inner medium">
							<div class="section_slider_flex">
								<div class="left_block">
									<?php
										// Site title or logo.
										twentytwenty_site_logo();
									?>
									<h1 class="entry-title">Service de renseignements  téléphoniques</h1>
								</div>
								<div class="right_block">
									<span class="images_call">
										<img src="http://wp.tous-les-numeros.fr/wp-content/uploads/2020/03/call.png" alt="Call"/>
									</span>
									<?php if ( $has_sidebar_1 ) { ?>
										<div class="search-widgets column-one grid-item">
											<div class="widgets widget_search">
												<div class="widgets-content">
													<?php get_template_part( 'advanced', 'searchform' ); ?>
												</div>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
							<!-- Iary Ajout -->
						</div><!-- .entry-header-inner -->
					</header><!-- .entry-header -->

			</div><!-- .cover-header-inner -->
		</div><!-- .cover-header-inner-wrapper -->
	</div><!-- .cover-header -->

	<!-- Arcive edit Iary -->

	<?php

	$archive_title    = '';
	$archive_subtitle = '';
										
		?>

		<header class="archive-header has-text-align-center header-footer-group">

			<div class="archive-header-inner section-inner medium">

					<h1 class="archive-title">RÉSULTATS DE LA RECHERCHE</h1>

			</div><!-- .archive-header-inner -->

		</header><!-- .archive-header -->

		<!-- Edit Iary Static Search result -->
		<div id="result-search">
			<section class="section-inner medium">
				<div class="list-result_">
					<div class="list-result_l">
						<div class="society">Nom Société</div>
						<p>Service (réclamation-client- SAV)</p>
						<div class="btn_appel btn_appel_deskotp">
							<a href="tel:118001" class="btn-appel">Appeler <span class="shine"></span><span class="line"></span></a>
							<img id="cartouche_" src="http://wp.tous-les-numeros.fr/wp-content/uploads/2020/04/cartouche-appel.png" alt="118001" />
						</div>
					</div>
					<div class="list-result_r">
						<div>
							<div class="adr">Adresse postal</div>
							<div class="tel_"><strong>Téléphone</strong></div>
							<div class="reseau_s">Réseaux sociaux</div>
						</div>
					</div>
					<div class="btn_appel btn_appel_mobile">
						<a href="tel:118001" class="btn-appel">Appeler <span class="shine"></span><span class="line"></span></a>
						<img id="cartouche_" src="http://wp.tous-les-numeros.fr/wp-content/uploads/2020/04/cartouche-appel.png" alt="118001" />
					</div>
				</div>
			</section> <!-- 1 -->
		</div>

		<!-- Edit Iary Static Search result -->


</main><!-- #site-content -->
<script type="text/javascript">
	var get = <?php echo $get; ?>;
</script>
<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
