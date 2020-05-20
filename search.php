<?php
/**
 * The template for displaying search results pages.
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area search-results">
		<main id="main" class="site-main" role="main">

		<?php if (have_posts()) : ?>
			<header class="page-header">
				<h3 class="page-title"><?php printf( esc_attr__( 'Search Results for: %s', 'storefront' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
			</header><!-- .page-header -->
		<?php endif; ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<article role="article">

				<header class="entry-header article-header">
					<h4 class="search-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
				</header>

				<section class="entry-content">
					<?php the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'bonestheme' ) . '</span>' ); ?>
					<hr />
				</section>

			</article>


		<?php endwhile; ?>

			<?php else : ?>

					<article id="post-not-found" class="hentry cf">
						<header class="article-header">
							<h1><?php _e( 'Sorry, No Results.', 'bonestheme' ); ?></h1>
						</header>
						<section class="entry-content">
							<p><?php _e( 'Try your search again.', 'bonestheme' ); ?></p>
						</section>
						<footer class="article-footer">
								<p><?php _e( 'This is the error message in the search.php template.', 'bonestheme' ); ?></p>
						</footer>
					</article>

			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer();
