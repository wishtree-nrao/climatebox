<?php
/**
* The template for displaying all single posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package WP_Bootstrap_Starter
*/

get_header(); ?>

<?php if (has_post_thumbnail( $post->ID ) ) { ?>
	<div class="post_attachment_head" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
<?php } else { ?>
	<div class="post_attachment_head" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
<?php } ?>


<div class="container cm_page_single">
	<div class="row">

		<section id="primary" class="content-area col-sm-12 col-lg-12">
			<div id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post(); 

	//get_template_part( 'template-parts/content', get_post_format() );
					?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php
						$enable_vc = get_post_meta(get_the_ID(), '_wpb_vc_js_status', true);
						if(!$enable_vc ) {
							?>
							<header class="pagehead">
								<?php the_title( '<h1>', '</h1>' ); ?>
							</header><!-- .entry-header -->
						<?php } ?>

						<?php // Learning Materials Single Page ?>


						<?php // if ( is_singular( 'video_lessons' ) ) { ?>

							<div class="page_meta">
								<span class="meta_date">
									<?php $post_date = get_the_date( 'F j, Y' ); ?>
									<strong><?php pll_e('Published Date:'); ?> </strong> <?php echo $post_date; ?>
								</span>


								<?php if ( is_singular( 'learning_materials' ) ) { ?>
									<div class="terms_list">
										<span class="terms_item">
											<?php $terms = get_the_terms( $post->ID , 'lm_language' );
											foreach ( $terms as $term ) {
												echo '<span class="term_sp">' . $term->name . '</span>';
											// echo '<a href="' . get_term_link( $term, 'lm_language' ) . '">' . $term->name . '</a>';
											} ?>
										</span>
										<span class="terms_item with_label"><?php pll_e('Category:'); ?>
											<?php $terms = get_the_terms( $post->ID , 'materials_category' );
											foreach ( $terms as $term ) {
												echo $term->name;
											// echo '<a href="' . get_term_link( $term, 'materials_category' ) . '">' . $term->name . '</a>';
											} ?>
										</span>
										<span class="terms_item terms_multiple">
											<?php $terms = get_the_terms( $post->ID , 'key_topics' );
											foreach ( $terms as $term ) {
												echo '<span class="term_sp">' . $term->name . '</span>';
											// echo '<a href="' . get_term_link( $term, 'materials_category' ) . '">' . $term->name . '</a>';
											} ?>
										</span>
									</div>
								<?php } ?>
							</div>

							<?php // } ?>


							<div class="entry-content">
								<?php
								the_content();

								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
									'after'  => '</div>',
								) );
								?>
							</div><!-- .entry-content -->


							<?php // Learning Materials Single Page ?>
							<?php if ( is_singular( 'learning_materials' ) || is_singular( 'discussion_material' ) || is_singular( 'post' ) || is_singular( 'stories' )) { ?>
								
								<?php if( have_rows('lm_post_documents') ): 
									?>
									<div class="documents_list">
										<h4 class="title"><?php pll_e('Attachments'); ?></h4>

										<div class="row row_sm">
									<?php
										 while ( have_rows('lm_post_documents') ) : the_row(); ?>
											<?php $file = get_sub_field('lm_document'); ?>
											<?php if ( $file ): ?>
												<div class="col-5">
													<div class="file">
														<a target="_blank" href="<?php echo $file['url']; ?>" title="<?php echo $file['title']; ?>"><?php echo $file['title']; ?></a>
													</div>
												</div>
											<?php endif; ?>
										
										<?php endwhile; ?>
										</div>
									</div>
										<?php else : ?>
											<!-- <div class="col-sm-12">
												<p class="filenotfound"><i class="far fa-times-circle"></i> File not found!</p>
											</div> -->
										<?php endif; ?>
									
							<?php } ?>


							<?php if ( get_edit_post_link() && !$enable_vc ) : ?>
								<footer class="entry-footer">
									<?php
									edit_post_link(
										sprintf(
											/* translators: %s: Name of current post */
											esc_html__( 'Edit %s', 'wp-bootstrap-starter' ),
											the_title( '<span class="screen-reader-text">"', '"</span>', false )
										),
										'<span class="edit-link">',
										'</span>'
									);
									?>
								</footer><!-- .entry-footer -->
							<?php endif; ?>
						</article><!-- #post-## -->



						<?php
			 // the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :

				// comments_template();
							if ( is_singular('discussion_topic') ) {
								comments_template();
							}

						endif;

			endwhile; // End of the loop.
			?>

		</div><!-- #main -->
	</section><!-- #primary -->

</div><!-- .row -->
</div><!-- .container -->
<?php
get_sidebar();
get_footer();
