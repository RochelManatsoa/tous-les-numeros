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

	if ( is_search() ) {
		global $wp_query;

		$archive_title = sprintf(
			'%1$s %2$s',
			'<span class="color-accent">' . __( 'Résultats de la recherche :', 'twentytwenty' ) . '</span>',
			'&ldquo;' . get_search_query() . '&rdquo;'
		);

		if ( $wp_query->found_posts ) {
			$archive_subtitle = sprintf(
				/* translators: %s: Number of search results */
				_n(
					'We found %s result for your search.',
					'We found %s results for your search.',
					$wp_query->found_posts,
					'twentytwenty'
				),
				number_format_i18n( $wp_query->found_posts )
			);
		} else {
			$archive_subtitle = __( 'We could not find any results for your search. You can give it another try through the search form below.', 'twentytwenty' );
		}
	} elseif ( ! is_home() ) {
		$archive_title    = get_the_archive_title();
		$archive_subtitle = get_the_archive_description();
	}

	if ( $archive_title || $archive_subtitle ) {
		?>

		<header class="archive-header has-text-align-center header-footer-group">

			<div class="archive-header-inner section-inner medium">

				<?php if ( $archive_title ) { ?>
					<h1 class="archive-title"><?php echo wp_kses_post( $archive_title ); ?></h1>
				<?php } ?>

				<?php if ( $archive_subtitle ) { ?>
					<div class="archive-subtitle section-inner small max-percentage intro-text"><?php echo wp_kses_post( wpautop( $archive_subtitle ) ); ?></div>
				<?php } ?>

			</div><!-- .archive-header-inner -->

		</header><!-- .archive-header -->

		<!-- Edit Iary Static Search result -->

		<section id="result-search_" class="section-inner medium">
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
		<section id="result-search_" class="section-inner medium blur-section">
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
		</section> <!-- 2 -->
		<section id="result-search_" class="section-inner medium">
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
		</section><!-- 3 -->
		<section id="result-search_" class="section-inner medium">
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
		</section> <!-- 4 -->

		<!-- Edit Iary Static Search result -->

		<?php
	}

	if ( have_posts() ) {

		$i = 0;

		while ( have_posts() ) {
			$i++;
			// if ( $i > 1 ) {
			// 	echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true" />';
			// }
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		};
	}
	?>

	<?php get_template_part( 'template-parts/pagination' ); ?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
