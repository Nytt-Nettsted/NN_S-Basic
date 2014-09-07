<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package _s
 */
if ( ! is_active_sidebar( 'footer' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area footer-1" role="complementary">
	<?php dynamic_sidebar( 'footer' ); ?>
</div><!-- #secondary -->