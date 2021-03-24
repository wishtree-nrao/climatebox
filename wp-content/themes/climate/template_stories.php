<?php /* Template Name: Stories Page */ ?>


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
									<?php // Get URL for Current Lang
									$News = pll_get_post( 64 );
									$News_url = get_the_permalink($News);
									?>
									<a class="nav-link " id="ExploreTabNews-tab" href="<?php echo $News_url; ?>">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/news_icon.svg" />
										<span><?php pll_e('News'); ?></span>
									</a>
								</li>
								<li class="nav-item">
									<?php // Get URL for Current Lang
									$Stories = pll_get_post( 1230 );
									$Stories_url = get_the_permalink($Stories);
									?>
									<a class="nav-link active" id="ExploreTabStories-tab" href="<?php echo $Stories_url; ?>">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/stories_icon.svg" />
										<span><?php pll_e('Stories'); ?></span>
									</a>
								</li>
								<li class="nav-item">
									<?php // Get URL for Current Lang
									$Gallery = pll_get_post( 1249 );
									$Gallery_url = get_the_permalink($Gallery);
									?>
									<a class="nav-link" id="ExploreTabGallery-tab" href="<?php echo $Gallery_url; ?>">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/gallery_icon.svg" />
										<span><?php pll_e('Gallery'); ?></span>
									</a>
								</li>
							</ul>

							<div class="tab-content" id="ExploreTabContent">
								<div class="tab-pane fade" id="ExploreTabNews" role="tabpanel" aria-labelledby="ExploreTabNews-tab">
									
									

								</div><!-- News -->

								<div class="tab-pane fade  show active" id="ExploreTabStories" role="tabpanel" aria-labelledby="ExploreTabStories-tab">
									

									<?php

									$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1; 

									$args = array(
									    'post_type'=>'stories', 
										'posts_per_page' => 5,
										'paged' => $paged,
										'order'      => 'ASC',
										'orderby'    => 'meta_value_num',
									);

									if(isset($_GET['search']) && $_GET['search'] != ""){
										$search = $_GET['search'];

										$args['climate_search_title'] = $search;
										
									}
									?>
									<form class="search_small" method="get" action="<?php echo home_url('/explore/stories/'); ?>">
										<input type="text" name="search" placeholder="<?php pll_e('Search content here...'); ?>" value="<?php echo $search; ?>">
										
										<input type="submit" value="search">
									</form>
									<?php

									add_filter( 'posts_where', 'climate_title_filter', 10, 2 );
									 
									$loop = new WP_Query( $args );
									remove_filter( 'posts_where', 'climate_title_filter', 10, 2 );
									if ( $loop->have_posts() ) {
										?>
										<div class="section-stories row">
											<?php

											
											while ( $loop->have_posts() ) : $loop->the_post(); 
												?>
												<div class="col-sm-12 col-md-12 col-lg-12">
													<div class="post_litem pi_story w4post">
														<a rel="bookmark" href="<?php echo get_permalink(); ?>">
															<div class="row">
																<div class="col-sm-5 col-md-6 col-lg-4">

																<?php  if ( has_post_thumbnail($post->ID)) {
																	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
																	<div class="post_thumb">
																		<?php // the_post_thumbnail('full'); ?>
																		<div class="post_image" 
																		style="background-image: url(<?php echo $image[0]; ?>);"></div>
																	</div>
																<?php } ?>
																</div>
															
																<div class="col-sm-7 col-md-6 col-lg-8">
																	<p class="title"><?php echo get_the_title();  ?></p>
																	<div class="post_content">
																		<?php $title = get_the_content(); 
																		$short_title = wp_trim_words( $title, 20, '...' );
																		echo '<div class="post-excerpt">'.$short_title.'</div>'; ?>
																	</div>
																	<span class="entry-date"><?php echo get_the_date(); ?></span>
																	<button class="btn btn_link"><?php pll_e('Read More'); ?></button>
																</div>
															</div>
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
										<div class="row">
											<div class="col-sm-12 col-md-12">
												<div class="alert alert-warning" role="alert">
													<?php //echo __('There are no Stories','climatebox'); ?>
													<?php pll_e('There are no stories'); ?>
												</div>
											</div>
										</div>
										<?php
									}
									wp_reset_postdata();

									?>

								</div><!-- Stories -->

								<div class="tab-pane fade" id="ExploreTabGallery" role="tabpanel" aria-labelledby="ExploreTabGallery-tab">
									
									

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