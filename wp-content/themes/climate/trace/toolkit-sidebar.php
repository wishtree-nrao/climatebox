<div class="sidebar_left">
	<div class="accordion" id="AccordionToolkit">
		<div class="card">
			<div class="card-header" id="Toolkit_Textbook">
				<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTextbook" aria-expanded="false" aria-controls="collapseTextbook">
					Textbook
				</button>
			</div>

			<div id="collapseTextbook" class="collapse" aria-labelledby="Toolkit_Textbook" data-parent="#AccordionToolkit">
				<div class="card-body">
					<?php if ( is_active_sidebar( 'toolkit_textbox_sidebar' )) : ?>
						<?php dynamic_sidebar( 'toolkit_textbox_sidebar' ); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>


		<div class="card">
			<div class="card-header" id="Toolkit_Quiz">
				<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseQuiz" aria-expanded="false" aria-controls="collapseQuiz">
					Quiz 
				</button>
			</div>
			<div id="collapseQuiz" class="collapse" aria-labelledby="Toolkit_Quiz" data-parent="#AccordionToolkit">
				<div class="card-body">
					<?php if ( is_active_sidebar( 'toolkit_quiz_sidebar' )) : ?>
						<?php dynamic_sidebar( 'toolkit_quiz_sidebar' ); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>


		<div class="card">
			<div class="card-header" id="Toolkit_MP">
				<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseMP" aria-expanded="false" aria-controls="collapseMP">
					Map and Posters
				</button>
			</div>
			<div id="collapseMP" class="collapse" aria-labelledby="Toolkit_MP" data-parent="#AccordionToolkit">
				<div class="card-body">
					<?php if ( is_active_sidebar( 'toolkit_mp_sidebar' )) : ?>
						<?php dynamic_sidebar( 'toolkit_mp_sidebar' ); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

	<a href="<?php echo get_site_url(); ?>/toolkit/map-and-posters/" class="btn btn-primary">Map and Posters</a>
	
</div>