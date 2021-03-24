<?php
/**
* The template for displaying all single posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package WP_Bootstrap_Starter
*/

get_header(); ?>

<?php $user = wp_get_current_user();
if ( in_array( 'um_teacher', (array) $user->roles ) || in_array( 'um_moderator', (array) $user->roles ) || in_array( 'administrator', (array) $user->roles ) ) { ?>

	<?php if (has_post_thumbnail( $post->ID ) ) { ?>
		<div class="post_attachment_head" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
	<?php } else { ?>
		<div class="post_attachment_head" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
	<?php } ?>

<?php } else { ?>

	<div class="blankdiv_xxl"></div>

<?php } ?>


<div class="container cm_page_single">
	<div class="row">

		<section id="primary" class="content-area col-sm-12 col-lg-12">
			<div id="main" class="site-main" role="main">

				<?php $user = wp_get_current_user();
				if ( in_array( 'um_teacher', (array) $user->roles ) || in_array( 'um_moderator', (array) $user->roles ) || in_array( 'administrator', (array) $user->roles ) ) { ?>

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

		<?php } else { ?>

			<div class="alert alert-danger" role="alert">
				<?php pll_e('Sorry, but you do not have permission to view this content.'); ?>
			</div>

		<?php } ?>

	</div><!-- #main -->
</section><!-- #primary -->

</div><!-- .row -->
</div><!-- .container -->
<?php
get_sidebar();
get_footer();
