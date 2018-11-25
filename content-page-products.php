<?php
/**
 * The template used for displaying page content in page-products.php
 *
 * @package storefront
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="col-full">
		<header class="entry-header">
			<?php
			the_title( '<h1 class="entry-title">', '</h1>' );
			?>
		</header><!-- .entry-header -->
		<div class="entry-content">
			
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
		</div><!-- .entry-content -->
	</div>
</div><!-- #post-## -->