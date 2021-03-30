<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<section id="primary" class="content-area col-sm-12 col-lg-12">
			<div id="main" class="site-main" role="main">

				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Oops!', 'wp-bootstrap-starter' ); ?></h1>
						<p><?php esc_html_e( 'This is not the page you are looking for.', 'wp-bootstrap-starter' ); ?></p>
					</header><!-- .page-header -->


					<div class="page-content">
						<h3>The page you requested cannot be found</h3>
						<p>This might be because:</p>
						<ul>
							<li>The Web page you are attempting to view may not exist or may have moved.</li>
							<li>You may have reached this page from an incorrect link. Try double checking the Web address.</li>
						</ul>

						<h3>Wanna try something else?</h3>
						<?php
						get_search_form();
						?>
					</div><!-- .page-content -->
				</section><!-- .error-404 -->

			</div><!-- #main -->
		</section><!-- #primary -->
	</div>
</div>


<?php
get_sidebar();
get_footer();
