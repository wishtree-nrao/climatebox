<?php /* Template Name: Submitted Questions */ ?>


<?php get_header(); ?>


<div class="container-fluid cm_page_content">
	<div class="container">
		<div class="row"> 

			<div class="col-sm-12 col-md-12">

				<?php $user = wp_get_current_user();
				if ( in_array( 'um_moderator', (array) $user->roles ) || in_array( 'administrator', (array) $user->roles ) ) { ?>

					<div class="post_content">

						<div class="pagehead">
							
							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-9">
									<h1><?php pll_e('Submitted Questions By Teachers'); ?></h1>
								</div>
							</div>
							
						</div>

						<div class="row">
							<?php
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

							$args = array(
								'post_type'=>'submit_question', 
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

											<a rel="bookmark" >
												<div class="row">
													
													<div class="col-sm-12 col-md-12 col-lg-12">
														<?php the_title( '<p class="title"><span class="grayfont"><i class="fas fa-quote-left"></i></span> ', '</p>' ); ?>
														<div class="post_content">
															<p><?php echo get_field('question_descrition'); ?></p>
														</div>

														<b class="entry-date"><?php pll_e('Submitted date'); ?> : <?php echo get_the_date(); ?></b>
														<b class="entry-date"><?php pll_e('Submitted By'); ?> : <?php echo get_the_author(); ?></b>

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

											?>

										</div>
									</div>
								</div>

								<?php
							}else{
								?>
								<div class="col-sm-12 col-md-12">
									<div class="alert alert-warning" role="alert">
										<?php pll_e('There are no questions submitted'); ?>
									</div>
								</div>
								<?php
							}
							wp_reset_postdata();
							?>
						</div>
					</div>

				<?php } else { ?>

					<div class="alert alert-danger" role="alert">
						<?php pll_e('Sorry, but you do not have permission to view this content.'); ?>   <?php pll_e('Please login to the portal to see page details.'); ?>
					</div>

				<?php } ?>
			</div>


		</div>
	</div>
</div>


<?php get_footer(); ?>