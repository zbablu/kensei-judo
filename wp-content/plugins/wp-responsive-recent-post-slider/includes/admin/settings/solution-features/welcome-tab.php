<?php
/**
 * Admin Class
 *
 * Handles the Admin side functionality of plugin
 *
 * @package WP Logo Showcase Responsive Slider and Carousel
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
} ?>

<div id="wppsac_welcome_tabs" class="wppsac-vtab-cnt wppsac_welcome_tabs wppsac-clearfix">
	
	<div class="wppsac-deal-offer-wrap">
		<h3 style="font-weight: bold; font-size: 30px; color:#ffef00; text-align:center; margin: 15px 0 5px 0;">Why Invest Time On Free Version?</h3>

		<h3 style="font-size: 18px; text-align:center; margin:0; color:#fff;">Explore WP Blog and Widgets Pro with Essential Bundle Free for 5 Days.</h3>			

		<div class="wppsac-deal-free-offer">
			<a href="<?php echo esc_url( WPRPS_PLUGIN_BUNDLE_LINK ); ?>" target="_blank" class="wppsac-sf-free-btn"><span class="dashicons dashicons-cart"></span> Try Pro For 5 Days Free</a>
		</div>
	</div>

	<!-- Start - Welcome Box -->
	<div class="wppsac-sf-welcome-wrap" style="padding: 30px;border-radius: 10px;border: 1px solid #e5ecf6;">
		<div class="wppsac-sf-welcome-inr wppsac-sf-center">
			<h5 class="wppsac-sf-content" style="font-size: 22px; margin: 20px 0;">Experience <span class="wppsac-sf-blue">4 Layouts</span>, <span class="wppsac-sf-blue">50+ stunning designs</span> with which show your recent blogs/posts in a slider/carousel form with excerpts and unique slider & carousel designs.</h5>
			<h5 class="wppsac-sf-content" style="font-size: 20px; margin: 20px 0;"><span class="wppsac-sf-blue">30,000+ </span>websites are using <span class="wppsac-sf-blue">Post Slider/Carousel</span>.</h5>
		</div>
		<div style="margin: 30px 0; text-transform: uppercase; text-align:center;">
			<a href="<?php echo esc_url( $wppsac_add_link ); ?>" class="wppsac-sf-btn">Launch Post Slider With Free Features</a>
		</div>
	</div>
	<!-- End - Welcome Box -->
</div>