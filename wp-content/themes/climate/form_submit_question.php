<?php /* Template Name: Submit Questions Page */ ?>


<?php 

acf_form_head();

get_header(); ?>


<!-- Fornt End Submit Questions Form Page -->
<div class="container-fluid cm_page_content">
	<div class="container">
		<div class="row">

			<div class="col-sm-12 col-md-12">
				<div class="post_content">

					<?php $user = wp_get_current_user();
					if ( in_array( 'um_teacher', (array) $user->roles ) || in_array( 'administrator', (array) $user->roles ) ) { ?>

						<div class="pagehead">
							<h1><?php echo get_the_title(); ?></h1>
						</div>

						<div class="fp_publish">
							<div class="row">
								<div class="col-md-12 col-lg-8">
									<?php while ( have_posts() ) : the_post(); ?>
										<?php acf_form(array(
											'post_id'       => 'new_post',
											'post_title'	=> true,
											'post_content'	=> false,
											'new_post'      => array(
												'post_type'     => 'submit_question',
												'post_status'   => 'publish'
											),
											'submit_value'  => __("Submit Question", 'acf'),
											'updated_message' => __("Question submitted successfully", 'acf')
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