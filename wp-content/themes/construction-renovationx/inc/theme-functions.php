<?php
/**
 * remove parent actions
 */
add_action( 'init', 'construction_renovationx_remove_action');

function construction_renovationx_remove_action() {
   
    remove_action('construction_light_action_banner_slider','construction_light_banner_slider', 25);

    remove_action('construction_light_action_counter', 'construction_light_counter', 60);

    remove_action('construction_light_action_team', 'construction_light_team', 75);


    add_action('construction-light-promo-service-class', function(){
        return get_theme_mod('construction_renovationx_service_up', true) ? 'service-up': 'service-normal';
    });

}

/**
 * Main Slider Function Area
*/
if (! function_exists( 'construction_renovationx_banner_slider' ) ):

    function construction_renovationx_banner_slider(){ 

        $all_slider = get_theme_mod('construction_light_slider');

        $banner_slider = json_decode( $all_slider );

        if ($banner_slider && $banner_slider[0]->slider_page ) {

         ?>

        <div id="banner-slider" class="banner-slider owl-carousel features-slider-<?php echo esc_attr(get_theme_mod('construction_light_nav_style', '1')); ?>">
            <?php 
                foreach ($banner_slider as $slider) {

                    $page_id = $slider->slider_page;

                if (!empty($page_id)) {

                    $slider_page = new WP_Query('page_id=' . $page_id);

                    if ($slider_page->have_posts()) { while ($slider_page->have_posts()) { $slider_page->the_post();
            ?>
                <div class="slider-item" data-img-url="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                    <div class="banner-table">
                        <div class="banner-table-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7 mx-auto">
                                        <div class="slider-content">
                                            <span class="super-title"><?php echo esc_html($slider->super_title); ?></span>
                                            <h2 class="slider-title">
                                                <?php the_title(); ?>
                                            </h2>
                                            <?php the_excerpt(); ?>
                                            <div class="btn-area video_calltoaction_wrap">
                                                <?php if (!empty( $slider->button_text ) ): ?>
                                                    <a href="<?php echo esc_url( $slider->button_url ); ?>" class="btn btn-primary">
                                                        <?php echo esc_html( $slider->button_text ); ?>
                                                        <i class="fas fa-arrow-right"></i>
                                                    </a>
                                                <?php endif; ?>

                                                <?php if (!empty( $slider->button_one_text ) ): ?>
                                                    <a href="<?php echo esc_url( $slider->button_one_url ); ?>" class="btn btn-border">
                                                        <?php echo esc_html($slider->button_one_text) ?>
                                                        <i class="fas fa-arrow-right"></i>
                                                    </a>
                                                <?php endif; ?>
                                                
                                                <?php if (!empty( $slider->video_url ) ): ?>
                                                    <a href="<?php echo esc_url( $slider->video_url ); ?>" class="popup-youtube box-shadow-ripples">
                                                        <i class="fas fa-play "></i>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div> <!-- slider content end-->
                                    </div> <!-- col end-->
                                </div> <!-- row end-->
                            </div><!-- container end -->
                        </div><!-- banner table cell end -->
                    </div><!-- banner table end -->
                </div>
            <?php } } } } ?>
        </div><!-- Slider section end -->
    <?php } } 
endif;
add_action('construction_light_action_banner_slider', 'construction_renovationx_banner_slider', 25);


/**
 * Advance Slider Function
*/
if (! function_exists( 'construction_renovationx_advance_banner_slider' ) ):

    function construction_renovationx_advance_banner_slider(){ 

        $all_slider = get_theme_mod('construction_light_sliders');

        $banner_slider = json_decode( $all_slider );

        $always_animate_class = "always-animate";
        
        if( !empty( $banner_slider ) ) {

            $controls = get_theme_mod('slider-controls',  json_encode(array(
				'loop'   => 1,
				'autoplay'   => 1,
				'pager'   => 0,
				'controls'   => 1,
				'usecss'   => 1,
				'easing'   => 'fadeOut',
				'slideendanimation'   => 1,
				'drag'   => 1,
				'speed'   => 2000,
				'pause'   => 5000
			)));
			
			$controls = json_decode($controls, true);
			$data = construction_light_get_data_attribute($controls);
        ?>
        <div class="sp-banner-wrapper">
            <div id="banner-slider" class="banner-slider advance-slider owl-carousel features-slider-<?php echo esc_attr(get_theme_mod('construction_light_nav_style', '1')); ?>" <?php echo ( $data ); ?>>
                <?php 
                foreach ($banner_slider as $slider) {

                    if (!empty( $slider->image ) ) {
                ?>
                    <div class="slider-item text-center" data-img-url="<?php echo esc_url( $slider->image ); ?>" style="background-image: url(<?php echo esc_url( $slider->image ) ?>);">
                        <div class="banner-table">
                            <div class="banner-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="<?php echo apply_filters('construction-light-slider-class', $slider->alignment ); ?>">
                                            <div class="slider-content wow <?php echo esc_attr($always_animate_class); ?>">
                                                
                                                <?php if( $slider->super_title ): ?>
                                                    <h6 class="super-title"><?php echo esc_html($slider->super_title); ?></h6>
                                                <?php endif; ?>

                                                <h2 class="slider-title">
                                                    <?php echo esc_html( $slider->title ); ?>
                                                </h2>

                                                <p><?php echo esc_html( $slider->subtitle ); ?></p>

                                                <div class="btn-area video_calltoaction_wrap <?php echo esc_attr($slider->alignment); if($slider->video_url) echo esc_attr(' flex-align'); ?>">
                                                    <?php if (!empty( $slider->button_text ) ): ?>
                                                        <a href="<?php echo esc_url( $slider->button_link ); ?>" class="btn btn-primary">
                                                            <?php echo esc_html( $slider->button_text ); ?>
                                                            <i class="fas fa-arrow-right"></i>
                                                        </a>
                                                    <?php endif; ?>
                                                    <?php if (!empty( $slider->button_text_one ) ): ?>
                                                        <a href="<?php echo esc_url( $slider->button_link_one ); ?>" class="btn btn-border">
                                                            <?php echo esc_html($slider->button_text_one) ?>
                                                            <i class="fas fa-arrow-right"></i>
                                                        </a>
                                                    <?php endif; ?>

                                                    <?php if (!empty( $slider->video_url ) ): ?>
                                                        <a href="<?php echo esc_url( $slider->video_url ); ?>" class="popup-youtube box-shadow-ripples">
                                                            <i class="fas fa-play "></i>
                                                        </a>
                                                    <?php endif; ?>
                                                    
                                                </div>
                                            </div> <!-- slider content end-->
                                        </div> <!-- col end-->
                                    </div> <!-- row end-->
                                </div><!-- container end -->
                            </div><!-- banner table cell end -->
                        </div><!-- banner table end -->
                    </div>
                <?php } } ?>
            </div>
        </div>
                
    <?php } }
endif;
add_action('construction_light_action_advance_banner_slider', 'construction_renovationx_advance_banner_slider', 10);


/**
 *  Success Product Counter Section.
*/
if (! function_exists( 'construction_renovationx_counter' ) ):

    function construction_renovationx_counter(){
        
        $title = get_theme_mod('construction_light_counter_title');

        $sub_title = get_theme_mod('construction_light_counter_sub_title');

        $counter_bg = get_theme_mod('construction_light_counter_image');

        $counter_options = get_theme_mod('construction_light_counter_section','enable');

        if( !empty( $counter_options ) && $counter_options == 'enable' ){
        ?>
        <section id="cl_counter" class="cons_light_counter_wrap" style="background-image:url(<?php echo esc_url( $counter_bg ); ?>);">
            <div class="container">

                <?php construction_light_section_title( $title, $sub_title ); ?>

                <div class="row cons_light_team-counter-wrap">
                    <?php
                        $counter_page = get_theme_mod('construction_light_counter');

                        if (!empty($counter_page)):

                        $counters = json_decode($counter_page);

                        $i = 1;

                        foreach ( $counters as $counter ):
                    ?>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="cons_light_counter_part">
                                <div class="cons_light_counter-icon achivement-wrapper">
                                    <i class="<?php echo esc_attr( $counter->counter_icon ); ?>"></i>
                                </div>

                                <div class="text-icon-wrap">                               
                                    <div class="cons_light_counter_wrapper">
                                        <?php if( isset($counter->counter_prefix)): ?>
                                        <div class="counter_prefix"><?php echo esc_html($counter->counter_prefix); ?></div>
                                        <?php endif; ?>
                                        <div class="cons_light_counter-count odometer odometer<?php echo esc_attr($i); ?>" data-count="<?php echo absint($counter->counter_number); ?>">
                                            99
                                        </div>
                                        <?php if(isset($counter->counter_suffix)): ?>
                                        <div class="counter_suffix"><?php echo esc_html($counter->counter_suffix); ?></div>
                                        <?php endif; ?>
                                    </div>
                                    <h6 class="cons_light_counter-title">
                                        <?php echo esc_html( $counter->counter_title ); ?>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    <?php  $i++; endforeach; endif; ?>
                </div>
            </div>
        </section>
    <?php } }
endif;
add_action('construction_light_action_counter', 'construction_renovationx_counter', 60);

/**
 *  Our Team Member Section
*/
if (! function_exists( 'construction_renovationx_team' ) ):
    function construction_renovationx_team(){

        $title = get_theme_mod('construction_light_team_title');
        $sub_title = get_theme_mod('construction_light_team_sub_title');

        $team_layout = get_theme_mod('construction_light_team_layout', 'layout_one');
        $team_page = get_theme_mod('construction_light_team');

        $team_options = get_theme_mod('construction_light_team_options','enable');

        if( !empty( $team_options ) && $team_options == 'enable' ){
            
        ?>
        <section id="cl_team" class="cons_light_team_layout_two <?php echo esc_attr( $team_layout ); ?>">
            <div class="container">
                
                <?php construction_light_section_title( $title, $sub_title ); ?>

                <div class="row">
                    <?php

                        if (!empty( $team_page ) ):

                        $team_pages = json_decode($team_page);

                        foreach ($team_pages as $team_page):
                        
                        $page_id = $team_page->team_page;

                            if (!empty( $page_id )):

                            $team_query = new WP_Query('page_id=' . $page_id);

                            if ($team_query->have_posts()): while ($team_query->have_posts()): $team_query->the_post();
                    ?>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="box d-flex">
                                <figure>
                                    <?php
                                        if( !empty( $team_layout ) && $team_layout == 'layout_two') {

                                            the_post_thumbnail('thumbnail');

                                        } else {

                                            the_post_thumbnail('construction-renovationx-team');

                                        }
                                    ?>
                                </figure>

                                <div class="team-wrap text-left">

                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

                                    <?php if (!empty( $team_page->designation ) ): ?>

                                        <span><?php echo esc_html($team_page->designation); ?></span>

                                    <?php endif; ?>

                                    <?php the_excerpt(); ?>

                                    <ul class="sp_socialicon">
                                        <?php if (!empty( $team_page->facebook ) ) : ?>
                                            <li>
                                                <a href="<?php echo esc_url( $team_page->facebook ); ?>">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                        <?php endif; if (!empty( $team_page->twitter ) ) : ?>
                                            <li>
                                                <a href="<?php echo esc_url($team_page->twitter); ?>">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                        <?php endif; if (!empty( $team_page->linkedin ) ) : ?>
                                            <li>
                                                <a href="<?php echo esc_url($team_page->linkedin); ?>">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                        <?php endif; if (!empty( $team_page->instagram ) ) : ?>
                                            <li>
                                                <a href="<?php echo esc_url($team_page->instagram); ?>">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    </ul>

                                </div>
                            </div>
                        </div>

                    <?php endwhile; endif; endif; endforeach; endif; ?>
                </div>
            </div>
        </section>
    <?php } }
endif;
add_action('construction_light_action_team', 'construction_renovationx_team', 75);