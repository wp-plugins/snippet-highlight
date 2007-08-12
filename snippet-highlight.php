<?php
/*
Plugin Name: Snippet Highlight
Plugin URI: http://wordpress.designpraxis.at
Description: A filter using Dean Edwards' http://dean.edwards.name/ star-light for highlighting of code snippets. Usage: embedd code between &lt;pre&gt; &lt;/pre&gt; tags. apply code language as css class: php, css, js etc.
Version: 1.0
Author: Roland Rust
Author URI: http://wordpress.designpraxis.at
*/
add_filter('wp_head', 'dprx_include_star_light', '14');

function dprx_include_star_light() {
	?>
	<link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/plugins/snippet-highlight/star-light/star-light.css" type="text/css"/>
	<link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/plugins/snippet-highlight/linenumbers.css" type="text/css"/>
	<?php
	
}
?>
