<?php
/**
 * Admin View: Notice - Theme Support
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<div id="message" class="updated woocommerce-message wc-connect">
	<p><?php echo sprintf( __( '<strong>Your theme does not declare WooCommerce support</strong> &#8211; Please read our integration guide or check out our %sStorefront%s theme which is totally free to download and designed specifically for use with WooCommerce :)', 'woocommerce' ), '<a href="' . esc_url( admin_url( 'theme-install.php?theme=highwind">' ) ) . '', '</a>' ); ?></p>
	<p class="submit">
		<a href="http://woothemes.com/storefront" class="button-primary" target="_blank"><?php _e( 'Find out more about Storefront', 'woocommerce' ); ?></a>
		<a href="<?php echo esc_url( apply_filters( 'woocommerce_docs_url', 'http://docs.woothemes.com/document/third-party-custom-theme-compatibility/', 'theme-compatibility' ) ); ?>" class="button"><?php _e( 'Theme integration guide', 'woocommerce' ); ?></a>
		<a class="skip button" href="<?php echo esc_url( add_query_arg( 'hide_theme_support_notice', 'true' ) ); ?>"><?php _e( 'Hide this notice', 'woocommerce' ); ?></a></p>
</div>