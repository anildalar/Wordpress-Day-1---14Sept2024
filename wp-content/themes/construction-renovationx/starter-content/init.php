<?php
    
function construction_renovationx_starter_content_setup(){

    add_theme_support( 'starter-content', array(
        'posts' => array(
            'home'    => require __DIR__ . '/home.php',
            'contact' => require __DIR__ . '/contact.php',
            'services' => require __DIR__ . '/service.php',
            'about' => require __DIR__ . '/about.php',
        ),
        
        'options' => array(
            'show_on_front' => 'page',
            'page_on_front' => '{{home}}',
            'page_for_posts' => '{{blog}}',
            // Our Custom
            'blogdescription' => 'Just another WordPress site ',
            
        ),

        'theme_mods'  => array(
            'construction_light_enable_frontpage' => true,
            'construction_light_primary_color' => apply_filters('construction_light_primary_color', '#007aff'),
            'construction_light_page_sidebar' => 'no',
            
            /** quick contact info for header */
            'construction_light_top_header_enable' => 'disable',
            'construction_light_search_layout' => 'layout_two',
            'construction_light_address' => 'Your Address',
            'construction_light_contact_num' => '(+1)-1234,56789',
            'construction_light_email' => 'example@example.com',
            'construction_light_breadcrumbs_image' => get_stylesheet_directory_uri() . '/images/breadcrumb.jpeg',

            'construction_light_slider_type' => 'advance',
            'construction_light_sliders' => json_encode( array(
                array(
                    'image' => get_stylesheet_directory_uri() . '/images/wood-house-floor-home-ceiling-construction-633136-pxhere.com.jpg',
                    'super_title' => 'Trusted by 3 million users.',
                    'title' => 'Complete Home Renovation Service',
                    'subtitle' => 'Doloremque voluptate fugiat vero at, quas ut maxime natus, error earum, vel, esse hic facilis cumque…',
                    'alignment' => 'col-lg-8 text-left',
                    'button_link' => '#',
                    'button_link_one' => '#',
                    'button_text' => esc_html__('Contact Us', 'construction-renovationx'),
                    'button_text_one' => 'Book Appointment',
                    'video_url' => '#'
                )
            )),
            
            'construction_light_promoservice_type' => 'advance',
            'construction_light_promoservice_advance' => json_encode( array(
                array(
                    'image' => 'https://demo.sparklewpthemes.com/constructionlight/renonvation/wp-content/uploads/sites/52/2023/03/architecture-white-house-chair-floor-interior-1204494-pxhere.com_.jpg',
					'icon' => 'fas fa-snowflake',
					'title' => 'Renovation',
					'content' => 'Delectus ea, fugiat possimus iste facilis minima dolor consequatur vel voluptas assumenda eum beatae, autem architecto…',
					'link_text' => '',
					'link' => '#'
				),
                array(
                    'image' => 'https://demo.sparklewpthemes.com/constructionlight/renonvation/wp-content/uploads/sites/52/2023/03/wood-house-floor-home-ceiling-construction-633136-pxhere.com_.jpg',
					'icon' => 'fas fa-snowflake',
					'title' => 'Remodeling',
					'content' => 'Delectus ea, fugiat possimus iste facilis minima dolor consequatur vel voluptas assumenda eum beatae, autem architecto…',
					'link_text' => '',
					'link' => '#'
				),
                array(
                    'image' => 'https://demo.sparklewpthemes.com/constructionlight/renonvation/wp-content/uploads/sites/52/2023/03/landscape-grass-architecture-wood-farm-lawn-792610-pxhere.com-1.jpg',
					'icon' => 'fas fa-snowflake',
					'title' => 'Construction',
					'content' => 'Delectus ea, fugiat possimus iste facilis minima dolor consequatur vel voluptas assumenda eum beatae, autem architecto…',
					'link_text' => '',
					'link' => '#'
				)
            )),

            'construction_light_aboutus_service_section' => 'disable',
            'construction_light_aboutus' => '{{about}}',

            
            /**
             * Video Call to Action
             */

            'construction_light_video_button_url' => '#',
            'construction_light_video_calltoaction_title' => 'We’ve 20 Years Of Experienced',
            'construction_light_video_calltoaction_subtitle' => 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco',
            'construction_light_video_calltoaction_image' => get_stylesheet_directory_uri() . '/images/wood-house-floor-home-ceiling-construction-633136-pxhere.com.jpg',

            /** call to action */
            'construction_light_calltoaction_title' => 'Committed to keep people healthy & safe',
            'construction_light_calltoaction_subtitle' => 'We understand that projects represent not only buildings, but the plans for the future of our clients ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperia',
            'construction_light_calltoaction_button' => 'Contact Us',
            'construction_light_calltoaction_link' => '#',
            'construction_light_calltoaction_image' => get_stylesheet_directory_uri() . '/images/wood-house-floor-home-ceiling-construction-633136-pxhere.com.jpg',
            
            'construction_light_portfolio_section' => 'disable',

            /** our service section */
            'construction_light_service_super_title' => 'What we do?',
            'construction_light_service_title' => 'Trusted Plumbing Professionals',
            'construction_light_service_sub_title' => 'In auctor ex id urna faucibus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In maximus ligula semper metus pellentesque mattis.',
            'construction_light_service_type' => 'advance',
            'construction_light_service_layout' => 'layout_four',
            'construction_light_service_advance' => json_encode(array(
				array(
                    'image' => '',
					'icon' => 'fas fa-snowflake',
					'title' => 'Fast Reliable Services',
					'content' => 'In auctor ex id urna faucibus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In maximus ligula semper metus pellentesque mattis.',
					'link_text' => 'Read More',
					'link' => '#',
					'enable' => 'on'
                ),
                array(
                    'image' => '',
					'icon' => 'fas fa-snowflake',
					'title' => 'Skilled & Trained Professionals',
					'content' => 'In auctor ex id urna faucibus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In maximus ligula semper metus pellentesque mattis.',
					'link_text' => 'Read More',
					'link' => '#',
					'enable' => 'on'
				),
                array(
                    'image' => '',
					'icon' => 'fas fa-snowflake',
					'title' => 'Emergency Service',
					'content' => 'In auctor ex id urna faucibus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In maximus ligula semper metus pellentesque mattis.',
					'link_text' => 'Read More',
					'link' => '#',
					'enable' => 'on'
				),
                array(
                    'image' => '',
					'icon' => 'fas fa-snowflake',
					'title' => '10 Years Warranty',
					'content' => 'In auctor ex id urna faucibus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In maximus ligula semper metus pellentesque mattis.',
					'link_text' => 'Read More',
					'link' => '#',
					'enable' => 'on'
				)
			)),

            /** counter section */
            'construction_light_counter_section' => 'enable',

            'construction_light_counter_title' => '25 Years Of Experience',
            'construction_light_counter_sub_title' => 'In auctor ex id urna faucibus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In maximus ligula semper metus pellentesque mattis.',
            'construction_light_counter_image' => get_stylesheet_directory_uri() . '/images/wood-house-floor-home-ceiling-construction-633136-pxhere.com.jpg',
            'construction_light_counter' => json_encode(array(
		        array(
		            'counter_icon'  =>'fas fa-wind',
		            'counter_title'  =>'Project Done',
					'counter_number'  =>'2500',	            
					'counter_prefix' => '',
					'counter_suffix' => '+'
				),
				array(
		            'counter_icon'  =>'fas fa-pencil-alt',
		            'counter_title'  =>'Employees',
					'counter_number'  =>'1200',	            
					'counter_prefix' => '',
					'counter_suffix' => '+'
				),
				array(
		            'counter_icon'  =>'fas fa-bolt',
		            'counter_title'  =>'Awards Won',
					'counter_number'  =>'2500',	            
					'counter_prefix' => '+',
					'counter_suffix' => ''
				),
				array(
		            'counter_icon'  =>'fab fa-github-alt',
		            'counter_title'  =>'Happy Clients',
					'counter_number'  =>'3000',	            
					'counter_prefix' => '',
					'counter_suffix' => '+'
				),
            )),


            'construction_light_testimonial_options' => 'disable',
            'construction_light_home_blog_section' => 'disable',
            'construction_light_team_options' => 'disable',
            
            /** clients section */
            'construction_light_client_logo_options' => 'enable',
            'construction_light_client_title' => 'Our Clients',
            'construction_light_client_sub_title' => 'In auctor ex id urna faucibus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In maximus ligula semper metus pellentesque mattis.',
            'construction_light_client' => json_encode(array(
		        array(
		            'client_image' => get_template_directory_uri() . '/assets/default/logo1.png',
		            'client_link'  => '#',
                ),
                array(
		            'client_image' => get_template_directory_uri() . '/assets/default/logo4.png',
		            'client_link'  => '#',
		        ),
                array(
		            'client_image' => get_template_directory_uri() . '/assets/default/logo3.png',
		            'client_link'  => '#',
		        )
            )),

            /** pricing  */
            'construction_light_pricing_section_disable' => 'disable',
            'construction_light_pricing_title' => 'Pricing Plan',
            'construction_light_pricing_sub_title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'construction_light_pricing' =>  json_encode(array(
                array(
                    'page'   => '{{sample}}',
                    'price' =>'$400',
                    'popular' =>'',
                    'icon' => 'fas fa-cloud',
                    'type' => 'Yearly'
                    
                ),
                array(
                    'page'   => '{{sample}}',
                    'price' =>'$900',
                    'popular' =>'1',
                    'icon' => 'fas fa-home',
                    'type' => 'Yearly'
                    
                ),
                array(
                    'page'   => '{{sample}}',
                    'price' =>'$400',
                    'popular' =>'',
                    'icon' => 'fas fa-cloud',
                    'type' => 'Yearly'
                    
                ),
            )),

            /** free hand */
            'construction_light_freetext_section' => 'enable',
            'construction_light_free_text' => '<!-- wp:pattern {"slug":"construction-renovationx/about-2"} /-->',
            
        ),

        'nav_menus' => array(
            'menu-1' => array(
				'name' => __( 'Top Menu', 'construction-renovationx' ),
				'items' => array(
					'page_home',
					'page_about',
					'page_blog',
					
					
                    
					'page_service' => array(
						'type' => 'post_type',
						'object' => 'page',
						'object_id' => '{{services}}',
					),
                    'page_pricing' => array(
						'type' => 'post_type',
						'object' => 'page',
						'object_id' => '{{pricing}}',
					),

                    'page_contact',
				),
			),
		),
    ));
}
/** remove old action and add new */
add_action( 'after_setup_theme', 'construction_renovationx_remove_starter_content_action', 0);
function construction_renovationx_remove_starter_content_action() {
    remove_action( 'after_setup_theme', 'construction_light_starter_content_setup' );
}
add_action( 'after_setup_theme', 'construction_renovationx_starter_content_setup' );