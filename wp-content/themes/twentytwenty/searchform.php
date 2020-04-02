<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label if
 * one was passed to get_search_form() in the args array.
 */
$unique_id = twentytwenty_unique_id( 'search-form-' );

$aria_label = ! empty( $args['label'] ) ? 'aria-label="' . esc_attr( $args['label'] ) . '"' : '';
?>
<form role="search" <?php echo $aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="form-inline-b">
		<div>
			<strong class="title-input">Particuliers</strong>
			<label for="<?php echo esc_attr( $unique_id ); ?>">
				<span class="screen-reader-text"><?php _e( 'Search for:', 'twentytwenty' ); // phpcs:ignore: WordPress.Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations ?></span>
				<input type="search" id="<?php echo esc_attr( $unique_id ); ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Qui', 'placeholder', 'twentytwenty' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
			</label>
		</div>
		<div>
			<strong class="title-input">Professionnels</strong>
			<label for="<?php echo esc_attr( $unique_id ); ?>">
				<span class="screen-reader-text"><?php _e( 'Search for:', 'twentytwenty' ); // phpcs:ignore: WordPress.Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations ?></span>
				<input type="search" id="<?php echo esc_attr( $unique_id ); ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Quoi', 'placeholder', 'twentytwenty' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
			</label>
		</div>
	</div>
	<label for="<?php echo esc_attr( $unique_id ); ?>">
		<span class="screen-reader-text"><?php _e( 'Search for:', 'twentytwenty' ); // phpcs:ignore: WordPress.Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations ?></span>
		<input type="search" id="<?php echo esc_attr( $unique_id ); ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Où', 'placeholder', 'twentytwenty' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'twentytwenty' ); ?>" />
</form>
