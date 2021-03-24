<?php /* Template Name: Ultimate Member Page */


get_header(); ?>



<div class="container um_page">
	<div class="row">

		<section id="primary" class="content-area col-sm-12 col-lg-12">
			<div id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post(); ?>

					<div class="pagehead">
						<?php the_title( '<h1>', '</h1>' ); ?>
					</div>

					<?php get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</div><!-- #main -->
	</section><!-- #primary -->
	
</div><!-- .row -->
</div><!-- .container -->


<?php
get_sidebar();
get_footer();
