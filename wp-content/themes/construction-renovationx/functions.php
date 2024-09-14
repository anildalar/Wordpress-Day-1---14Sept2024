<?php
/**
 * Describe child theme functions
 *
 * @package Construction Light
 * @subpackage Construction RenovationX
 * 
 */

 if ( ! function_exists( 'construction_renovationx_setup' ) ) :

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Construction RenovationX, use a find and replace
     * to change 'construction-renovationx' to the name of your theme in all the template files.
    */
    load_theme_textdomain( 'construction-renovationx', get_template_directory() . '/languages' );

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function construction_renovationx_setup() {
        
        $construction_renovationx_theme_info = wp_get_theme();

        $GLOBALS['construction_renovationx_version'] = $construction_renovationx_theme_info->get( 'Version' );

		add_theme_support( 'widgets-block-editor' );
		add_theme_support( "wp-block-styles" );
		add_theme_support( "responsive-embeds" );
		add_theme_support( "align-wide" );
		add_theme_support( "title-tag" );
		add_theme_support( 'automatic-feed-links' );
    }

endif;

add_action( 'after_setup_theme', 'construction_renovationx_setup', 50 );

/**
 * Enqueue child theme styles and scripts
*/
function construction_renovationx_scripts() {
    
    global $construction_renovationx_version;

	wp_enqueue_style( 'dashicons' );

    wp_enqueue_style( 'construction-renovationx-fonts', construction_renovationx_fonts_url(), array(), null );

    wp_dequeue_style( 'construction-light-style' );
    
    wp_enqueue_style( 'construction-renovationx-parent-style', trailingslashit( esc_url ( get_template_directory_uri() ) ) . 'style.css', array(), esc_attr( $construction_renovationx_version ) );
    
    wp_enqueue_style( 'construction-renovationx-responsive', get_template_directory_uri(). '/assets/css/responsive.css');
    
    wp_enqueue_style( 'construction-renovationx-style', get_stylesheet_uri(), esc_attr( $construction_renovationx_version ) );

    if ( is_rtl() ) {

		wp_enqueue_style( 'construction-light-rtl', trailingslashit( esc_url ( get_template_directory_uri() ) ) . 'rtl.css', array(), esc_attr( $construction_renovationx_version ) );	
	}

}
add_action( 'wp_enqueue_scripts', 'construction_renovationx_scripts', 20 );

/**
 * Dynamic Style
 */
add_filter( 'construction-light-dynamic-css', 'constructions_renovation_dymanic_styles', 100 );

function constructions_renovation_dymanic_styles($dynamic_css) {
    
   $primar_color = get_theme_mod('construction_light_primary_color');

	if($primar_color){
		
		$dynamic_css .= "
		:root, body{
			--wp--preset--color--primary: {$primar_color};
		}
		";
	}
	
	wp_add_inline_style( 'construction-renovationx-style', construction_light_css_strip_whitespace($dynamic_css) );

}

/** modify customizer */

if ( ! function_exists( 'construction_renovationx_child_options' ) ) {

    function construction_renovationx_child_options( $wp_customize ) {

		$wp_customize->remove_control('construction_light_banner_contact_enable');

		$wp_customize->remove_control('construction_light_contact_form');

		$wp_customize->remove_control('construction_light_slider_type');

		
		/** Slider type */
		$wp_customize->add_setting('construction_light_slider_type', array(
			'default' => 'advance',
			'transport' => 'postMessage',
			'sanitize_callback' => 'construction_light_sanitize_select'
		));

		$wp_customize->add_control('construction_light_slider_type', array(
			'section' => 'construction_light_slider_section',
			'type' => 'radio',
			'label' => esc_html__('Slider Type', 'construction-renovationx'),
			'choices' => array(
				'default' => esc_html__('Default Slider', 'construction-renovationx'),
				'advance' => esc_html__('Advance Slider', 'construction-renovationx'),	
			)
		));

        // List All Pages
        $pages = array();

        $pages_obj = get_pages();

        $pages[''] = esc_html__('Select Page', 'construction-renovationx');

        foreach ($pages_obj as $page) {
            $pages[$page->ID] = $page->post_title;
        }

        // Normal Page Slider Type
		$wp_customize->add_setting('construction_light_slider', array(
		    'sanitize_callback' => 'construction_light_sanitize_repeater',		//done
		    'default' => json_encode(array(
		        array(
                    'super_title',
		            'slider_page' => '',
		            'button_text' => '',
		            'button_url' => '',
		            'button_one_text' => '',
		            'button_one_url' => '',
		            'video_url' => '',
		        )
		    ))
		));

		$wp_customize->add_control(new Construction_Light_Repeater_Control( $wp_customize, 
			'construction_light_slider', 

			array(
			    'label' 	   => esc_html__('Banner Slider Page Settings', 'construction-renovationx'),
			    'section' 	   => 'construction_light_slider_section',
			    'settings' 	   => 'construction_light_slider',
			    'cl_box_label' => esc_html__('Slider Settings Options', 'construction-renovationx'),
			    'cl_box_add_control' => esc_html__('Add New Slider', 'construction-renovationx'),
			),

		    array(
                'super_title' => array(
		            'type' => 'text',
		            'label' => esc_html__('Super Title', 'construction-renovationx'),
		            'default' => ''
		        ),

		        'slider_page' => array(
		            'type' => 'select',
		            'label' => esc_html__('Select Slider Page', 'construction-renovationx'),
		            'options' => $pages
		        ),

		        'button_text' => array(
		            'type' => 'text',
		            'label' => esc_html__('Enter First Button Text', 'construction-renovationx'),
		            'default' => ''
		        ),
		        
		        'button_url' => array(
		            'type' => 'url',
		            'label' => esc_html__('Enter First Button Url', 'construction-renovationx'),
		            'default' => ''
		        ),

		        'button_one_text' => array(
		            'type' => 'text',
		            'label' => esc_html__('Enter Second Button Text', 'construction-renovationx'),
		            'default' => ''
		        ),
		        
		        'button_one_url' => array(
		            'type' => 'url',
		            'label' => esc_html__('Enter Second Button Url', 'construction-renovationx'),
		            'default' => ''
		        ),

                'video_url' => array(
		            'type' => 'url',
		            'label' => esc_html__('Video URL', 'construction-renovationx'),
		            'default' => ''
		        ),
			)
		));


		$wp_customize->add_setting('construction_light_sliders', array(
			'sanitize_callback' => 'construction_light_sanitize_repeater',
			'transport' => 'postMessage',
			'default' => json_encode(array(
				array(
					'image' => '',
					'super_title' => '',
					'title' => '',
					'subtitle' => '',
					'alignment' => '',
					'video_url' => '',
					'button_link' => '',
					'button_link_one' => '',
					'button_text' => esc_html__('Read More', 'construction-renovationx'),
					'button_text_one' => '',
				)
			)),
			// 'transport' => 'postMessage'
		));
		$wp_customize->add_control(new Construction_Light_Repeater_Control($wp_customize, 
		'construction_light_sliders', 
			array(
				'label' => esc_html__('Add Sliders', 'construction-renovationx'),
				'section' => 'construction_light_slider_section',
				'cl_box_label' => esc_html__('Slider', 'construction-renovationx'),
				'cl_box_add_control' => esc_html__('Add Slider', 'construction-renovationx'),
			), 
			array(
			'image' => array(
				'type' => 'upload',
				'label' => esc_html__('Upload Image', 'construction-renovationx'),
				'default' => ''
			),
			'super_title' => array(
				'type' => 'text',
				'label' => esc_html__('Super Title', 'construction-renovationx'),
				'default' => ''
			),
			'title' => array(
				'type' => 'text',
				'label' => esc_html__('Title', 'construction-renovationx'),
				'default' => ''
			),
			'subtitle' => array(
				'type' => 'textarea',
				'label' => esc_html__('Subtitle', 'construction-renovationx'),
				'default' => ''
			),

			'video_url' => array(
				'type' => 'url',
				'label' => esc_html__('Video URL', 'construction-renovationx'),
				'default' => ''
			),

			'alignment' => array(
				'type' => 'select',
				'label' => esc_html__("Alignement", 'construction-renovationx'),
				'default' =>'col-lg-8 cl-center-content text-center mx-auto',
				'options' => array(
					'col-lg-8 text-left' => esc_html__("Left", 'construction-renovationx'),
					'col-lg-8 cl-center-content text-center mx-auto' => esc_html__("Center", 'construction-renovationx'),
					'col-lg-8 offset-md-4 text-right' => esc_html__("Right", 'construction-renovationx'),
				)
			),

			'button_link' => array(
				'type' => 'text',
				'label' => esc_html__('First Button Link', 'construction-renovationx'),
				'default' => ''
			),
			'button_text' => array(
				'type' => 'text',
				'label' => esc_html__('First Button Text', 'construction-renovationx'),
				'default' => esc_html__('Read More', 'construction-renovationx')
			),
			'button_link_one' => array(
				'type' => 'text',
				'label' => esc_html__('Second Button Link', 'construction-renovationx'),
				'default' => ''
			),
			'button_text_one' => array(
				'type' => 'text',
				'label' => esc_html__('Second Button Text', 'construction-renovationx'),
				'default' => ''
			),
			
		)));
        

		/** service sction new control */
		$wp_customize->add_setting( 'construction_renovationx_service_up', array(
			'default' => true,
			'transport' => 'postMessage',
			'sanitize_callback' => 'construction_light_sanitize_checkbox'			//done
		));

		$wp_customize->add_control( 'construction_renovationx_service_up', array(
			'label'    => esc_html__( 'Service UP', 'construction-renovationx' ),
			'section'  => 'construction_light_promoservice_section',
			'type'     => 'checkbox'
		));

		$wp_customize->selective_refresh->add_partial( 'construction_renovationx_service_up', array (
			'settings' => array('construction_renovationx_service_up'),
			'selector' => '#cl-promoservice-section',
			'container_inclusive' => true,
			'render_callback' => function () {

				if(get_theme_mod('construction_light_features_service_section', 'enable') === 'enable') {

					return get_template_part('section/section', 'promoservice');
				} 
			}
		));

    }
}
add_action( 'customize_register' , 'construction_renovationx_child_options', 11 );

/** include files */
require get_stylesheet_directory() . '/inc/theme-functions.php';

if ( ! function_exists( 'construction_renovationx_fonts_url' ) ) :

	/**
	 * Register Google fonts for Construction Light
	 *
	 * Create your own construction_renovationx_fonts_url() function to override in a child theme.
	 *
	 * @since Construction Light 1.0.0
	 *
	 * @return string Google fonts URL for the theme.
	 */

    function construction_renovationx_fonts_url() {

        $fonts_url = '';

        $font_families = array();

        
        if ( 'off' !== _x( 'on', 'Roboto: on or off', 'construction-renovationx' ) ) {
            $font_families[] = 'Roboto:400,400i,500,500i,700,700i';
        }
        if ( 'off' !== _x( 'on', 'El Messiri: on or off', 'construction-renovationx' ) ) {
            $font_families[] = 'El Messiri:400,400i,500,500i,700,700i';
        }

        if ( 'off' !== _x( 'on', 'Open Sans: on or off', 'construction-renovationx' ) ) {
            $font_families[] = 'Open Sans:300,400,600,700,800';
        }

        if( $font_families ) {

            $query_args = array(

                'family' => urlencode( implode( '|', $font_families ) ),
                'subset' => urlencode( 'latin,latin-ext' ),
            );

            $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
        }

        return esc_url ( $fonts_url );
    }

endif;



function construction_renovationx_widgets(){

	// Unregister some of the TwentyTen sidebars
	unregister_sidebar( 'footer-1' );
	unregister_sidebar( 'footer-2' );
	unregister_sidebar( 'footer-3' );
	unregister_sidebar( 'footer-4' );
}
add_action( 'widgets_init', 'construction_renovationx_widgets', 11 );

// The filter callback function.
function constructions_renovation_primary_color( $color = null ) {
    return "#007aff";
}
add_filter( 'construction_light_primary_color', 'constructions_renovation_primary_color', 10, 1 );


/** add new category for patterns */
add_filter( 'construction_light_fse_block_pattern_categories', function( $category ){

	$block_pattern_categories = array(
		'construction-renovationx' => array( 'label' => __( 'Construction RenovationX', 'construction-renovationx' ) )
	);

	return array_merge( array(), $block_pattern_categories );
});

add_filter('construction_light_homepage_sections', function($sections){
	return array(
		'construction_light_promoservice_section',
		'construction_light_freetext',
		'construction_light_aboutus_section',
		'construction_light_video_calltoaction_section',
		'construction_light_service_section',
		'construction_light_calltoaction_section',
		'construction_light_recentwork_section',
		'construction_light_blog_section',
		'construction_light_testimonial_section',
		'construction_light_team_section',
		'construction_light_client_section',
		'construction_light_counter_section',
		'construction_light_producttype_section',
		'construction_light_pricing',
	);
});

add_action('construction-light-pro-link', function(){
	
	return 'https://sparklewpthemes.com/wordpress-themes/construction-wordpress-theme/?wpam_id=55';
}, 15);

/**
 * starter content
 */
require get_stylesheet_directory() .'/starter-content/init.php';