<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
<div class="container cm_page_content">
	<div class="row">

		<section id="primary" class="content-area col-sm-12 col-md-12 col-lg-12">
			<div id="main" class="site-main" role="main">

				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>

						<?php
					endif;  ?>

						<div class="row">
							<?php
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

							$args = array(
								'post_type'=>'post', 
								'posts_per_page' => 8,
								'paged' => $paged,
								'order'      => 'DESC',
								'orderby'    => 'meta_value_num',
							);

							$loop = new WP_Query( $args );
							if ( $loop->have_posts() ) {
								while ( $loop->have_posts() ) : $loop->the_post(); ?>

									<div class="col-sm-6 col-md-4 col-lg-3">
										<div class="post_litem mnp_item">

											<a rel="bookmark" href="<?php echo get_permalink(); ?>">
												<?php  if ( has_post_thumbnail()) {
													$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); ?>

													<div class="post_thumb">
														<?php the_post_thumbnail('full'); ?>
													</div>

												<?php } ?>

												<?php the_title( '<p class="title">', '</p>' ); ?>

												<button class="btn btn_link">View</button>
											</a>
										</div>
									</div>


									<?php
								endwhile; ?>

								<div class="col-sm-12 col-md-12">
									<div class="pagination_wrap">
										<div class="pagination">
											<?php $total_pages = $loop->max_num_pages;

											if ($total_pages > 1){

												$current_page = max(1, get_query_var('paged'));

												echo paginate_links(array(
													'base' => get_pagenum_link(1) . '%_%',
													'format' => '/page/%#%',
													'current' => $current_page,
													'total' => $total_pages,
													'prev_text'    => __('« prev'),
													'next_text'    => __('next »'),
												));
											}    ?>

										</div>
									</div>
								</div>

							<?php }
							wp_reset_postdata();
							?>

						</div>

				<?php  // get_template_part( 'template-parts/content', get_post_format() );

			// the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

	</div><!-- #main -->
</section><!-- #primary -->

</div><!-- .row -->
</div><!-- .container -->
<?php
get_sidebar();
get_footer();
