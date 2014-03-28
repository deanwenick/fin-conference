<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>

	<aside>
<?php
	// A sidebar for widgets
	if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>

			<ul>
				<?php dynamic_sidebar( 'primary-widget-area' ); ?>
			</ul>

<?php endif; ?>

<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

			<ul>
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>

<?php endif; ?>
	
	</aside>