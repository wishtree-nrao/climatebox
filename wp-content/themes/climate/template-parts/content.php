<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post_litem'); ?>>
	<div class="post-thumbnail">
		<a href="<?php the_permalink(); ?>">
			<?php  if ( has_post_thumbnail($post->ID)) {
				$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				<div class="post_thumb">
					<?php // the_post_thumbnail('full'); ?>
					<div class="post_image" 
					style="background-image: url(<?php echo $image[0]; ?>);"></div>
				</div>
			<?php } ?>
		</a>
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

	<a class="btn btn_link" href="<?php the_permalink() ?>"><?php pll_e('Read More'); ?></a>

	<?php /*
	<footer class="entry-footer">
		<?php wp_bootstrap_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	*/ ?>
</article><!-- #post-## -->
