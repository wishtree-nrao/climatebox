<?php /* Template Name: Contest Page */ ?>


<?php get_header(); ?>


<!-- Climate Box Toolkit Textbook Page -->
<div class="container-fluid cm_page_content"> <!-- blue_shape_bg_center -->
	<div class="container">
		<div class="row">

			<div class="col-sm-12 col-md-12">
				<div class="post_content">

					<div class="pagehead">
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-5">
								<h1><?php echo get_the_title(); ?></h1>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-7">
								<div class="head_action">

									<?php $user = wp_get_current_user();
									if ( in_array( 'um_teacher', (array) $user->roles ) || in_array( 'um_moderator', (array) $user->roles ) || in_array( 'administrator', (array) $user->roles ) || in_array( 'um_contest-admin', (array) $user->roles ) ) { ?>

										<?php // Get URL for Current Lang
										$submitted_project = pll_get_post( 771 );
										$submitted_project_url = get_the_permalink($submitted_project);
										?>

										<a class="btn btnBlue" href="<?php echo $submitted_project_url; ?>"><?php pll_e('Submitted Projects'); ?></a>
									<?php } ?>

									<?php 



									$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1; 

									$args = array(
										'post_type'=>'competition', 
										'posts_per_page' => 8,
										'paged' => $paged,
										'order'      => 'DESC',
										'orderby'    => 'meta_value',
										'post_parent' => 0,
										'post_status' => array( 'publish', 'draft')
									);

									if(isset($_GET['search']) && $_GET['search'] != ""){
										$search = $_GET['search'];

										$args['climate_search_title'] = $search;
										
									}
									 // Get URL for Current Lang
									$contests_Page = pll_get_post( 68 );
									$contests_Page_url = get_the_permalink($contests_Page);
									
									
									?>
									<form class="search" method="get" action="<?php echo $contests_Page_url; ?>">
										<input type="text" name="search" placeholder="<?php pll_e('Search content here...'); ?>" value="<?php echo $search; ?>">
										<input type="submit" value="search">
									</form>
								</div>
							</div>
						</div>
					</div>


					<div class="row">
						<?php
						

						add_filter( 'posts_where', 'climate_title_filter', 10, 2 );
									 
						$loop = new WP_Query( $args );
						remove_filter( 'posts_where', 'climate_title_filter', 10, 2 );
						if ( $loop->have_posts() ) {
						
							while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
									<div class="post_litem contest_item">

										<?php if ( 'publish' === get_post_status()) { ?>
											<a rel="bookmark" href="<?php echo get_permalink(); ?>">
											<?php } ?>

											<?php the_title( '<p class="title">', '</p>' ); ?>

											<div class="post_status">
												<?php if ( 'publish' === get_post_status()) { ?>
													<span class="open"><?php pll_e('Open'); ?></span>
												<?php } else { ?>
													<span class="closed"><?php pll_e('Closed'); ?></span>
												<?php } ?>
											</div>

											<div class="post_meta">
												<p><?php pll_e('Published:'); ?> <?php $post_date = get_the_date( 'M j, Y' ); echo "<strong>" . $post_date . "</strong>"; ?></p>

												<p><?php pll_e('Due Date:'); ?> <strong><?php echo do_shortcode('[postexpirator dateformat="M j, Y" timeformat=""]'); ?></strong></p>
											</div>

											<?php if ( 'publish' === get_post_status()) { ?>
												<button class="btn btn_link"><i class="fas fa-eye"></i> <?php pll_e('View'); ?></button>
											<?php } else { ?>
												<?php pll_e('Closed'); ?>
											<?php } ?>
											

											<?php if ( 'publish' === get_post_status()) { ?>
											</a>
										<?php } ?>

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
						}else{
						?>
						<div class="col-sm-12 col-md-12">
							<div class="alert alert-warning" role="alert">
								<?php pll_e('There are no contest'); ?>
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