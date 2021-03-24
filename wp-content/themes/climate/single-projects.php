<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<?php /* if ( ! empty( $post->post_parent ) ) { ?>
	<div class="post_attachment_head" style="background-image: url('<?php echo get_the_post_thumbnail_url( $post->post_parent ); ?>');"></div>
<?php } else { ?>
	<div class="post_attachment_head" style="background-image: url('<?php echo get_the_post_thumbnail_url( $post->post_parent ); ?>');"></div>
<?php } */ ?>


<!-- Climate Box Toolkit Page -->
<div class="container-fluid cm_page_content">
	<div class="container">
		<div class="row">
			
			<section id="primary" class="content-area col-sm-12 col-md-12 col-lg-12">
				<div id="main" class="site-main" role="main">

					<?php $user = wp_get_current_user();
					if ( in_array( 'um_teacher', (array) $user->roles ) || in_array( 'um_moderator', (array) $user->roles ) || in_array( 'administrator', (array) $user->roles ) || in_array( 'um_contest-admin', (array) $user->roles ) ) { ?>

						<?php
						while ( have_posts() ) : the_post();  ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
								<div class="post-thumbnail">
									<?php // the_post_thumbnail(); ?>
								</div>
								<header class="pagehead">
									<?php the_title( '<h1>', '</h1>' ); ?>
								</header><!-- .entry-header -->

								<div class="page_meta">
									<span class="meta_date">
										<?php $post_date = get_the_date( 'F j, Y' ); ?>
										<strong><?php pll_e('Published Date:'); ?> </strong> <?php echo $post_date; ?>
									</span>
								</div>


								<?php if( get_field('sc_rules') ): ?>
									<div class="contest_rules">
										<h4 class="title"><?php pll_e('Rules'); ?></h4>
										<?php the_field('sc_rules'); ?>
									</div>
								<?php endif; ?>


								<div class="entry-content">
									
									<div class="view_form">

										<?php if( get_field('ps_school_name') ): ?>
											<div class="item">
												<div class="row">
													<div class="col-sm-5 col-md-5 col-lg-3">
														<label><?php pll_e('Name of your school'); ?></label>
													</div>

													<div class="col-sm-7 col-md-7 col-lg-9">
														<div class="value">
															<?php the_field('ps_school_name'); ?>
														</div>
													</div>
												</div>
											</div>
										<?php endif; ?>

										<?php if( get_field('ps_student_name') ): ?>
											<div class="item">
												<div class="row">
													<div class="col-sm-5 col-md-5 col-lg-3">
														<label><?php pll_e('Name of the student'); ?></label>
													</div>

													<div class="col-sm-7 col-md-7 col-lg-9">
														<div class="value">
															<?php the_field('ps_student_name'); ?>
														</div>
													</div>
												</div>
											</div>
										<?php endif; ?>

										<?php $featured_post = get_field('ps_select_contest');
										if( $featured_post ):
											$post = $featured_post;
											setup_postdata( $post ); 
											?>
											<div class="item">
												<div class="row">
													<div class="col-sm-5 col-md-5 col-lg-3">
														<label><?php pll_e('Contest'); ?></label>
													</div>

													<div class="col-sm-7 col-md-7 col-lg-9">
														<div class="value">
															<?php echo esc_html( $featured_post->post_title ); ?>
														</div>

														<?php /*
														<div class="value">
															<a href="<?php the_permalink(); ?>">
																<?php echo esc_html( $featured_post->post_title ); ?>
															</a>
														</div>
														*/ ?>

														<?php // echo get_acf_key(); ?>

													</div>
												</div>
											</div>
											<?php wp_reset_postdata(); ?>
										<?php endif; ?>

										<?php 
										$term = get_field('ps_project_category');
										if( $term ): ?>
											<div class="item">
												<div class="row">
													<div class="col-sm-5 col-md-5 col-lg-3">
														<label><?php pll_e('Project Category'); ?></label>
													</div>

													<div class="col-sm-7 col-md-7 col-lg-9">
														<div class="value">
															<?php echo esc_html( $term->name ); ?>
														</div>
													</div>
												</div>
											</div>
										<?php endif; ?>

										<?php if( get_field('ps_project_description') ): ?>
											<div class="item">
												<div class="row">
													<div class="col-sm-5 col-md-5 col-lg-3">
														<label><?php pll_e('Project Description'); ?></label>
													</div>

													<div class="col-sm-7 col-md-7 col-lg-9">
														<div class="value">
															<?php the_field('ps_project_description'); ?>
														</div>
													</div>
												</div>
											</div>
										<?php endif; ?>


										<div class="item">
											<div class="row">
												<div class="col-sm-5 col-md-5 col-lg-3">
													<label><?php pll_e('Project Files'); ?></label>
												</div>


												<div class="col-sm-7 col-md-7 col-lg-9">
													<div class="value">
														<?php/*  $file = get_field('file_upload_1'); 
														if( $file ): ?>
															<div class="file">
																<a target="_blank" href="<?php echo $file['url']; ?>">
																	<i class="fas fa-paperclip"></i>
																	<?php echo $file['filename']; ?>
																</a>
															</div>
														<?php endif; ?>

														<?php $file = get_field('file_upload_2'); 
														if( $file ): ?>
															<div class="file">
																<a target="_blank" href="<?php echo $file['url']; ?>">
																	<i class="fas fa-paperclip"></i>
																	<?php echo $file['filename']; ?>
																</a>
															</div>
														<?php endif; ?>

														<?php $file = get_field('file_upload_3'); 
														if( $file ): ?>
															<div class="file">
																<a target="_blank" href="<?php echo $file['url']; ?>">
																	<i class="fas fa-paperclip"></i>
																	<?php echo $file['filename']; ?>
																</a>
															</div>
														<?php endif; ?>
														

														<?php $file = get_field('file_upload_3'); 
														if( $file ): ?>
															<div class="file">
																<a target="_blank" href="<?php echo $file['url']; ?>">
																	<i class="fas fa-paperclip"></i>
																	<?php echo $file['filename']; ?>
																</a>
															</div>
														<?php endif; */ ?>

														<?php if( have_rows('ps_project_documents') ): while ( have_rows('ps_project_documents') ) : the_row(); ?>
															<?php $file = get_sub_field('ps_doc_file'); ?>
															<?php if ( $file ): ?>
																<div class="file">
																	<a target="_blank" href="<?php echo $file['url']; ?>" title="<?php echo $file['title']; ?>"><?php echo $file['title']; ?></a>
																</div>
															<?php endif; ?>
														<?php endwhile; ?>
														<?php else : ?>
															<p class="filenotfound"><i class="far fa-times-circle"></i> <?php pll_e('File not found!'); ?></p>
														<?php endif; ?>


														<?php /*
														
														if( have_rows('test') ):

                                                            // Loop through rows.
															while( have_rows('test') ) : the_row();

                                                                // Load sub field value.
																$sub_value = get_sub_field('testfile');
																print_r( $sub_value );
                                                                // Do something...

                                                            // End loop.
															endwhile;

                                                        // No value.
														else :
                                                            // Do something...
														endif;
														*/
														?>
													</div>
												</div>
											</div>
										</div>


									</div>

								</div><!-- .entry-content -->

								<footer class="entry-footer">
									<?php wp_bootstrap_starter_entry_footer(); ?>
								</footer><!-- .entry-footer -->
							</article><!-- #post-## -->

						<?php // the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							  // comments_template();
					endif;

		endwhile; // End of the loop.
		?>

	<?php } else { ?>

		<div class="alert alert-danger" role="alert">
			<?php pll_e('Sorry, but you do not have permission to view this content.'); ?>
		</div>

	<?php } ?>



</div><!-- #main -->
</section><!-- #primary -->

</div><!-- .row -->
</div><!-- .container -->
</div><!-- .container fluid -->
<?php
get_sidebar();
get_footer(); ?>

