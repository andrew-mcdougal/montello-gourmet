<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MFXZ5HC');</script>
<!-- End Google Tag Manager -->
	
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-29126133-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-29126133-1', { 'optimize_id': 'GTM-PB4867L'});
</script>



<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MFXZ5HC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<div class="shop-news-box">
		<p>
			<span class="highlight">We're open!</span> Online Caviar shop. 
			<a class="caviar-shop-button-small" href="<?php echo get_home_url(); ?>/shop" onclick="_gaq.push(['_trackEvent', 'Header', 'Clicked', 'Buy Caviar slidedown button', 1]);">Buy Caviar</a>
		</p>
	</div>
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">
		<div class="col-full">

			<?php
			/**
			 * Functions hooked into storefront_header action
			 *
			 * @hooked storefront_skip_links                       - 0
			 * @hooked storefront_social_icons                     - 10
			 * @hooked storefront_site_branding                    - 20
			 * @hooked storefront_secondary_navigation             - 30
			 * @hooked storefront_product_search                   - 40
			 * @hooked storefront_primary_navigation_wrapper       - 42
			 * @hooked storefront_primary_navigation               - 50
			 * @hooked storefront_header_cart                      - 60
			 * @hooked storefront_primary_navigation_wrapper_close - 68
			 */
			do_action( 'storefront_header' ); ?>

		</div>

		<!-- search bar and contact links -->
		<div class="col-full searchbar grid-columns-three">
			<?php get_search_form(); ?>
			<div>
				<p>
					Mobile: <a href="tel:61416218147" target="blank">+61 416 218 147</a><br>
					Email: <a href="mailto:tony@montellogourmet.com?subject=Enquiry from website">tony@montellogourmet.com</a>
				</p>
			</div>
		</div>

	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 */
	do_action( 'storefront_before_content' ); ?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		/**
		 * Functions hooked in to storefront_content_top
		 *
		 * @hooked woocommerce_breadcrumb - 10
		 */
		do_action( 'storefront_content_top' );
