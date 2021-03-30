<?php /* Template Name: Teacher Discussion Topics */ ?>


<?php get_header(); ?>


<div class="container-fluid cm_page_content">
	<div class="container">
		<div class="row"> 

			<div class="col-sm-12 col-md-12">

				<?php $user = wp_get_current_user();
					if ( in_array( 'um_teacher', (array) $user->roles ) || in_array( 'um_moderator', (array) $user->roles ) || in_array( 'administrator', (array) $user->roles ) ) { ?>
						
					<div class="post_content">

						<div class="pagehead">
							
							<div class="row">
									<div class="col-sm-12 col-md-12 col-lg-9">
										<h1><?php echo get_the_title(); ?></h1>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-3">
										<?php $user = wp_get_current_user();
										if ( in_array( 'um_teacher', (array) $user->roles ) ) { ?>
											
											<?php if ( 'publish' === get_post_status() ) { ?>
												<div class="head_action">
													<a class="btn btnBlue" href="<?php echo get_site_url(); ?>/submit-question/"><?php pll_e('Submit Question'); ?></a>
												</div>
											<?php } ?>

										<?php } else if ( in_array( 'um_moderator', (array) $user->roles ) || in_array( 'administrator', (array) $user->roles ) ) {
											?>
												<div class="head_action">
													<a class="btn btnBlue" href="<?php echo get_site_url(); ?>/teachers-discussion/submitted-questions/"><?php pll_e('Submitted Questions'); ?></a>
												</div>
											<?php
										} ?>
									</div>
								</div>
						</div>

						<div class="row">
							<?php
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

							$args = array(
								'post_type'=>'discussion_topic', 
								'posts_per_page' => 5,
								'paged' => $paged,
								'order'      => 'DESC',
								'orderby'    => 'meta_value_num',
							);

							$loop = new WP_Query( $args );
							if ( $loop->have_posts() ) {
								while ( $loop->have_posts() ) : $loop->the_post(); ?>

									<div class="col-sm-12 col-md-12 col-lg-12">
										<div class="post_litem dictop_item">

											<a rel="bookmark" href="<?php echo get_permalink(); ?>">
												<div class="row">
													<div class="col-sm-4 col-md-4 col-lg-3">
														<?php  if ( has_post_thumbnail($post->ID)) {
															$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
															<div class="post_thumb">
																<?php // the_post_thumbnail('full'); ?>
																<div class="post_image" 
																style="background-image: url(<?php echo $image[0]; ?>);"></div>
															</div>
														<?php } ?>
													</div>

													<div class="col-sm-8 col-md-8 col-lg-9">
														<?php the_title( '<p class="title">', '</p>' ); ?>
														<div class="post_content">
															<?php $title = get_the_content(); 
															$short_title = wp_trim_words( $title, 55, '...' );
															echo '<p>'.$short_title.'</p>'; ?>
														</div>

														<span class="entry-date"><?php echo get_the_date(); ?></span>

														<button class="btn btn_link"><?php pll_e('View Topic'); ?></button>
													</div>
												</div>

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
											}    
										}
										wp_reset_postdata();
										?>

									</div>
								</div>
							</div>
						</div>
					</div>

				<?php } else { ?>

					<div class="alert alert-danger" role="alert">
						<?php pll_e('Sorry, but you do not have permission to view this content.'); ?>
					</div>

				<?php } ?>
			</div>


		</div>
	</div>
</div>


<?php get_footer(); ?>