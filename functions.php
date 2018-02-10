<?php
//* Code goes here

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}



// Custom header html using this tutorial: https://wpthememakeover.com/2016/02/15/how-to-change-footer-text-in-the-storefront-theme-for-woocommerce/
function storefront_site_branding() { ?>
<div class="site-branding">
	<div class="beta site-title">
		<a href="<?php echo home_url(); ?>" rel="nofollow">Montello Gourmet</a>
	</div>
	<div class="site-description">
		<p>Specialty food ingredients.</p>
		<p>Melbourne based supply, Australia wide delivery.</p>
	</div>
</div>
<?php
}