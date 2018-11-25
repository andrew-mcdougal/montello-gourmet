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
		</div><!-- .entry-content -->
	</div>
</div><!-- #post-## -->