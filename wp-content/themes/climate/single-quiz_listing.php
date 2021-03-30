<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
<!-- Climate Box Toolkit Page -->
<div class="container-fluid quiz_view">
	<div class="container">
		<div class="row">

			<section id="primary" class="content-area col-sm-12 col-md-12">
				<div id="main" class="site-main" role="main">

					<?php
					while ( have_posts() ) : the_post(); ?>

						<header class="entry-header quiz_heading full-width-container">
							<div class="container">
								<div class="quiz_heading_wrap">
									<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
								</div>
							</div> 
						</header><!-- .entry-header -->

						<div class="entry-content">
							<?php
							the_content();

							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
								'after'  => '</div>',
							) );
							?>
						</div><!-- .entry-content -->

						<?php // the_post_navigation();

						if ( comments_open() || get_comments_number() ) :
							comments_template();
					endif;

				endwhile; 
				?>

				<div class="related_post">

					<div class="head_style_2">
						<img alt="Earth Mascot" src="<?php echo get_stylesheet_directory_uri(); ?>/img/shapes/earth_mascot_2.svg" />
						<h2><?php pll_e('More Quizzes'); ?></h2>
					</div>

					<div class="row">
						<?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

						$args = array(
							'post_type'=>'quiz_listing', 
							'posts_per_page' => 4,
							'paged' => $paged,
							'order'      => 'ASC',
							'orderby'    => 'rand',
							'post_parent' => 0,
							'post__not_in' => array ($post->ID),
						);

						$loop = new WP_Query( $args );
						if ( $loop->have_posts() ) {
							$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

							while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<div class="col-sm-6 col-md-4 col-lg-3 rand_clr">
									<div class="post_litem quiz_item">

										<a rel="bookmark" href="<?php echo get_permalink(); ?>">
											<?php  if ( has_post_thumbnail()) {
												$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); ?>

												<div class="post_thumb">
													<?php the_post_thumbnail('full'); ?>
												</div>

											<?php } ?>

											<?php the_title( '<p class="title">', '</p>' ); ?>
										</a>
									</div>
								</div>

								<?php
							endwhile;  
						}
						wp_reset_postdata();
						?>

					</div>
				</div>

			</div> 
		</section> 

	</div> 
</div><!-- .container -->
</div><!-- .container fluid -->
<?php
get_sidebar();
get_footer();

?>

<script type="text/javascript">
	
	
	// jQuery Ready
	jQuery(document).ready(function($){

		//jQuery(".ays-fs-title").clone().appendTo("#QuizTitle");
		//jQuery(".ays-fs-title").clone().appendTo(jQuery("#QuizTitle"));

		jQuery('.ays_next.start_button.action-button').attr('style', 'color: #fff !important;');

	}); // END jQuery Ready
	

</script>









