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
  <?php do_action( 'storefront_before_header' ); ?>

  <header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">
    <div class="col-full o-grid-layout o-grid-layout--columns-two">
      <div class="site-branding">
        <div class="beta site-title">
          <a href="<?php echo home_url(); ?>" rel="nofollow">Montello Gourmet</a>
        </div>
        <div class="site-description">
          <p>Online Caviar store</p>
          <p>Melbourne based supply, Australia wide delivery.</p>
        </div>
      </div>

      <div class="header-right">
        <p>
        Mobile: <a href="tel:61416218147" target="blank">+61 416 218 147</a><br>
        Email: <a href="mailto:tony@montellogourmet.com?subject=Enquiry from website">tony@montellogourmet.com</a>
      </p>
        <?php //get_search_form(); ?>
      </div>
    </div>

    <?php wp_nav_menu( 
            array( 
              'theme_location' => 'primary',
            ) 
          ); ?>

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
