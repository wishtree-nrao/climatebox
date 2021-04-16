<?php /* Template Name: Teachers Page */ ?>


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
									<a class="nav-link active" id="TeacherTabLM-tab" href="<?php echo $LM_Page_url; ?>">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/lm_icon.svg" />
										<span><?php pll_e('Learning Materials'); ?></span>
									</a>
								</li>
								<li class="nav-item">
									<?php // Get URL for Current Lang
									$VLW_Page = pll_get_post( 1269 );
									$VLW_Page_url = get_the_permalink($VLW_Page);
									?>
									<a class="nav-link" id="TeacherTabVW-tab"  href="<?php echo $VLW_Page_url; ?>">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/video_icon.svg" />
										<span><?php pll_e('Video Lessons and Webinars'); ?></span>
									</a>
								</li>
								<li class="nav-item">
									<?php // Get URL for Current Lang
									$DM_Page = pll_get_post( 1276 );
									$DM_Page_url = get_the_permalink($DM_Page);
									?>
									<a class="nav-link" id="TeacherTabD-tab" href="<?php echo $DM_Page_url; ?>">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/discuss_icon.svg" />
										<span><?php pll_e('Discussion Material'); ?></span>
									</a>
								</li>
							</ul>

							<div class="tab-content" id="ExploreTabContent">
								<div class="tab-pane fade show active" id="TeacherTabLM" role="tabpanel" aria-labelledby="TeacherTabLM-tab">

									<?php

									$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1; 

									$args = array(
										'post_type' => 'learning_materials', 
										'posts_per_page' => 5,
										'paged' => $paged,
										'order'      => 'ASC',
										'orderby'    => 'meta_value_num',
									);

									if(isset($_GET['search']) && $_GET['search'] != ""){
										$search = $_GET['search'];

									//	$args['climate_search_title_tax'] = $search;

										$args['tax_query'] = array(
											'relation' => 'OR',
											array(
												'taxonomy' => 'lm_language',
												'field'    => 'name',
												'terms'    => trim($search),
											),
											array(
												'taxonomy' => 'materials_category',
												'field'    => 'name',
												'terms'    => trim($search),
											),
											array(
												'taxonomy' => 'key_topics',
												'field'    => 'name',
												'terms'    => trim($search),
											),
										);
										
									}
									?>
									<form class="search_small search_md" method="get" action="<?php echo $LM_Page_url; ?>">
										<input type="text" name="search" placeholder="<?php pll_e('Search by Language | Category | Key Topics'); ?>" value="<?php echo $search; ?>">
										
										<input type="submit" value="search">
									</form>

									<div class="short_content">
										<?php if( get_field('learning_materials') ): ?>
											<p><?php the_field('learning_materials'); ?></p>
										<?php endif; ?>
									</div>

									<?php

									//add_filter( 'posts_where', 'climate_search_title_tax', 10, 2 );
									
									$loop = new WP_Query( $args );
									//remove_filter( 'posts_where', 'climate_search_title_tax', 10, 2 );
									if ( $loop->have_posts() ) {

										?>
										<div class="row">
											<?php while ( $loop->have_posts() ) : $loop->the_post();  ?>
												<div class="col-sm-12 col-md-12 col-lg-12">
													<div class="post_litem lrn_mat w4post">
														
														<div class="row">
															<div class="col-sm-5 col-md-4 col-lg-3">

																<div class="post_thumb">
																	<a rel="bookmark" href="<?php echo get_permalink(); ?>">
																		<?php  if ( has_post_thumbnail($post->ID)) {
																			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
																			<div class="post_thumb">
																				<?php // the_post_thumbnail('full'); ?>
																				<div class="post_image" 
																				style="background-image: url(<?php echo $image[0]; ?>);"></div>
																			</div>
																		<?php } else { ?>

																			<div class="post_image" 
																			style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder.png');"></div>

																		<?php } ?>
																	</a>
																</div>
																
															</div>
															<div class="col-sm-7 col-md-8 col-lg-9">
																<a rel="bookmark" href="<?php echo get_permalink(); ?>">
																	<p class="title"><?php echo get_the_title();  ?></p>
																	<div class="post_content">
																		<?php $title = get_the_content(); 
																		$short_title = wp_trim_words( $title, 30, '...' );
																		echo '<div class="post-excerpt">'.$short_title.'</div>'; ?>
																	</div>
																</a>

																<div class="terms_list">
																	<?php
																	$lm_language = get_the_terms( $post->ID, 'lm_language' );
																	
																	if(!empty($lm_language) && !empty($lm_language[0])){
																		?>
																		<span class="terms_item"><a href="<?php echo get_term_link( $lm_language[0] ) ?>"><?php echo $lm_language[0]->name ?></a></span>
																		<?php
																	}

																	$materials_category = get_the_terms( $post->ID, 'materials_category' );
																	
																	if(!empty($materials_category) && !empty($materials_category[0])){
																		?>
																		<span class="terms_item with_label"><?php pll_e('Category:'); ?> <a href="<?php echo get_term_link( $materials_category[0] ) ?>"><?php echo $materials_category[0]->name ?></a></span>
																		<?php
																	}

																	$key_topics = get_the_terms( $post->ID, 'key_topics' );
																	
																	if(!empty($key_topics)){
																		foreach ($key_topics as $key_topic) {
																			?>
																			<span class="terms_item terms_multiple"><a href="<?php echo get_term_link( $key_topic ) ?>"><?php echo $key_topic->name ?></a></span>
																			<?php
																		}
																		
																	}

																	?>

																</div>

																<span class="entry-date"><?php echo get_the_date(); ?></span>
																<a rel="bookmark" href="<?php echo get_permalink(); ?>" class="btn btn_link"><?php pll_e('Read More'); ?></a>
															</div>
														</div>
														
													</div>
												</div>
											<?php endwhile ?>
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
											<?php pll_e('There are no Learning Materials'); ?>
										</div>
										<?php
									}
									wp_reset_postdata();

									?>

									<?php //echo do_shortcode("[postlist id=621]");?>

								</div><!-- Learning Materials -->

								<div class="tab-pane fade" id="TeacherTabVW" role="tabpanel" aria-labelledby="TeacherTabVW-tab">
									

								</div><!-- Video Lessons and Webinars -->


								<div class="tab-pane fade" id="TeacherTabD" role="tabpanel" aria-labelledby="TeacherTabD-tab">

									<form class="search_small" method="get" action="<?php echo home_url('/'); ?>">
										<input type="text" name="s" placeholder="<?php pll_e('Search content here...'); ?>" value="<?php the_search_query(); ?>">
										<input type='hidden' value='679' name='wpessid' />
										<input type="submit" value="search">
									</form>

									<?php echo do_shortcode("[postlist id=673]");?>

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