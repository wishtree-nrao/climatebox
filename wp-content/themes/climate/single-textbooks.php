<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<?php if ( ! empty( $post->post_parent ) ) { ?>
	<div class="post_attachment_head" style="background-image: url('<?php echo get_the_post_thumbnail_url( $post->post_parent ); ?>');"></div>
<?php } else { ?>
	<div class="post_attachment_head no_img" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/quiz_header_bg.png');"></div>
<?php } ?>


<!-- Climate Box Toolkit Page -->
<div class="container-fluid cm_page_content textbook_content">
	<div class="container">
		<div class="row">

			
			<div class="col-sm-5 col-md-5 col-lg-3">


				<?php /* ?>
				<div id="TBsidebarWrap" class="sidebarWrap">
					<?php // get_template_part( 'toolkit-sidebar' ); ?>
					<a class="btn btn_back" href="<?php echo get_site_url(); ?>/toolkit/textbooks/"><i class="fas fa-chevron-left"></i> Back to Textbooks list</a>
					<div id="TBsidebar" class="sidebar_left">
						<div class="textbook_list">
							<?php if ( is_active_sidebar( 'toolkit_textbox_sidebar' )) : ?>
								<?php  dynamic_sidebar( 'toolkit_textbox_sidebar' ); ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<?php */ ?>




				<?php  ?>
				<div id="TBsidebarWrap" class="sidebarWrap">
					
					<?php // Get URL for Current Lang
					$textbooks = pll_get_post( 316 );
					$textbooks_url = get_the_permalink($textbooks);
					?>

					<a class="btn btn_back" href="<?php echo $textbooks_url; ?>" title="<?php pll_e('Back to Textbooks list'); ?>"><i class="fas fa-chevron-left"></i> <?php pll_e('Back to Textbooks list'); ?></a>

					<div id="TBsidebar" class="sidebar_left">
						<div class="textbook_list">

							<div class="toolkit_sidebar">
								<h3 class="widget-title"><?php pll_e('Topics'); ?></h3>

								<div class="menu-textbook-menu-container">
								<?php 
								$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
								$args = array(
									'post_type'=>'textbooks',
									'post_status' => 'publish',
									'post_parent' => 0,
									'paged' => $paged,
									'posts_per_page' => -1,
									'orderby' => 'menu_order',
									'order'   => 'ASC',
								);

								?>

								<ul class="menu"> 

									<?php $loop = new WP_Query( $args );
									$current_post_id = ! empty( $_GET['postid'] ) ? absint($_GET['postid']) : 0;
									if ( $loop->have_posts() ) {  while ( $loop->have_posts() ) : $loop->the_post(); ?>

							<?php /* Add Active Class for Current Page 
							$post_class = 'menu_post';
							if ( get_the_id() === $current_post_id ) {
								$post_class .= ' active';
							} else {
								$post_class .= ' inactive';
							}  */

							global $post,$wp_query;
							$current_id = $wp_query->get_queried_object_id();

							?>

							<li class="menu-item parent_lvl1 <?php if ($current_id == $post->ID) echo 'current'; ?>">
								<a rel="bookmark" href="<?php echo get_permalink(); ?>">
									<?php the_title(); ?>
								</a>

								<ul class="sub-menu">

									<!-- Query Loop Here 1st Level -->
									<?php  

									$post_id = $post->ID;
									$args_1 = array(
										'post_type'=>'textbooks',
										'post_status' => 'publish',
										'post_parent'    => $post_id,
										'posts_per_page' => -1,
										'orderby' => 'title',
										'order'   => 'ASC',
									);

									$loop_1 = new WP_Query( $args_1 );
									if ( $loop_1->have_posts() ) {  while ( $loop_1->have_posts() ) : $loop_1->the_post(); ?>

										<li class="menu-item <?php if ($current_id == $post->ID) echo 'current'; ?>">
											<a rel="bookmark" href="<?php echo get_permalink(); ?>">
												<?php the_title(); ?>
											</a>

											<ul class="sub-menu">
												<!-- Query Loop Here 1st Level -->
												<?php  

												$post_id = $post->ID;
												$args_2 = array(
													'post_type'=>'textbooks',
													'post_status' => 'publish',
													'post_parent'    => $post_id,
													'posts_per_page' => -1,
													'orderby' => 'title',
													'order'   => 'ASC',
												);

												$loop_2 = new WP_Query( $args_2 );
												if ( $loop_2->have_posts() ) {  while ( $loop_2->have_posts() ) : $loop_2->the_post(); ?>

													<li class="menu-item <?php if ($current_id == $post->ID) echo 'current'; ?>">
														<a rel="bookmark" href="<?php echo get_permalink(); ?>">
															<?php the_title(); ?>
														</a>
													</li>

												<?php endwhile;  }  ?>

											</ul>
										</li>

									<?php endwhile;  }  ?>

								</ul>

							</li>

						<?php endwhile; ?> 

					</ul> 

				<?php } wp_reset_postdata(); ?>
				</div>
			</div>

		</div>
	</div>
</div>
<?php  ?>





</div>

<section id="primary" class="content-area col-sm-7 col-md-7 col-lg-9">
	<div id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();  ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('post_litem'); ?>>
				<div class="post-thumbnail">
					<?php the_post_thumbnail(); ?>
				</div>
				<header class="entry-header">
					<?php
					if ( is_single() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<p class="title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></p>' );
					endif;

					if ( 'post' === get_post_type() ) : ?>
						<div class="entry-meta">
							<?php // wp_bootstrap_starter_posted_on(); ?>
						</div><!-- .entry-meta -->
						<?php
					endif; ?>
				</header><!-- .entry-header -->
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

			<?php the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
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


<script type="text/javascript">
	
	jQuery(function() {
		var top = jQuery('#TBsidebar').offset().top - parseFloat(jQuery('#TBsidebar').css('marginTop').replace(/auto/, 0));
		var footTop = jQuery('#footer-widget').offset().top - parseFloat(jQuery('#footer-widget').css('marginTop').replace(/auto/, 0));

		var maxY = footTop - jQuery('#TBsidebar').outerHeight();

		jQuery(window).scroll(function(evt) {
			var y = jQuery(this).scrollTop() + 100;
			if (y >= top - jQuery('#masthead').height()) {
				if (y < maxY) {
					jQuery('#TBsidebar').addClass('fixed').removeAttr('style');
				} else {
					jQuery('#TBsidebar').removeClass('fixed').css({
						position: 'absolute',
						top: (maxY - top) + 'px'
					});
				}
			} else {
				jQuery('#TBsidebar').removeClass('fixed');
			}
		});
	});

	jQuery(".textbook_list ul.menu li.menu-item.current").closest('.parent_lvl1').addClass('parent_active');


</script>

