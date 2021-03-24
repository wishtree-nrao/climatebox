<?php /* Template Name: Discussion Material Page */ ?>


<?php get_header(); ?>


<!-- Climate Box Toolkit Textbook Page -->
<div class="container-fluid cm_page_content"> <!-- blue_shape_bg_center -->
	<div class="container">
		<div class="row">

			<div class="col-sm-12 col-md-12">
				<div class="post_content">

					<?php /*<h1><?php echo get_the_title(); ?></h1>*/ ?>

					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<?php /*<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/search.svg" /> */ ?>
							<ul class="nav nav-tabs" id="ExploreTab" role="tablist">
								<li class="nav-item">
									<?php // Get URL for Current Lang
									$LM_Page = pll_get_post( 66 );
									$LM_Page_url = get_the_permalink($LM_Page);
									?>
									<a class="nav-link" id="TeacherTabLM-tab" href="<?php echo $LM_Page_url; ?>">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/lm_icon.svg" />
										<span><?php pll_e('Learning Materials'); ?></span>
									</a>
								</li>
								<li class="nav-item">
									<?php // Get URL for Current Lang
									$VLW_Page = pll_get_post( 1269 );
									$VLW_Page_url = get_the_permalink($VLW_Page);
									?>
									<a class="nav-link" id="TeacherTabVW-tab" href="<?php echo $VLW_Page_url; ?>">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/video_icon.svg" />
										<span><?php pll_e('Video Lessons and Webinars'); ?></span>
									</a>
								</li>
								<li class="nav-item">
									<?php // Get URL for Current Lang
									$DM_Page = pll_get_post( 1276 );
									$DM_Page_url = get_the_permalink($DM_Page);
									?>
									<a class="nav-link active" id="TeacherTabD-tab" href="<?php echo $DM_Page_url; ?>">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/discuss_icon.svg" />
										<span><?php pll_e('Discussion Material'); ?></span>
									</a>
								</li>
							</ul>

							<div class="tab-content" id="ExploreTabContent">
								<div class="tab-pane fade" id="TeacherTabLM" role="tabpanel" aria-labelledby="TeacherTabLM-tab">
									
								</div><!-- Learning Materials -->

								<div class="tab-pane fade" id="TeacherTabVW" role="tabpanel" aria-labelledby="TeacherTabVW-tab">
									
								</div><!-- Video Lessons and Webinars -->


								<div class="tab-pane fade show active" id="TeacherTabD" role="tabpanel" aria-labelledby="TeacherTabD-tab">


									<?php

									$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1; 

									$args = array(
									    'post_type'=>'discussion_material', 
										'posts_per_page' => 4,
										'paged' => $paged,
										'order'      => 'ASC',
										'orderby'    => 'meta_value_num',
									);

									if(isset($_GET['search']) && $_GET['search'] != ""){
										$search = $_GET['search'];

										$args['climate_search_title'] = $search;
										
									}
									?>
									<form class="search_small" method="get" action="<?php echo home_url('/guidelines-for-teachers/discussion-material/'); ?>">
										<input type="text" name="search" placeholder="<?php pll_e('Search content here...'); ?>" value="<?php echo $search; ?>">
										
										<input type="submit" value="search">
									</form>
									<?php

									add_filter( 'posts_where', 'climate_title_filter', 10, 2 );
									 
									$loop = new WP_Query( $args );
									remove_filter( 'posts_where', 'climate_title_filter', 10, 2 );
									if ( $loop->have_posts() ) {
										?>
										<div class="row">
											<?php

											
											while ( $loop->have_posts() ) : $loop->the_post(); 
												?>
												<div class="col-sm-12 col-md-12 col-lg-12">
													<div class="post_litem lrn_mat w4post">
														
														<div class="row">
															<div class="col-sm-5 col-md-4 col-lg-3">
																<div class="post_thumb">
																	<a rel="bookmark" href="<?php echo get_permalink(); ?>">
																		<?php  if ( has_post_thumbnail($post->ID)) {
																	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
																	
																		<?php // the_post_thumbnail('full'); ?>
																		<div class="post_image" 
																		style="background-image: url(<?php echo $image[0]; ?>);"></div>
																
																<?php } ?>
																	</a>
																</div>
															</div>
															<div class="col-sm-7 col-md-8 col-lg-9">
																<a rel="bookmark" href="<?php echo get_permalink(); ?>">
																	<p class="title"><?php echo get_the_title();  ?></p>
																	<div class="post_content">
																		<?php $title = get_the_content(); 
																		$short_title = wp_trim_words( $title, 50, '...' );
																		echo '<div class="post-excerpt">'.$short_title.'</div>'; ?>
																	</div>
																</a>
																<span class="entry-date"><?php echo get_the_date(); ?></span>
																<a rel="bookmark" href="<?php echo get_permalink(); ?>" class="btn btn_link"><?php pll_e('Read More'); ?></a>
															</div>
														</div>
														
													</div>
												</div>
												
												<?php

											endwhile

											?>
										</div>
										<div class="col-sm-12 col-md-12">
											<div class="pagination_wrap">
												<div class="pagination">
													<?php $total_pages = $loop->max_num_pages;

													if ($total_pages > 1){

														$current_page = max(1, get_query_var('paged'));
														 $big = 999999;
														
														echo paginate_links(array(
															'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	    													'format'  => '?paged=%#%',
															'current' => $current_page,
															'total' => $total_pages,
															'prev_text'    => __('« prev'),
															'next_text'    => __('next »'),
														));
												}?>

											</div>
										</div>
									</div>
										<?php

									}else{
										?>
										<div class="alert alert-warning" role="alert">
												<?php pll_e('There are no Discussion Material'); ?>
											</div>
										<?php
									}
									wp_reset_postdata();

									?>									

									<?php //echo do_shortcode("[postlist id=673]");?>

								</div><!-- Discussion Material -->

							</div>

						</div>
					</div>

				</div>

			</div>

		</div>
	</div>
</div>


<?php  $user = wp_get_current_user();
if ( in_array( 'um_teacher', (array) $user->roles ) ) { ?>

	<!-- Content -->

<?php } ?>

<?php get_footer(); ?>