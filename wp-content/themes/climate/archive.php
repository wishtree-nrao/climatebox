<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
<div class="container cm_page_archive">
	<div class="row">

		<div class="col-sm-12 col-md-12">
			<div class="post_content">

				<?php
				if ( have_posts() ) : ?>

					<div class="pagehead">
						<?php
						the_archive_title( '<h1>', '</h1>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
						?>
					</div>


					<div class="row">
						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */  ?>
				 <div class="col-sm-6 col-md-4 col-lg-3">

				 	<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

				 </div>

				 <?php 
				endwhile; ?>

			</div> 

			<div class="col-sm-12 col-md-12">
				<div class="pagination_wrap">
					<div class="pagination">
						<?php the_posts_pagination( array( 'mid_size'  => 2 ) ); ?>
					</div>
				</div>
			</div>

			<?php // the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

	</div><!-- #main -->
</div><!-- #primary -->

</div><!-- .row -->
</div><!-- .container -->

<?php
get_sidebar();
get_footer();
