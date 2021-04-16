<div class="toolkit_docs notranslate">

	<h3 class="title"><?php pll_e('Download Climate Box Materials'); ?></h3>

	<select id="SelectDocLang" class="form-control">
		<?php
		$field = get_field_object('toolkit_doc_lang', 'option');
		if( $field['choices'] ): $id = 0; ?>
			<?php foreach( $field['choices'] as $value => $label ): $id++; ?>
				<option value="option<?php echo $id; ?>"><?php echo $label; ?></option>
			<?php endforeach; ?>
		<?php endif; ?>
	</select>

	<div class="lang_docs_loading">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/loader.gif" alt="loader" />
		<p><?php pll_e('Loading'); ?></p>
	</div>

	<div class="lang_docs">
		
		<div id="option1" class="lang_docs_view">
			<?php if( have_rows('docs_for_arabic', 'option') ): while ( have_rows('docs_for_arabic', 'option') ) : the_row(); ?>
				<?php $file = get_sub_field('doc_arabic', 'option'); ?>
				<?php if ( $file ): ?>
					<div class="file">
						<a target="_blank" href="<?php echo $file['url']; ?>" title="<?php echo $file['title']; ?>"><?php echo $file['title']; ?></a>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php else : ?>
				<p class="filenotfound"><i class="far fa-times-circle"></i> File not found for Arabic!</p>
			<?php endif; ?>
		</div>

		<div id="option2" class="lang_docs_view">
			<?php if( have_rows('docs_for_armenian', 'option') ): while ( have_rows('docs_for_armenian', 'option') ) : the_row(); ?>
				<?php $file = get_sub_field('doc_armenian', 'option'); ?>
				<?php if ( $file ): ?>
					<div class="file">
						<a target="_blank" href="<?php echo $file['url']; ?>" title="<?php echo $file['title']; ?>"><?php echo $file['title']; ?></a>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php else : ?>
				<p class="filenotfound"><i class="far fa-times-circle"></i> File not found for Armenian!</p>
			<?php endif; ?>
		</div>

		<div id="option3" class="lang_docs_view">
			<?php if( have_rows('docs_for_belarussian', 'option') ): while ( have_rows('docs_for_belarussian', 'option') ) : the_row(); ?>
				<?php $file = get_sub_field('doc_belarussian', 'option'); ?>
				<?php if ( $file ): ?>
					<div class="file">
						<a target="_blank" href="<?php echo $file['url']; ?>" title="<?php echo $file['title']; ?>"><?php echo $file['title']; ?></a>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php else : ?>
				<p class="filenotfound"><i class="far fa-times-circle"></i> File not found for Belarussian!</p>
			<?php endif; ?>
		</div>

		<div id="option4" class="lang_docs_view">
			 <?php if( have_rows('docs_for_english', 'option') ): while ( have_rows('docs_for_english', 'option') ) : the_row(); ?>
				<?php $file = get_sub_field('doc_english', 'option'); ?>
				<?php if ( $file ): ?>
					<div class="file">
						<a target="_blank" href="<?php echo $file['url']; ?>" title="<?php echo $file['title']; ?>"><?php echo $file['title']; ?></a>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php else : ?>
				<p class="filenotfound"><i class="far fa-times-circle"></i> File not found for English!</p>
			<?php endif; ?>
		</div>

		<div id="option5" class="lang_docs_view">
			 <?php if( have_rows('docs_for_french', 'option') ): while ( have_rows('docs_for_french', 'option') ) : the_row(); ?>
				<?php $file = get_sub_field('doc_french', 'option'); ?>
				<?php if ( $file ): ?>
					<div class="file">
						<a target="_blank" href="<?php echo $file['url']; ?>" title="<?php echo $file['title']; ?>"><?php echo $file['title']; ?></a>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php else : ?>
				<p class="filenotfound"><i class="far fa-times-circle"></i> File not found for French!</p>
			<?php endif; ?>
		</div>

		

		<div id="option6" class="lang_docs_view">
			<?php if( have_rows('docs_for_kazakh', 'option') ): while ( have_rows('docs_for_kazakh', 'option') ) : the_row(); ?>
				<?php $file = get_sub_field('doc_kazakh', 'option'); ?>
				<?php if ( $file ): ?>
					<div class="file">
						<a target="_blank" href="<?php echo $file['url']; ?>" title="<?php echo $file['title']; ?>"><?php echo $file['title']; ?></a>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php else : ?>
				<p class="filenotfound"><i class="far fa-times-circle"></i> File not found for Kazakh!</p>
			<?php endif; ?>
		</div>

		<div id="option7" class="lang_docs_view">
			<?php if( have_rows('docs_for_kyrgyz', 'option') ): while ( have_rows('docs_for_kyrgyz', 'option') ) : the_row(); ?>
				<?php $file = get_sub_field('doc_kyrgyz', 'option'); ?>
				<?php if ( $file ): ?>
					<div class="file">
						<a target="_blank" href="<?php echo $file['url']; ?>" title="<?php echo $file['title']; ?>"><?php echo $file['title']; ?></a>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php else : ?>
				<p class="filenotfound"><i class="far fa-times-circle"></i> File not found for Kyrgyz!</p>
			<?php endif; ?>
		</div>

		<div id="option8" class="lang_docs_view">
			<?php if( have_rows('docs_for_romanian', 'option') ): while ( have_rows('docs_for_romanian', 'option') ) : the_row(); ?>
				<?php $file = get_sub_field('doc_romanian', 'option'); ?>
				<?php if ( $file ): ?>
					<div class="file">
						<a target="_blank" href="<?php echo $file['url']; ?>" title="<?php echo $file['title']; ?>"><?php echo $file['title']; ?></a>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php else : ?>
				<p class="filenotfound"><i class="far fa-times-circle"></i> File not found for Romanian!</p>
			<?php endif; ?>
		</div>

		<div id="option9" class="lang_docs_view">
			<?php if( have_rows('docs_for_russian', 'option') ): while ( have_rows('docs_for_russian', 'option') ) : the_row(); ?>
				<?php $file = get_sub_field('doc_russian', 'option'); ?>
				<?php if ( $file ): ?>
					<div class="file">
						<a target="_blank" href="<?php echo $file['url']; ?>" title="<?php echo $file['title']; ?>"><?php echo $file['title']; ?></a>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php else : ?>
				<p class="filenotfound"><i class="far fa-times-circle"></i> File not found for Russian!</p>
			<?php endif; ?>
		</div>

		<div id="option10" class="lang_docs_view">
			<?php if( have_rows('docs_for_spanish', 'option') ): while ( have_rows('docs_for_spanish', 'option') ) : the_row(); ?>
				<?php $file = get_sub_field('doc_spanish', 'option'); ?>
				<?php if ( $file ): ?>
					<div class="file">
						<a target="_blank" href="<?php echo $file['url']; ?>" title="<?php echo $file['title']; ?>"><?php echo $file['title']; ?></a>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php else : ?>
				<p class="filenotfound"><i class="far fa-times-circle"></i> File not found for Spanish!</p>
			<?php endif; ?>
		</div>

		<div id="option11" class="lang_docs_view">
			<?php if( have_rows('docs_for_tajik', 'option') ): while ( have_rows('docs_for_tajik', 'option') ) : the_row(); ?>
				<?php $file = get_sub_field('doc_tajik', 'option'); ?>
				<?php if ( $file ): ?>
					<div class="file">
						<a target="_blank" href="<?php echo $file['url']; ?>" title="<?php echo $file['title']; ?>"><?php echo $file['title']; ?></a>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php else : ?>
				<p class="filenotfound"><i class="far fa-times-circle"></i> File not found for Tajik!</p>
			<?php endif; ?>
		</div>

		

		<div id="option12" class="lang_docs_view">
			<?php if( have_rows('docs_for_turkmen', 'option') ): while ( have_rows('docs_for_turkmen', 'option') ) : the_row(); ?>
				<?php $file = get_sub_field('doc_turkmen', 'option'); ?>
				<?php if ( $file ): ?>
					<div class="file">
						<a target="_blank" href="<?php echo $file['url']; ?>" title="<?php echo $file['title']; ?>"><?php echo $file['title']; ?></a>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php else : ?>
				<p class="filenotfound"><i class="far fa-times-circle"></i> File not found for Turkmen!</p>
			<?php endif; ?>
		</div>

		<div id="option13" class="lang_docs_view">
			<?php if( have_rows('docs_for_uzbek', 'option') ): while ( have_rows('docs_for_uzbek', 'option') ) : the_row(); ?>
				<?php $file = get_sub_field('doc_uzbek', 'option'); ?>
				<?php if ( $file ): ?>
					<div class="file">
						<a target="_blank" href="<?php echo $file['url']; ?>" title="<?php echo $file['title']; ?>"><?php echo $file['title']; ?></a>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php else : ?>
				<p class="filenotfound"><i class="far fa-times-circle"></i> File not found for Uzbek!</p>
			<?php endif; ?>
		</div>


		<?php /*
		<div id="option6" class="lang_docs_view">
			<?php if( have_rows('docs_for_serbian', 'option') ): while ( have_rows('docs_for_serbian', 'option') ) : the_row(); ?>
				<?php $file = get_sub_field('doc_serbian', 'option'); ?>
				<?php if ( $file ): ?>
					<div class="file">
						<a target="_blank" href="<?php echo $file['url']; ?>" title="<?php echo $file['title']; ?>"><?php echo $file['title']; ?></a>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php else : ?>
				<p class="filenotfound"><i class="far fa-times-circle"></i> File not found for Serbian!</p>
			<?php endif; ?>
		</div>
		*/ ?>

		<?php /*
		<div id="option13" class="lang_docs_view">
			<?php if( have_rows('docs_for_karakalpak', 'option') ): while ( have_rows('docs_for_karakalpak', 'option') ) : the_row(); ?>
				<?php $file = get_sub_field('doc_karakalpak', 'option'); ?>
				<?php if ( $file ): ?>
					<div class="file">
						<a target="_blank" href="<?php echo $file['url']; ?>" title="<?php echo $file['title']; ?>"><?php echo $file['title']; ?></a>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php else : ?>
				<p class="filenotfound"><i class="far fa-times-circle"></i> File not found for Karakalpak!</p>
			<?php endif; ?>
		</div>
		*/ ?>

	</div><!-- lang_docs -->

</div>


<script type="text/javascript">

// jQuery Ready
jQuery(document).ready(function($){

	jQuery('.lang_docs').show();
	jQuery('.lang_docs_loading').hide();

	jQuery("#SelectDocLang")[0].selectedIndex = 0;

	jQuery(".lang_docs_view").hide();

//unhides first option content
jQuery("#option1").show();

//listen to dropdown for change
jQuery("#SelectDocLang").change(function(){
//rehide content on change
jQuery('.lang_docs_view').hide();
//unhides current item
jQuery('#'+jQuery(this).val()).show();
});


}); // END jQuery Ready



</script>
