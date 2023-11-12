<?php
if ( ! function_exists( 'leonsTheme2_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function leonsTheme2_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;
add_action( 'after_setup_theme', 'leonsTheme2_support' );


/*-------------------------------------------------------
Enqueue Styles
-------------------------------------------------------*/
if ( ! function_exists( 'leonsTheme2_styles' ) ) :

  function leonsTheme2_styles() {
    //Register Stylesheet
    wp_enqueue_style('leonsTheme2-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('leonsTheme2-style-blocks', get_template_directory_uri() . '/assets/css/blocks.css');
  }
endif;
add_action( 'wp_enqueue_scripts', 'leonsTheme2_styles');
?>
