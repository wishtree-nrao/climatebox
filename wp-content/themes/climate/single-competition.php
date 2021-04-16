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

					<?php
					while ( have_posts() ) : the_post();  ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
							<div class="post-thumbnail">
								<?php // the_post_thumbnail(); ?>
							</div>
							<header class="pagehead">
								<div class="row">
									<div class="col-sm-12 col-md-12 col-lg-9">
										<?php the_title( '<h1>', '</h1>' ); ?>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-3">
										<?php $user = wp_get_current_user();
									if ( in_array( 'um_teacher', (array) $user->roles ) || in_array( 'um_moderator', (array) $user->roles ) || in_array( 'administrator', (array) $user->roles ) ) { ?>
											
											<?php if ( 'publish' === get_post_status()) { ?>
												<div class="head_action">
													<?php // Get URL for Current Lang
													$submit_project = pll_get_post( 745 );
													$submit_project_url = get_the_permalink($submit_project);
													?>
													<a class="btn btnBlue" href="<?php echo $submit_project_url; ?>"><?php pll_e('SUBMIT PROJECT'); ?></a>
												</div>
											<?php } ?>

										<?php } ?>
									</div>
								</div>
							</header><!-- .entry-header -->

							<div class="page_meta">
								<span class="meta_date">
									<?php $post_date = get_the_date( 'M j, Y' ); ?>
									<strong><?php pll_e('Published Date:'); ?> </strong> <?php echo $post_date; ?>
								</span>

								<span class="meta_date">
									<strong><?php pll_e('Due Date:'); ?> </strong> <?php echo do_shortcode('[postexpirator dateformat="M j, Y" timeformat=""]'); ?>
								</span>
								
								<span class="meta_status">
									<?php if ( 'publish' === get_post_status()) { ?>
										<span class="active"><?php pll_e('The Contest is'); ?> <?php pll_e('Open'); ?></span>
									<?php } else { ?>
										<span class="inactive"><?php pll_e('The Contest is'); ?> <?php pll_e('Closed'); ?></span>
									<?php } ?>
								</span>
							</div>


							<?php if( get_field('sc_rules') ): ?>
								<div class="contest_rules">
									<h4 class="title"><?php pll_e('Rules'); ?></h4>
									<?php the_field('sc_rules'); ?>
								</div>
							<?php endif; ?>
							

							<div class="entry-content">
								<?php
								if ( is_single() ) :
									the_content();
								else :
            //the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter' ) );
									echo get_excerpt();
								endif;

								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
									'after'  => '</div>',
								) );
								?>
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

	</div><!-- #main -->
</section><!-- #primary -->

</div><!-- .row -->
</div><!-- .container -->
</div><!-- .container fluid -->
<?php
get_sidebar();
get_footer(); ?>


