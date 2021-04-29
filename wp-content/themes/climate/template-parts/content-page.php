<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
    $enable_vc = get_post_meta(get_the_ID(), '_wpb_vc_js_status', true);
    if(!$enable_vc ) {
    ?>
    <header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
    <?php } ?>

	<div class="entry-content">
		<?php
			the_content();
			?>
			<?php  
		 						if( have_rows('lm_post_documents') ): 
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
								
<?php 
			

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

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
