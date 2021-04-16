<?php /* Template Name: Textbook Page */ 

global $wp;
get_header(); 
?>


<!-- Climate Box Toolkit Textbook Page -->
<div class="container-fluid cm_page_content"> <!-- blue_shape_bg_center -->
	<div class="container">
		<div class="row">

			<div class="col-sm-12 col-md-12">
				<div class="post_content">

					<?php

					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

					$args = array(
						'post_type'=>'textbooks', 
						'posts_per_page' => 8,
						'paged' => $paged,
						'order'      => 'ASC',
						'orderby'    => 'meta_value_num',
						'post_parent' => 0,
					);

					if(isset($_GET['search']) && $_GET['search'] != ""){
						$search = $_GET['search'];

						$args['climate_search_title'] = $search;
						
					}

					?>

					<div class="pagehead">
						<h1><?php echo get_the_title(); ?></h1>

						<form class="search" method="get" action="<?php echo home_url($wp->request); ?>">
							<input type="text" name="search" placeholder="<?php pll_e('Search by keywords'); ?>" value="<?php echo $search; ?>">
							
							<input type="submit" value="search">
						</form>

						
					</div>

					<div class="short_content">
						<?php if( get_field('textbooks_description') ): ?>
							<p><?php the_field('textbooks_description'); ?></p>
						<?php endif; ?>
					</div>


					<div class="row">
						<?php

						add_filter( 'posts_where', 'climate_title_filter', 10, 2 );
						
						$loop = new WP_Query( $args );
						remove_filter( 'posts_where', 'climate_title_filter', 10, 2 );
						if ( $loop->have_posts() ) { 
							?>

							<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<div class="col-sm-6 col-md-4 col-lg-3">
									<div class="post_litem textbook_item">

										<a rel="bookmark" href="<?php echo get_permalink(); ?>">
											
											<div class="post_thumb">
												<?php  if ( has_post_thumbnail($post->ID)) {
													$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
													
													<?php // the_post_thumbnail('full'); ?>
													<div class="post_image" 
													style="background-image: url(<?php echo $image[0]; ?>);"></div>
													
												<?php } else { ?>

													<div class="post_image" 
													style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder.png');"></div>

												<?php } ?>
											</div>

											<?php the_title( '<p class="title">', '</p>' ); ?>

											<div class="post_content">
												<?php $title = get_the_content(); 
												$short_title = wp_trim_words( $title, 15, '...' );
												echo '<p>'.$short_title.'</p>'; ?>
											</div>

											<?php /*<span class="entry-date"><?php echo get_the_date(); ?></span>*/ ?>

											<button class="btn btn_link"><?php pll_e('Read More'); ?></button>
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
						}
						else{
							?>
							<div class="col-sm-12 col-md-12">
								<div class="alert alert-warning" role="alert">
									<?php pll_e('There are no textbooks'); ?> 
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