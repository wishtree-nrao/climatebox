<?php /* Template Name: Project List Page */ 


get_header();
global $current_user;
$authorID = $current_user->ID; 
$user = wp_get_current_user();

?>


<!-- Climate Box Toolkit Textbook Page -->
<div class="container-fluid cm_page_content"> <!-- blue_shape_bg_center -->
	<div class="container">
		<div class="row">

			<div class="col-sm-12 col-md-12">
				<div class="post_content">

					<?php 
					if ( in_array( 'um_teacher', (array) $user->roles ) || in_array( 'um_moderator', (array) $user->roles ) || in_array( 'administrator', (array) $user->roles ) || in_array( 'um_contest-admin', (array) $user->roles ) ) { 
						if(isset($_GET['search']) && $_GET['search'] != "" ){
							$search = $_GET['search'];
						}
						?>
						<div class="pagehead">
							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-6">
									<h1><?php echo get_the_title(); ?></h1>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="head_action">

										<?php // Get URL for Current Lang
										$contests = pll_get_post( 68 );
										$contests_url = get_the_permalink($contests);

										$projects = pll_get_post( 771 );
										$projects_url = get_the_permalink($projects);
										?>

										<a class="btn btnBlue" href="<?php echo $contests_url; ?>"><?php pll_e('See Contest List'); ?></a>
								
										<form class="search" method="get" action="<?php echo $projects_url; ?>">
											<input type="text" name="search" placeholder="<?php pll_e('Search content here...'); ?>" value="<?php echo $search; ?>">
										
											<input type="submit" value="search">
										</form>
									</div>
								</div>
							</div>
						</div>

						
						<?php

						if(isset($_GET['search']) && $_GET['search'] != "" ){ ?>

							<div class="row">

							<?php
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$args = array(
								'post_type'=>'projects', 
								'posts_per_page' => 12,
								'paged' => $paged,
								'order'      => 'DESC',
								'orderby'    => 'meta_value_num',
								'post_parent' => 0,
								'climate_search_title' => $search,
							);

							if ( in_array( 'um_teacher', (array) $user->roles ) || in_array( 'um_moderator', (array) $user->roles ) ) { 
								$args['author'] = $authorID;

							} elseif ( in_array( 'administrator', (array) $user->roles ) || in_array( 'um_contest-admin', (array) $user->roles ) ) {

							}
							add_filter( 'posts_where', 'climate_title_filter', 10, 2 );
									 
							$loop = new WP_Query( $args );
							remove_filter( 'posts_where', 'climate_title_filter', 10, 2 );
							if ( $loop->have_posts() ) {
								?>

								<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

									<div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
										<div class="post_litem project_item">
											<a rel="bookmark" href="<?php echo get_permalink(); ?>">
												<?php the_title( '<p class="title">', '</p>' ); ?>

												<div class="post_meta">
													<p><?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?></p>
												</div>

												<?php $featured_post = get_field('ps_select_contest');
												if( $featured_post ): ?>
													<p class="contest_name"><?php echo esc_html( $featured_post->post_title ); ?></p>
												<?php endif; ?>

												<?php // <button class="btn btn_link"><i class="fas fa-eye"></i> View</button> ?>
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
							} else { ?>

								<div class="col-sm-12 col-md-12">
									<div class="alert alert-warning" role="alert">
										<?php pll_e('There are no projects submitted'); ?>
									</div>
								</div>

							<?php  }
							wp_reset_postdata();
							?>
							</div>
							<?php
							

						}else{

						?>

						
						<div class="row">
							<?php
							$m = 0;	
							$argscompetitions = array(
								'post_type'=>'competition', 
							);
							$competitions = get_posts( $argscompetitions );

							if ( $competitions ) {
							
								foreach ( $competitions as $competition ) : 
									
									

									if ( in_array( 'um_teacher', (array) $user->roles ) || in_array( 'um_moderator', (array) $user->roles ) ) { 
										$args = array(
											'post_type'=>'projects', 
											'posts_per_page' => 4,
											//'paged' => $paged,
											'post_parent' => 0,
											'author' => $authorID,
											'meta_key' => 'ps_select_contest',
											'meta_value' => $competition->ID,
										);

									} elseif ( in_array( 'administrator', (array) $user->roles ) || in_array( 'um_contest-admin', (array) $user->roles ) ) {

										$args = array(
											'post_type'=>'projects', 
											'posts_per_page' => 4,
										//	'paged' => $paged,
											'post_parent' => 0,
											'meta_key' => 'ps_select_contest',
											'meta_value' => $competition->ID,
										);

									}


									$loop = new WP_Query( $args );
									if ( $loop->have_posts() ) {
										$m++;
										?>
										<div class="col-sm-12 col-md-12 col-lg-12">
											<h5 class="contest-title"><?php echo $competition->post_title ; ?></h5>
										</div>
										<?php
										//$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1; ?>
										
										
										<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

											<div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
												<div class="post_litem project_item">
													<a rel="bookmark" href="<?php echo get_permalink(); ?>">
														<?php the_title( '<p class="title">', '</p>' ); ?>

														<div class="post_meta">
															<p><?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?></p>
														</div>

														<?php $term = get_field('ps_project_category');
														if( $term ): ?>
															<p class="contest_name"><?php echo esc_html( $term->name ); ?></p>
														<?php endif; ?>

														<?php // <button class="btn btn_link"><i class="fas fa-eye"></i> View</button> ?>
													</a>
												</div>
											</div>

											<?php
										endwhile; ?>
										<div class="contest-projects-<?php echo  $competition->ID; ?>" ></div>



										<div class="col-sm-12 col-md-12">
											<div class="pagination_wrap">
												<div class="pagination">
													<?php $total_pages = $loop->max_num_pages;

													if ($total_pages > 1){

														$current_page = max(1, get_query_var('paged'));

														?>
														<a  data-contest="<?php echo $competition->ID ?>" data-total-pages="<?php echo $total_pages; ?>" data-paged="2" class="btn btn-white classmore more-<?php echo $competition->ID ?>"><?php pll_e('Show More'); ?> <i class="fas fa-sort-down"></i></a>
														
														<div data-contest="<?php echo $competition->ID ?>" class="classless btn btn-white less-<?php echo $competition->ID ?>" style="display: none"><?php pll_e('Show Less'); ?> <i class="fas fa-sort-up"></i></div>

														<?php

													/*echo paginate_links(array(
														'base' => get_pagenum_link(1) . '%_%',
														'format' => '/page/%#%',
														'current' => $current_page,
														'total' => $total_pages,
														'prev_text'    => __('« prev'),
														'next_text'    => __('next »'),
													));*/
												}?>

											</div>
										</div>
									</div>

									<?php 
								}  ?>


								<?php  
								wp_reset_postdata();

							endforeach;

						}
						if ( in_array( 'um_teacher', (array) $user->roles ) || in_array( 'um_moderator', (array) $user->roles ) ) { 
							$args = array(
								'post_type'=>'projects', 
								'posts_per_page' => -1,
								'post_parent' => 0,
								'author' => $authorID,					
							);

						} elseif ( in_array( 'administrator', (array) $user->roles ) || in_array( 'um_contest-admin', (array) $user->roles ) ) {

							$args = array(
								'post_type'=>'projects', 
								'posts_per_page' => -1,	
								'post_parent' => 0,
							);

						}



						$loop = new WP_Query( $args );

						// print_r($competitions);

						if ( empty($loop->have_posts()) || empty($competitions) || $m == 0) {
							?>

							<div class="col-sm-12 col-md-12">
								<div class="alert alert-warning" role="alert">
									<?php pll_e('There are no projects submitted'); ?>
								</div>
							</div>
							
						<?php } ?>

					</div>


				<?php
					}

				 } else { ?>

					<div class="alert alert-danger" role="alert">
						<?php pll_e('Sorry, but you do not have permission to view this content.'); ?>   <?php pll_e('Please login to the portal to see page details.'); ?>
					</div>

				<?php } ?>


			</div>

		</div>

	</div>
</div>
</div>


<?php get_footer(); ?>