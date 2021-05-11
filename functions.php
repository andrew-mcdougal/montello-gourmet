<?php
//* Code goes here

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}


// custom homepage hook
function storefront_homepage_content() {

	// remove homepage hooked shop things
	remove_action( 'homepage', 'storefront_recent_products', 30 );
	remove_action( 'homepage', 'storefront_popular_products', 50 );
	remove_action( 'homepage', 'storefront_best_selling_products', 70 );

	while ( have_posts() ) {
		the_post(); ?>

<?php get_template_part( 'content', 'homepage' ); ?>

<!-- testimonials -->
<div class="entry-content testimonials">
	<h3 class="feedback">Customer feedback...</h3>
	<?php if( have_rows('testimonials') ): ?>
	<ul class="testimonial-slides">
	<?php while( have_rows('testimonials') ): the_row(); 
		// vars
		$words = get_sub_field('words');
		$name = get_sub_field('name');
		?>
		<li class="slide">
			<h4><?php echo $words; ?></h4>
			<p><?php echo $name; ?></p>
		</li>
	<?php endwhile; ?>
	</ul>
	<?php endif; ?>
</div>
<!-- testimonials -->

<div class="entry-content">
	 <div class="delivery-notes">
		<p>Delivery Notes: For <strong>FREE delivery</strong> in Melbourne metro area a minimum order quantity of <strong>50 grams</strong> is required (caviar &amp; truffles).<br /></p>
		<p>Chilled Aus Post shipping to Country Victoria or interstate to be quoted.</p>
	</div>
</div>



<?php
	} // end of the loop.
}

// remove widget on page content
function storefront_sidebar() {
	?>
	<div class="site-info">
		<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
		<p>site by <a href="http://ontrendwebsites.com" title="onTrend websites - Mobile friendly WordPress design and development" target="_blank">onTrend websites</a></p>
	</div>
	<?php
}

// custom footer hooked into storefront
function storefront_credit() {

	?>
	<div class="site-info">
		<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
		<p>site by <a href="http://ontrendwebsites.com" title="onTrend websites - Mobile friendly WordPress design and development" target="_blank">onTrend websites</a></p>
	</div>
	<?php
}

// ADD SHORTCODE TO TOP OF SINGLE PRODUCT 

/*
 * add_action( 'woocommerce_before_single_product', 'enfold_customization_extra_product_content', 15 );
function enfold_customization_extra_product_content() {
    echo wc_yotpo_show_widget();
}
*/




// Custom header html using this tutorial: https://wpthememakeover.com/2016/02/15/how-to-change-footer-text-in-the-storefront-theme-for-woocommerce/
function storefront_site_branding() { ?>

<?php
}

