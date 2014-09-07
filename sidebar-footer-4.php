<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package _s
 */
if ( ! is_active_sidebar( 'footer-4' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area footer-4" role="complementary">
	<?php dynamic_sidebar( 'footer-4' ); ?>
</div><!-- #secondary -->