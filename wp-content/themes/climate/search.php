<?php
/**
* The template for displaying search results pages
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
*
* @package WP_Bootstrap_Starter
*/

get_header(); ?>
<div class="container-fluid cm_page_content">
	<div class="container">
		<div class="row">


			<section id="primary" class="content-area col-sm-12 col-lg-12">
				<div id="main" class="site-main" role="main">

					<?php
					if ( have_posts() ) : ?>

						<header class="pagehead">
							<h1><?php pll_e( 'Search Results for: ', 'climate' );
							echo '<span>' . get_search_query() . '</span>' ; ?></h1>
						</header><!-- .page-header -->

						<div class="row">
							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post(); 

					/**
					* Run the loop for the search to output the results.
					* If you want to overload this in a child theme then include a file
					* called content-search.php and that will be used instead.
					*/  ?>
					<div class="col-sm-12 col-md-12 col-lg-12">
						<?php get_template_part( 'template-parts/content', 'search' ); ?>
					</div>

				<?php  endwhile;  ?>

			</div>

			<div class="col-sm-12 col-md-12">
				<div class="pagination_wrap">
					<div class="pagination">
						<?php the_posts_pagination( array( 'mid_size'  => 2 ) ); ?>
					</div>
				</div>
			</div>

			<?php //the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

	</div><!-- #main -->
</section><!-- #primary -->

</div><!-- .row -->
</div><!-- .container -->
</div><!-- .container full -->
<?php
get_sidebar();
get_footer();
