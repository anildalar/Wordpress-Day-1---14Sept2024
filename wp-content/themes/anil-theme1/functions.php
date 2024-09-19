<?php 
    // What functions.php can do in wordpress theme

    //1. Load the css file = Enqueuing Styles

    //We  are calling a function
    function load_css_cbfn() {
        wp_enqueue_style('main-styles',  get_stylesheet_uri(), array('bs-styles'), '1.0.0', 'all');
        wp_enqueue_style('bs-styles', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3', 'all');
    }
    add_action('wp_enqueue_scripts','load_css_cbfn')



?>