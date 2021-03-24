<?php /* Template Name: Quiz Page */ ?>


<?php get_header(); ?>


<!-- Climate Box Toolkit Textbook Page -->
<div class="container-fluid cm_page_content">
	<div class="container">
		<div class="row">

			<div class="col-sm-12 col-md-12">
				<div class="post_content">

					<div class="pagehead">
						<h1><?php echo get_the_title(); ?></h1>
					</div>

					<div class="short_content">
						<?php if( get_field('quiz_description') ): ?>
							<p><?php the_field('quiz_description'); ?></p>
						<?php endif; ?>
					</div>

					<div class="row">
						<?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

						$args = array(
							'post_type'=>'quiz_listing', 
							'posts_per_page' => 4,
							'paged' => $paged,
							'order'      => 'DESC',
							'orderby'    => 'meta_value_num',
							'post_parent' => 0,
						);

						$loop = new WP_Query( $args );
						if ( $loop->have_posts() ) {
							$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

							while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<div class="col-sm-6 col-md-4 col-lg-3 rand_clr">
									<div class="post_litem quiz_item">

										<a rel="bookmark" href="<?php echo get_permalink(); ?>">
											<?php  if ( has_post_thumbnail($post->ID)) {
												$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
												<div class="post_thumb">
													<?php // the_post_thumbnail('full'); ?>
													<div class="post_image" 
													style="background-image: url(<?php echo $image[0]; ?>);"></div>
												</div>
											<?php } ?>

											<?php the_title( '<p class="title">', '</p>' ); ?>
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
										} ?>    

									</div>
								</div>
							</div>

						<?php } else { ?>
							<div class="col-sm-12 col-md-12">
								<div class="alert alert-warning" role="alert">
									<?php pll_e('There are no data'); ?>
								</div>
							</div>
							<?php
						}
						wp_reset_postdata();
						?>
					</div>

				</div>

			</div>

		</div>
	</div>
</div>


<?php get_footer(); ?>