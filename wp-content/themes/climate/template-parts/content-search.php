<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class('post_litem'); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<a class="post_url" href="<?php the_permalink(); ?>"><?php echo the_permalink(); ?></a>
		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php // wp_bootstrap_starter_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<a class="btn btn_link" href="<?php the_permalink(); ?>">Read More</a>
	<?php /*
	<footer class="entry-footer">
		<?php wp_bootstrap_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	*/ ?>

</article><!-- #post-## -->

