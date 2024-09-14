<?php
/**
 * Contact starter content.
 */
return array(
	'post_type'    => 'page',
	'post_title'   => _x( 'Contact', 'Theme starter content', 'construction-renovationx' ),
	// 'thumbnail'    => '{{featured-image-home}}',
	'construction_light_page_layouts' => 'no',
	'template' => 'template-pagebuilder.php',
	'post_content' => '
	<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull"><!-- wp:cover {"url":"http://demo.sparklewpthemes.com/constructionlight/renonvation/wp-content/uploads/sites/52/2023/03/breadcrumb-1.jpeg","id":74,"dimRatio":20,"minHeight":20,"minHeightUnit":"vh","isDark":false,"align":"full","className":"breadcrumb","style":{"spacing":{"padding":{"top":"4rem"}}}} -->
	<div class="wp-block-cover alignfull is-light breadcrumb" style="padding-top:4rem;min-height:20vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-74" alt="" src="http://demo.sparklewpthemes.com/constructionlight/renonvation/wp-content/uploads/sites/52/2023/03/breadcrumb-1.jpeg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide"><!-- wp:heading {"align":"wide","textColor":"background","fontSize":"extra-huge"} -->
	<h2 class="alignwide has-background-color has-text-color has-extra-huge-font-size">Contact Us</h2>
	<!-- /wp:heading -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"background","fontSize":"medium"} -->
	<p class="has-background-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:600">Home</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"textColor":"background","fontSize":"medium"} -->
	<p class="has-background-color has-text-color has-medium-font-size">/</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"style":{"color":{"text":"#d1d1d1"}},"fontSize":"medium"} -->
	<p class="has-text-color has-medium-font-size" style="color:#d1d1d1">Services</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:group -->
	<!-- wp:pattern {"slug":"construction-renovationx/contact"} /-->
	',
);