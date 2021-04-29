<?php /* Template Name: Project Submit Page */ ?>


<?php 

acf_form_head();

get_header(); ?>


<!-- Fornt End Prject Form Page -->
<div class="container-fluid cm_page_content">
	<div class="container">
		<div class="row">

			<div class="col-sm-12 col-md-12">
				<div class="post_content">

					<?php $user = wp_get_current_user();
					if ( in_array( 'um_teacher', (array) $user->roles ) || in_array( 'um_moderator', (array) $user->roles ) || in_array( 'administrator', (array) $user->roles ) ) { ?>

						<div class="pagehead">
							<h1><?php echo get_the_title(); ?></h1>
						</div>

						<div class="fp_publish">
							<div class="row">
								<div class="col-md-12 col-lg-8">
									
									<?php // Get URL for Current Lang
									$submitted_project = pll_get_post( 771 );
									$submitted_project_url = get_the_permalink($submitted_project);
									?>

									

									<?php while ( have_posts() ) : the_post(); ?>
										<?php acf_form(array(
											'post_id'       => 'new_post',
											'post_title'	=> true,
											'uploader' => 'basic',
											'post_content'	=> false,
											'return' => $submitted_project_url,
											'new_post'      => array(
												'post_type'     => 'projects',
												'post_status'   => 'publish'
											),
											'submit_value'  => __("Submit Project", 'acf'),
											'updated_message' => __("Project submitted successfully", 'acf')
										)); ?>
									<?php endwhile; ?>
								</div>
							</div>
						</div>

					<?php } else { ?>

						<div class="alert alert-danger" role="alert">
							<?php pll_e('Sorry, but you do not have permission to view this content.'); ?> <?php pll_e('Please login to the portal to see page details.'); ?>
						</div>

					<?php } ?>

				</div>

			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>