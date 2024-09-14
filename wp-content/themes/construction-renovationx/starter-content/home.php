<?php
/**
 * Home starter content.
 */
$default_home_content = '
<!-- wp:pattern {"slug":"construction-renovationx/hero"} /-->
<!-- wp:pattern {"slug":"construction-renovationx/service"} /-->
<!-- wp:pattern {"slug":"construction-renovationx/service-2"} /-->
<!-- wp:pattern {"slug":"construction-renovationx/about"} /-->
<!-- wp:pattern {"slug":"construction-renovationx/why"} /-->
<!-- wp:pattern {"slug":"construction-renovationx/working"} /-->
<!-- wp:pattern {"slug":"construction-renovationx/team"} /-->
<!-- wp:pattern {"slug":"construction-renovationx/counter"} /-->
<!-- wp:pattern {"slug":"construction-renovationx/testimonials"} /-->
';

return array(
	'post_type'    => 'page',
	'post_title'   => _x( 'Home FSE', 'Theme starter content', 'construction-renovationx' ),
	'template' => 'template-pagebuilder.php',
	'post_content' => $default_home_content,
);
