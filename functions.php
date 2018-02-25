<?php
//* Code goes here

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}


// custom homepage hook
function storefront_homepage_content() {
	while ( have_posts() ) {
		the_post();

		get_template_part( 'content', 'homepage' );

		?>



			<div class="entry-content">

<p>Delivery Notes: For <strong>FREE delivery</strong> in Melbourne metro area a minimum order quantity of <strong>50 grams</strong> is required (caviar &amp; truffles).<br /></p>
<p>Chilled Aus Post shipping to Country Victoria or interstate to be quoted.</p>


			
			
				<!-- Testimonials -->
				<h3 class="feedback">Customer feedback</h3>
				<?php if( have_rows('testimonials') ): ?>
				<ul class="slides testimonials">
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
				<!-- Testimonials -->


<?php $the_query = new WP_Query( 'page_id=26' ); ?>

<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

                       <?php the_content(); ?>

<div class="products-container"><!-- start of .products-container -->
                        <?php 
					// check for rows (parent repeater)
					if( have_rows('products') ): ?>
						
						<?php 
	
						// loop through rows (parent repeater)
						while( have_rows('products') ): the_row(); ?>
							<div class="products-box">
								<h3><?php the_sub_field('title'); ?></h3>
								<?php 
	
								// check for rows (sub repeater)
								if( have_rows('product_price') ): ?>
									<?php 
	
									// loop through rows (sub repeater)
									while( have_rows('product_price') ): the_row();
										?>
										<?php 
										echo '<div class="product-price"><p class="product">'; the_sub_field('product'); echo '</p>';
										echo '<p class="price">'; the_sub_field('price'); echo '</p></div>';
										?>
									<?php endwhile; ?>
								<?php endif; //if( get_sub_field('product_price') ): ?>
							</div>	
						<?php endwhile; // while( has_sub_field('product_type') ): ?>
					<?php endif; // if( get_field('product_type') ): ?>
                    </div><!-- end of .products-container -->

     <?php endwhile;?>

			</div>


		<?php

	} // end of the loop.
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