<?php /* Template Name: Climate Box Toolkit */ ?>


<?php get_header(); ?>


<!-- Climate Box Toolkit Page -->
<div class="container-fluid cm_page_content">
	<div class="container">
		<div class="row">

			<div class="col-sm-4 col-md-3">

				<?php get_template_part( 'toolkit-sidebar' ); ?>

			</div>

			<div class="col-sm-8 col-md-9">

				<div class="post_content">
					<?php while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'page' );

						if ( comments_open() || get_comments_number() ) :
							comments_template();

					endif;  endwhile;  
					?>
				</div>

			</div>

			

		</div>
	</div>
</div>


<?php get_footer(); ?>