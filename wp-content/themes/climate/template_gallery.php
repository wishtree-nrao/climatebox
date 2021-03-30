<?php /* Template Name: Gallery Page */ ?>


<?php get_header(); ?>


<!-- Climate Box Toolkit Textbook Page -->
<div class="container-fluid cm_page_content"> <!-- blue_shape_bg_center -->
	<div class="container">
		<div class="row">

			<div class="col-sm-12 col-md-12">
				<div class="post_content">

					<?php /*<h1><?php echo get_the_title(); ?></h1>*/ ?>

					<div class="row">
						<div class="col-sm-12 col-md-8 col-lg-9">
							<?php /*<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/search.svg" /> */ ?>
							<ul class="nav nav-tabs" id="ExploreTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link " id="ExploreTabNews-tab" href="<?php echo home_url('/explore/'); ?>">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/news_icon.svg" />
										<span><?php pll_e('News'); ?></span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="ExploreTabStories-tab" href="<?php echo home_url('/explore/stories/'); ?>" >
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/stories_icon.svg" />
										<span><?php pll_e('Stories'); ?></span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link active" id="ExploreTabGallery-tab" href="<?php echo home_url('/explore/gallery/'); ?>">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/gallery_icon.svg" />
										<span><?php pll_e('Gallery'); ?></span>
									</a>
								</li>
							</ul>

							<div class="tab-content" id="ExploreTabContent">
								<div class="tab-pane fade" id="ExploreTabNews" role="tabpanel" aria-labelledby="ExploreTabNews-tab">
									
								</div><!-- News -->

								<div class="tab-pane fade" id="ExploreTabStories" role="tabpanel" aria-labelledby="ExploreTabStories-tab">
									
									
								</div><!-- Stories -->

								<div class="tab-pane fade show active" id="ExploreTabGallery" role="tabpanel" aria-labelledby="ExploreTabGallery-tab">
									
									<?php

									$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1; 

									$args = array(
									    'post_type'=>'rl_gallery', 
										'posts_per_page' => 10,
										'paged' => $paged,
										'order'      => 'ASC',
										'orderby'    => 'meta_value_num',
									);

									$loop = new WP_Query( $args );

									if ( $loop->have_posts() ) {
										?>
										<div class="row">
											<?php

											
											while ( $loop->have_posts() ) : $loop->the_post(); 
												?>
												<div class="col-sm-6 col-md-6 col-lg-4">
												
													<div class="post_litem pi_gallery w4post">
														<a rel="bookmark" href="<?php echo get_permalink(); ?>">
															
															<?php  if ( has_post_thumbnail($post->ID)) {
																	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
																	<div class="post_thumb">
																		<?php // the_post_thumbnail('full'); ?>
																		<div class="post_image" 
																		style="background-image: url(<?php echo $image[0]; ?>);"></div>
																	</div>
																<?php } ?>
																<p class="title"><?php echo get_the_title();  ?></p>
																<button class="btn btn_link"><?php pll_e('View'); ?></button>
															</a>
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
												<?php pll_e('There are no gallery'); ?>
											</div>
										<?php
									}
									wp_reset_postdata();

									?>

								</div><!-- Gallery -->
							</div>

						</div>




						<div class="col-sm-12 col-md-4 col-lg-3">

							<div class="sidebar">
								<h2 class="title"><?php pll_e('Archives'); ?></h2>

								<div id="AccordionExplore" class="accordion">
									<div class="card">
										<div class="card-header" id="headingOne">
											<button class="btn btn-link" data-toggle="collapse" data-target="#collapseNews" aria-expanded="true" aria-controls="collapseNews">
												<?php pll_e('News'); ?> <?php pll_e('Archives'); ?>
											</button>
										</div>

										<div id="collapseNews" class="collapse show" aria-labelledby="headingOne" data-parent="#AccordionExplore">
											<div class="card-body">
												<?php 

												$args = array(
													'post_type'    => 'post',
													'type'         => 'monthly',
													'echo'         => 0
												);
												echo '<ul class="archives">'.wp_get_archives($args).'</ul>';

												?>
											</div>
										</div>
									</div>

									<div class="card">
										<div class="card-header" id="headingTwo">
											<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseStory" aria-expanded="false" aria-controls="collapseStory">
												<?php pll_e('Stories'); ?> <?php pll_e('Archives'); ?>
											</button>
										</div>
										<div id="collapseStory" class="collapse" aria-labelledby="headingTwo" data-parent="#AccordionExplore">
											<div class="card-body">
												<?php 

												$args = array(
													'post_type'    => 'stories',
													'type'         => 'monthly',
													'echo'         => 0
												);
												echo '<ul class="archives">'.wp_get_archives($args).'</ul>';

												?>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div><!-- Sidebar Column -->


					</div>

				</div>

			</div>

		</div>
	</div>
</div>


<?php get_footer(); ?>