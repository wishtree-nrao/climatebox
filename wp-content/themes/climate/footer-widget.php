<?php

if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) {?>
        <div id="footer-widget" class="row m-0 <?php if(!is_theme_preset_active()){ echo 'bg-light'; } ?>">
            <div class="container footer_top">
                <div class="row">
                    <?php if ( is_active_sidebar( 'footer_top_left' )) : ?>
                        <div class="col-12 col-md-8"><?php dynamic_sidebar( 'footer_top_left' ); ?></div>
                    <?php endif; ?>
                     <?php if ( is_active_sidebar( 'footer_top_right' )) : ?>
                        <div class="col-12 col-md-4"><?php dynamic_sidebar( 'footer_top_right' ); ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <?php if ( is_active_sidebar( 'footer-1' )) : ?>
                        <div class="col-12 col-md-4"><?php dynamic_sidebar( 'footer-1' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-2' )) : ?>
                        <div class="col-12 col-md-4"><?php dynamic_sidebar( 'footer-2' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-3' )) : ?>
                        <div class="col-12 col-md-4"><?php dynamic_sidebar( 'footer-3' ); ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

<?php }