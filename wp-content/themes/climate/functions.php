<?php

// Remove Link ?=ver ///////////////////////////////////////

function webbkod_remove_version() {
	return '';
}
add_filter('the_generator', 'webbkod_remove_version');

remove_action('wp_head', 'wp_generator');


// Upload File Size Media ///////////////////////////////////////

@ini_set( 'upload_max_size' , '30M' );
@ini_set( 'post_max_size', '30M');
@ini_set( 'max_execution_time', '300' );


// Polylang String ///////////////////////////////////////
add_action('init', function() {

  pll_register_string('climate', 'All rights reserved.'); // Footer File
  pll_register_string('climate', 'Question'); // Footer File
  pll_register_string('climate', 'View On'); // Footer File
  pll_register_string('climate', 'Logout'); // Header File
  pll_register_string('climate', 'My Account'); // Header File
  pll_register_string('climate', 'Login'); // Header File

  pll_register_string('climate', 'Download Climate Box Materials'); // toolkit doc file
  pll_register_string('climate', 'Loading'); // toolkit doc file

  pll_register_string('climate', 'Learning Materials'); // For Tachers
  pll_register_string('climate', 'Video Lessons and Webinars'); // For Tachers
  pll_register_string('climate', 'Discussion Material'); // For Tachers

  pll_register_string('climate', 'News'); // Explore
  pll_register_string('climate', 'Stories'); // Explore
  pll_register_string('climate', 'Gallery'); // Explore
  pll_register_string('climate', 'Archives'); // Explore

  pll_register_string('climate', 'There are no Video Lessons and Webinars'); // Temp - Video and Lessons File
  pll_register_string('climate', 'There are no Learning Materials'); // Temp - Teachers File
  pll_register_string('climate', 'Search by Language | Category | Key Topics'); // Temp - Teachers File
  pll_register_string('climate', 'There are no Discussion Material'); // Temp - Discussion Material File

  pll_register_string('climate', 'View Topic'); // Temp - Discussion Topic File
  pll_register_string('climate', 'Submitted Questions'); // Temp - Discussion Topic File
  pll_register_string('climate', 'Submit Question'); // Temp - Discussion Topic File

  pll_register_string('climate', 'Search by keywords'); // Temp - Textbook
  pll_register_string('climate', 'There are no textbooks'); // Temp - Textbook
  pll_register_string('climate', 'Back to the Textbook main page'); // Single - Textbook
  pll_register_string('climate', 'Parts'); // Single - Textbook
  pll_register_string('climate', 'More Quizzes'); // Single - Quiz

  //pll_register_string('climate', 'Next Quiz'); // Function File

  pll_register_string('climate', 'There are no news'); // Temp - Explore
  pll_register_string('climate', 'There are no stories'); // Temp - Stories
  pll_register_string('climate', 'There are no gallery'); // Temp - Gallery

  pll_register_string('climate', 'There are no contest'); // Temp - contest
  pll_register_string('climate', 'The Contest is'); // Temp - contest
  pll_register_string('climate', 'Open'); // Temp - contest
  pll_register_string('climate', 'Closed'); // Temp - contest
  pll_register_string('climate', 'Submitted Projects'); // Temp - contest
  pll_register_string('climate', 'SUBMIT PROJECT'); // Single contest
  pll_register_string('climate', 'Published:'); // Temp - contest
  pll_register_string('climate', 'Due Date:'); // Temp - contest
  pll_register_string('climate', 'Rules'); // Temp - contest

  pll_register_string('climate', 'See Contest List'); // Temp - Projects
  pll_register_string('climate', 'There are no projects submitted'); // Temp - Projects
  pll_register_string('climate', 'Show More'); // Temp - Projects
  pll_register_string('climate', 'Show Less'); // Temp - Projects
  pll_register_string('climate', 'Name of your school'); // Single - Projects
  pll_register_string('climate', 'Name of the student'); // Single - Projects
  pll_register_string('climate', 'Contest'); // Single - Projects
  pll_register_string('climate', 'Project Category'); // Single - Projects
  pll_register_string('climate', 'Project Description'); // Single - Projects
  pll_register_string('climate', 'Project Files'); // Single - Projects
  pll_register_string('climate', 'File not found!'); // Single - Projects

  pll_register_string('climate', 'Submitted Questions By Teachers'); // Temp - Questions
  pll_register_string('climate', 'Submitted date'); // Temp - Questions
  pll_register_string('climate', 'Submitted By'); // Temp - Questions
  pll_register_string('climate', 'There are no questions submitted'); // Temp - Questions

  pll_register_string('climate', 'Read More'); // Common in File
  pll_register_string('climate', 'Search content here...'); // Common in File
  pll_register_string('climate', 'Search'); // Common in File
  pll_register_string('climate', 'View'); // Common in File
  pll_register_string('climate', 'Read More'); // Common in File
  pll_register_string('climate', 'Published Date:'); // Common in File
  pll_register_string('climate', 'There are no data'); // Common in File
  pll_register_string('climate', 'Attachments'); // Common in File
  pll_register_string('climate', 'Category:'); // Common in File
  pll_register_string('climate', 'Sorry, but you do not have permission to view this content.'); // Common in File
   pll_register_string('climate', 'Please login to the portal to see page details.');


  pll_register_string('climate', 'Oops!'); // 404
  pll_register_string('climate', 'This is not the page you are looking for.'); // 404
  pll_register_string('climate', 'Wanna try something else?'); // 404
  pll_register_string('climate', 'The page you requested cannot be found'); // 404
  pll_register_string('climate', 'This might be because:'); // 404
  pll_register_string('climate', 'The Web page you are attempting to view may not exist or may have moved.'); // 404
  pll_register_string('climate', 'You may have reached this page from an incorrect link. Try double checking the Web address.'); // 404

  pll_register_string('climate', 'Error 404'); // Breadcrumb
  pll_register_string('climate', 'Home'); // Breadcrumb
  pll_register_string('climate', 'Search Results for: ');

  pll_register_string('climate', 'Arabic');
  pll_register_string('climate', 'Armenian');
  pll_register_string('climate', 'Belarussian');
  pll_register_string('climate', 'English');
  pll_register_string('climate', 'French');
  pll_register_string('climate', 'Kazakh');
  pll_register_string('climate', 'Kyrgyz');
  pll_register_string('climate', 'Romanian');
  pll_register_string('climate', 'Russian');
  pll_register_string('climate', 'Spanish');
  pll_register_string('climate', 'Tajik');
  pll_register_string('climate', 'Turkmen');
  pll_register_string('climate', 'Uzbek');

  pll_register_string('climate', 'Prev');
  pll_register_string('climate', 'Next');


  //pll_register_string('climate', 'Languages'); // Function File

});


// ACF Strings for Polylang ///////////////////////////////////////
add_action('init', function () {
  foreach (acf_get_field_groups() as $group) {
    $fields = acf_get_fields($group['ID']);
    if (is_array($fields) && count($fields)) {
      foreach ($fields as &$field) {
        if($field['type'] == 'message'){
          pll_register_string('form_field_group'.$group['ID'].'_label_'.$field['field_6023c4b7b6338'], $field['message'], 'acf_form_fields');
        }

        if($field['type'] == 'repeater'){
          pll_register_string('form_field_group'.$group['ID'].'_label_'.$field['field_602f8db3a643c'], $field['button_label'], 'acf_form_fields');
          pll_register_string('climate', $field['sub_fields'][0]['label'], 'acf_form_fields');  

        }
        pll_register_string('form_field_group'.$group['ID'].'_label_'.$field['name'], $field['label'], 'acf_form_fields');
      }
    }
  }
});

add_filter('acf/prepare_field', function ($field) {
  if (!is_admin()) {
    if($field['type'] == 'message'){
         $field['message'] = pll__( $field['message']);
    }
    if($field['type'] == 'repeater'){
         $field['button_label'] = pll__( $field['button_label']);
         $field['sub_fields'][0]['label'] = pll__( $field['sub_fields'][0]['label']);
    }
    $field['label'] = pll__($field['label']);
  }
  return $field;
}, 10, 1);



// ACF Toolkit Docs Page ///////////////////////////////////////
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
  if( function_exists('acf_add_options_page') ) {

        // Register options page.
    $parent = acf_add_options_page(array(
      'page_title'    => __('Theme Options'),
      'menu_title'    => __('Theme Options'),
      'updated_message' => __("Theme Post Updated", 'acf'),
      'menu_slug'     => 'theme-general-settings',
      'capability'    => 'edit_climate_theme',
      'position'      => '20',
      'icon_url'      => 'dashicons-admin-site',
      'redirect'      => false
    ));

    $child_1 = acf_add_options_sub_page(array(
      'page_title'  => __('Climate Box Toolkit Documents'),
      'menu_title'  => __('Toolkit Documents'),
      'updated_message' => __("Theme Post Updated", 'acf'),
      'parent_slug' => $parent['menu_slug'],
      'capability'    => 'edit_toolkit_docs',
    ));

  }
}

// Custom JS in WP-ADMIN ///////////////////////////////////////
function themeoption_js_admin() { 
  ?>

  <script>
   // $(".theme-options_page_acf-options-url-redirection label:contains(EN)").closest( ".acf-field" ).css("background-color", "#fff9e6");
  </script>

  <?php 
}
add_action('wp_print_scripts', 'themeoption_js_admin');




// Custom Excerpt ///////////////////////////////////////
function get_excerpt(){
    $excerpt = get_the_content();
    $excerpt = preg_replace(" ([.*?])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, 50);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
    $excerpt = $excerpt.'...';
    return $excerpt;
}


// Get User Role ///////////////////////////////////////
function get_user_role() {
    global $current_user;
    $user_roles = $current_user->roles;
    $user_role = array_shift($user_roles);
    return $user_role;
}



// User Role Remove Menues ///////////////////////////////////////
add_action( 'admin_menu', 'remove_menus' );
function remove_menus(){

    // Contest Role
  $user = wp_get_current_user();
  if ( in_array( 'um_contest-admin', (array) $user->roles ) ) {
    remove_menu_page( 'edit-comments.php' );
    remove_menu_page( 'edit.php?post_type=rl_gallery' );
  }

  // Moderator Role
  if ( in_array( 'um_moderator', (array) $user->roles ) ) {
    remove_menu_page( 'edit.php?post_type=w4pl' );
    remove_menu_page( 'edit.php?post_type=rl_gallery' );
  }

  // Toolkit Role
  if ( in_array( 'um_toolkit-admin', (array) $user->roles ) ) {
    remove_menu_page( 'wpcf7' );
  }

}


if ( wp_is_mobile() ) {
  add_filter( 'show_admin_bar', '__return_false' );
}



// User Role Restrict Access ///////////////////////////////////////
add_action( 'admin_init', function () {


// contest-admin User
 $user = wp_get_current_user();
 if ( in_array( 'um_contest-admin', (array) $user->roles ) ) {
    global $pagenow;

    if ( $pagenow == 'edit-comments.php' ) {
        wp_redirect( admin_url() );
        exit;
    }
}


});

 

// Custom CSS in WP-ADMIN ///////////////////////////////////////
add_action('admin_head', 'custom_cssadmin');

    function custom_cssadmin() {

    echo '<style>

        /* Common Admin CSS Change */
      .notice.notice-error.jquery-migrate-dashboard-notice,
      .notice.notice-warning.yoast-notification
      {display:none;}

      /* Edditor Controls */
      .mce-tinymce .mce-container .mce-widget.mce-btn[aria-label="Add Quiz"]{display:none;}
      .mce-tinymce .mce-container .mce-widget.mce-btn[aria-label="Select a part of text and ask readers for feedback (inline commenting)"]
      {display:none;}

      .wp-editor-tools #forminator-generate-shortcode{display:none;}
      .wp-editor-tools #rl-insert-modal-gallery-button{display:none;}

      /*Quiz Maker*/
      /*.ays-quiz-tabs-wrapper .pro_features{display: none;}*/

      </style>';


    // um_contest-admin User CSS
    $user = wp_get_current_user();
    if ( in_array( 'um_contest-admin', (array) $user->roles ) ) {

    echo '<style>

        /* Common Admin CSS Change */
        ul#adminmenu li#menu-comments, ul#adminmenu li#menu-posts-w4pl, ul#adminmenu li#menu-posts-w4pl,
        ul#adminmenu li#toplevel_page_wpcf7, ul#adminmenu li#toplevel_page_vc-welcome,
        ul#adminmenu li#menu-tools
        {display:none;}

        #wpadminbar ul li#wp-admin-bar-comments, #wpadminbar ul li#wp-admin-bar-new-content
        {display:none;}

        .yoast-notification{display:none;}

      </style>';
    }

    // um_toolkit-admin User CSS
    $user = wp_get_current_user();
    if ( in_array( 'um_toolkit-admin', (array) $user->roles ) ) {

      echo '<style>

          /* Admin CSS Change */ 
          .ays-quiz-category-form .only_pro, .ays-quiz-tab-content .only_pro{display: none;}

          .ays-quiz-category-form .ays-quiz-tab-content .add-quiz-image,
          .ays-quiz-tab-content .add-question-image,
          .ays-quiz-category-form .ays-quiz-tab-content #wp-ays-quiz-description-wrap
          {display: none;}

          .ays-quiz-tab-content .ays-add-answer{display:none;}
          .ays-quiz-tab-content a.ays-delete-answer{pointer-events: none;opacity: 0.2;}

          body[class*="questions"] .select2-container .select2-dropdown .select2-results ul li{display:none;}

          .ays-notice-banner{display:none;}

          /*Hide Unused Tab*/
          .ays-top-tab-wrapper a[data-tab="tab2"], .ays-top-tab-wrapper a[data-tab="tab3"],
          .ays-top-tab-wrapper a[data-tab="tab5"],
          .ays-top-tab-wrapper a[data-tab="tab6"], .ays-top-tab-wrapper a[data-tab="tab7"],
          .ays-top-tab-wrapper a[data-tab="tab8"], .ays-top-tab-wrapper a[data-tab="tab9"]
          {display:none;}

          #ays-question-form .nav-tab-wrapper a[data-tab="tab2"]
          {display:none;}

          #adminmenu li.menu-top#toplevel_page_quiz-maker ul.wp-submenu li{display:none;}

          #adminmenu li.menu-top#toplevel_page_quiz-maker ul.wp-submenu li:nth-child(2),
          #adminmenu li.menu-top#toplevel_page_quiz-maker ul.wp-submenu li:nth-child(3),
          #adminmenu li.menu-top#toplevel_page_quiz-maker ul.wp-submenu li:nth-child(4),
          #adminmenu li.menu-top#toplevel_page_quiz-maker ul.wp-submenu li:nth-child(5)
          {display:block;}

        </style>';
    }



}




// Change Sender Name for Email ///////////////////////////////////////

// function wpb_sender_name( $original_email_from ) {

// $websitename = get_bloginfo();
// return $websitename;

// }
// add_filter( 'wp_mail_from', 'wpb_sender_email' );
// add_filter( 'wp_mail_from_name', 'wpb_sender_name' );





// New CPT Mail to Teachers Role ///////////////////////////////////////
add_action( 'transition_post_status', 'send_mails_on_publish_topic', 10, 3 );

function send_mails_on_publish_topic( $new_status, $old_status, $post )
{
    if ( 'publish' !== $new_status or 'publish' === $old_status
        or 'discussion_topic' !== get_post_type( $post ) )
        return;

    $from_email     =   'wordpress@' . $sitename;
    $subscribers    =   get_users( array ( 'role' => 'um_teacher' ) );
    $emails         =   array ();
    $subject        =   'New Discussion Topic Created : ' . get_bloginfo();
    $fromName       =   get_bloginfo();

    $link           =   get_permalink( $post );
    $post_name      =   get_the_title( $post );


    $html = '<body bgcolor="#f2f2f2" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">

    <center style="background-color:#f2f2f2;padding: 20px;font-family: Arial, Helvetica, sans-serif;">

        <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" style="table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;font-family: Arial, Helvetica, sans-serif;">
            <tr>
                <td align="center" valign="top">
                    <table bgcolor="#FFFFFF"  border="0" cellpadding="0" cellspacing="0" width="650" style="border-top: 3px solid #0468B1;border-bottom: 3px solid #0468B1;">
                        <tr>
                            <td align="center" valign="top">
                                <table border="0" cellpadding="20" cellspacing="0" width="100%" style="color:#000000;border-bottom: 1px solid #ccc;" bgcolor="#ffffff">
                                    <tr>
                                        <td align="center" valign="top">
                                            <h3 style="font-size: 26px;font-weight: 500;margin: 0;">'. $fromName .'</h3>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td align="center" valign="top">
                                <table border="0" cellpadding="20" cellspacing="0" width="100%">
                                    <tr>
                                        <td valign="top">
                                            <h3 style="background: #eee;color: #444;padding: 12px 15px;border-radius: 3px;font-weight: bold;font-size: 16px;margin: 0 0 15px;">
                                                New Discussion Topic Created
                                            </h3>
                                            <p style="font-size:15px;margin-bottom:0;margin-top:10px;color:#888888;line-height: 1.4;">
                                                Dear All,
                                            </p>
                                            <p style="font-size:15px;margin-bottom:0;margin-top:10px;color:#888888;line-height: 1.4;">
                                                We would like to inform you that the new topic is now open for the discussion. You are welcome to participate in the discussions.
                                            </p>

                                            <p style="font-size:15px;margin-bottom:0;margin-top:10px;color:#888888;line-height: 1.4;">
                                                Kindly <a href="'. $link .'" target="_blank" style="text-decoration: none;color: #04c;">click here</a> for more details about the topic.<br />
                                            </p>

                                            <p style="font-size:15px;margin-bottom:0;margin-top:10px;color:#888888;line-height: 1.4;">
                                                Thanks and Regards, <br />
                                                The '. $fromName .' Team
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>

                    <table bgcolor="#f2f2f2" border="0" cellpadding="0" cellspacing="0" width="650">
                        <tr>
                            <td align="center" valign="top">
                                <table border="0" cellpadding="20" cellspacing="0" width="100%">
                                    <tr>
                                        <td valign="top" bgcolor="#f2f2f2" align="center">
                                            <p style="font-size:14px;color:#828282;line-height:140%;margin: 0 0 5px;">&#169; '. $fromName .' | All&nbsp;rights&nbsp;reserved.</p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </center>
</body>';


    $headers[] ="Content-Type: text/html";

    foreach ( $subscribers as $subscriber )
    {
        $emails= $subscriber->user_email;
        wp_mail($emails, $subject, $html, $headers);
    }
    
}


// New CPT Mail on Q. Submit ///////////////////////////////////////
add_action( 'transition_post_status', 'send_mails_on_addquestion', 10, 3 );

function send_mails_on_addquestion( $new_status, $old_status, $post )
{
  if ( 'publish' !== $new_status or 'publish' === $old_status
    or 'submit_question' !== get_post_type( $post ) )
    return;

  $from_email     =   'wordpress@' . $sitename;
  $subscribers    =   get_users( array ( 'role' => 'um_moderator' ) );
  $emails         =   array ();
  $subject        =   'Added A Question : ' . get_bloginfo();
  $fromName       =   get_bloginfo();
  $current_user = wp_get_current_user();

  $link          =   get_permalink( $post );
  $post_name      =   get_the_title( $post );
  $author         = 	$current_user->display_name;  // get_the_author( $post );
  $loginurl       =   get_site_url();
  //$loginurl       =   get_site_url().'/teachers-discussion/submitted-questions/';
  //$logo           =   get_stylesheet_directory_uri() . '/img/undp_logo_blue.png';
  //$html = get_template_part( 'email_disc_topic' );


    $html = '<body bgcolor="#f2f2f2" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">

    <center style="background-color:#f2f2f2;padding: 20px;font-family: Arial, Helvetica, sans-serif;">

        <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" style="table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;font-family: Arial, Helvetica, sans-serif;">
            <tr>
                <td align="center" valign="top">
                    <table bgcolor="#FFFFFF"  border="0" cellpadding="0" cellspacing="0" width="650" style="border-top: 3px solid #0468B1;border-bottom: 3px solid #0468B1;">
                        <tr>
                            <td align="center" valign="top">
                                <table border="0" cellpadding="20" cellspacing="0" width="100%" style="color:#000000;border-bottom: 1px solid #ccc;" bgcolor="#ffffff">
                                    <tr>
                                        <td align="center" valign="top">
                                            <h3 style="font-size: 26px;font-weight: 500;margin: 0;">'. $fromName .'</h3>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td align="center" valign="top">
                                <table border="0" cellpadding="20" cellspacing="0" width="100%">
                                    <tr>
                                        <td valign="top">
                                            <h3 style="background: #eee;color: #444;padding: 12px 15px;border-radius: 3px;font-weight: bold;font-size: 16px;margin: 0 0 15px;">
                                                Added A Question
                                            </h3>
                                            <p style="font-size:15px;margin-bottom:0;margin-top:10px;color:#888888;line-height: 1.4;">
                                                Dear Moderator,
                                            </p>
                                            <p style="font-size:15px;margin-bottom:0;margin-top:10px;color:#888888;line-height: 1.4;">
                                                We would like to inform you that a new question has been submitted by '. $author .' as below:
                                            </p>

                                            <p style="font-size:15px;margin-bottom:0;margin-top:10px;line-height: 1.4;color: #666;">
                                                <strong style="color:#333;">Requested Question: </strong> '. $post_name .'
                                            </p>

                                            <p style="font-size:15px;margin-bottom:0;margin-top:10px;color:#888888;line-height: 1.4;">
                                                Kindly <a href="'. $loginurl .'/login" target="_blank" style="text-decoration: none;color: #04c;">click here</a> to login to the portal for more details.<br />
                                            </p>

                                            <p style="font-size:15px;margin-bottom:0;margin-top:10px;color:#888888;line-height: 1.4;">
                                                Thanks and Regards, <br />
                                                The '. $fromName .' Team
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>

                    <table bgcolor="#f2f2f2" border="0" cellpadding="0" cellspacing="0" width="650">
                        <tr>
                            <td align="center" valign="top">
                                <table border="0" cellpadding="20" cellspacing="0" width="100%">
                                    <tr>
                                        <td valign="top" bgcolor="#f2f2f2" align="center">
                                            <p style="font-size:14px;color:#828282;line-height:140%;margin: 0 0 5px;">&#169; '. $fromName .' | All&nbsp;rights&nbsp;reserved.</p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </center>
</body>';


    $headers[] ="Content-Type: text/html";

    foreach ( $subscribers as $subscriber )
    {
        $emails= $subscriber->user_email;
        wp_mail($emails, $subject, $html, $headers);
    }
    
}


// Next Post Link ///////////////////////////////////////
function next_shortcode($atts) {

  return '<a href="/?random=1" class="next_quiz">'. __("Next Quiz","acf") .' <i class="fas fa-chevron-right"></i></a>'; 

}

add_shortcode( 'nextpost_link', 'next_shortcode' );


add_action('init','random_post');
function random_post() {
 global $wp;
 $wp->add_query_var('random');
 add_rewrite_rule('random/?$', 'index.php?random=1', 'top');
}

add_action('template_redirect','random_template');
function random_template() {
 if (get_query_var('random') == 1) {
  $current_page_ids = array( get_the_ID() );
  $args = array(
    'post_type'   => 'quiz_listing',
    'orderby'      => 'date',
    'order'     => 'ASC',
    'numberposts'      => 1,
    'post__not_in'      => $current_page_ids
  );
  $posts = get_posts( $args );
  foreach($posts as $post) {
   $link = get_permalink($post);
 }
 wp_redirect($link,307);
 exit;
}
}



// Submit Question Page ///////////////////////////////////////
add_filter( 'post_type_link', 'na_remove_slug', 10, 3 );
function na_remove_slug( $post_link, $post, $leavename ) {
    if ( 'submit_question' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }
    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
    return $post_link;
}

function wd_post_title_acf_name( $field ) {

     if( is_page_template( 'form_submit_question.php' ) ) {
          $field['label'] = __('Main Question Statement', 'acf');
     }

     if( is_page_template( 'form_projects.php' ) ) {
          $field['label'] = __('Project Title', 'acf');
     }

     return $field;
}
add_filter('acf/load_field/name=_post_title', 'wd_post_title_acf_name');



// body_class for User Role ///////////////////////////////////////
add_filter('body_class', function($classes) {
    global $current_user;
    
    foreach ($current_user->roles as $user_role) {
        $classes[] = 'role-'. $user_role;
    }

    return $classes;
});

add_filter('admin_body_class', function($classes) {
  $user = wp_get_current_user();
  foreach ($user->roles as $user_role) {
    $classes .= ' ' . 'role-' . $user_role . ' ';
  }
  return $classes;
});


 


// ACF Custom Query to Remove Draft Post from Post Object [ps_select_contest] ///////////////////////////////////////
function relationship_options_filter($options, $field, $the_post) {
$options['post_status'] = array('publish');
return $options;
}
add_filter('acf/fields/post_object/query/name=ps_select_contest', 'relationship_options_filter', 10, 3);




// Custom UM Validation ///////////////////////////////////////

function um_custom_validate_user_email( $key, $array, $args ) {

    $args[ $key ] = trim( $args[ $key ] );

    if ( in_array( $key, array( 'user_email' ) ) ) {

        if ( ! isset( $args['user_id'] ) ){
            $args['user_id'] = um_get_requested_user();
        }

        $email_exists =  email_exists( $args[ $key ] );

        if ( $args[ $key ] == '' && in_array( $key, array( 'user_email' ) ) ) {
            UM()->form()->add_error( $key, __( 'You must provide your email', 'ultimate-member' ) );
        } elseif ( in_array( $args['mode'], array( 'register' ) ) && $email_exists  ) {
            UM()->form()->add_error( $key, __( 'This email is already linked to an existing account', 'ultimate-member' ) );
        } elseif ( in_array( $args['mode'], array( 'profile' ) ) && $email_exists && $email_exists != $args['user_id']  ) {
            UM()->form()->add_error( $key, __( 'This email is already linked to an existing account', 'ultimate-member' ) );
        } elseif ( !is_email( $args[ $key ] ) ) {
            UM()->form()->add_error( $key, __( 'The Email ID is invalid, please enter a valid Email ID', 'ultimate-member') );
        } elseif ( ! UM()->validation()->safe_username( $args[ $key ] ) ) {
            UM()->form()->add_error( $key,  __( 'Your email contains invalid characters', 'ultimate-member' ) );
        }
    } else {

        if ( $args[ $key ] != '' && ! is_email( $args[ $key ] ) ) {
            UM()->form()->add_error( $key, __( 'This is not a valid email', 'ultimate-member' ) );
        } elseif ( $args[ $key ] != '' && email_exists( $args[ $key ] ) ) {
            UM()->form()->add_error( $key, __( 'This email is already linked to an existing account', 'ultimate-member' ) );
        } elseif ( $args[ $key ] != '' ) {

            $users = get_users( 'meta_value=' . $args[ $key ] );

            foreach ( $users as $user ) {
                if ( $user->ID != $args['user_id'] ) {
                    UM()->form()->add_error( $key, __( 'This email is already linked to an existing account', 'ultimate-member' ) );
                }
            }

        }

    }

}
add_action( 'um_custom_field_validation_user_email', 'um_custom_validate_user_email', 30, 3 );





// External file  ///////////////////////////////////////

function Webbkod_scripts() {

	//wp_enqueue_style( 'Google-font', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet' );

    wp_enqueue_style( 'slick-style', get_stylesheet_directory_uri() . '/css/slick.css' );
    wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/css/slick-theme.css' );
    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

	// Javascripts
    wp_enqueue_script('slick_js', get_stylesheet_directory_uri().'/js/slick.min.js', array('jquery')  );
    wp_enqueue_script('custom', get_stylesheet_directory_uri().'/js/custom.js', array('jquery')  );
    wp_register_script('climatebox', get_stylesheet_directory_uri().'/js/climatebox.js', array('jquery')  );
    wp_localize_script( 'climatebox', 'admin_ajax',
        array( 
            'ajaxurl' => admin_url( 'admin-ajax.php' )
        )
    );
    wp_enqueue_script( 'climatebox' );

}
add_action( 'wp_enqueue_scripts', 'Webbkod_scripts' );


/* ========================= [[ Widgets ]] ========================= */

function webbkod_widgets_init() {

// Footer Top Left //////////
    register_sidebar( array(
        'name' => __( 'Footer Top Left', 'webbkod' ),
        'id' => 'footer_top_left',
        'description' => __( 'Footer Widget', 'webbkod' ),
        'before_widget' => '<div class="footer_top_left %1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

// Footer Top Right //////////  
    register_sidebar( array(
        'name' => __( 'Footer Top Right', 'webbkod' ),
        'id' => 'footer_top_right',
        'description' => __( 'Footer Widget', 'webbkod' ),
        'before_widget' => '<div class="footer_top_right %1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

// Toolkit Textbox Sidebar //////////
    register_sidebar( array(
        'name' => __( 'Textbox in Sidebar', 'webbkod' ),
        'id' => 'toolkit_textbox_sidebar',
        'description' => __( 'Textbox in Sidebar', 'webbkod' ),
        'before_widget' => '<div class="toolkit_sidebar %1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );



}
add_action( 'widgets_init', 'webbkod_widgets_init' );



/* ========================= [[ Pst Label to News ]] ========================= */

add_filter( 'post_type_labels_post', 'change_post_labels' );

function change_post_labels( $args ) {
  foreach( $args as $key => $label ){
    $args->{$key} = str_replace( [ __( 'Posts' ), __( 'Post' ) ], __( 'News' ), $label );
  }

  return $args;
}




// Restrict Media Library Access Manually ///////////////////////////////////////
add_filter( 'ajax_query_attachments_args', 'wpb_show_current_user_attachments' );

function wpb_show_current_user_attachments( $query ) {
    $user_id = get_current_user_id();
    if ( $user_id && !current_user_can('activate_plugins') && !current_user_can('edit_others_posts
        ') ) {
        $query['author'] = $user_id;
    }
    return $query;
} 



// Limit Post to See Published By Author Only ///////////////////////////////////////
function posts_for_current_author($query) {
    global $pagenow;
 
    if( 'edit.php?post_type=projects' != $pagenow || !$query->is_admin )
        return $query;
 
    if( !current_user_can( 'edit_others_posts' ) ) {
        global $user_ID;
        $query->set('author', $user_ID );
    }
    return $query;
}
add_filter('pre_get_posts', 'posts_for_current_author');


// Limit Post to See Published By Author Only ///////////////////////////////////////
function pages_for_current_author($query) {
    global $pagenow;
 
    if( 'edit.php?post_type=page' != $pagenow || !$query->is_admin )
        return $query;
 
    if( !current_user_can( 'edit_others_posts' ) ) {
        global $user_ID;
        $query->set('author', $user_ID );
    }
    return $query;
}
add_filter('pre_get_posts', 'pages_for_current_author');






// Toolkit Page Language Docs Shortcode ///////////////////////////////////////
function climatebox_toolkitdocs_shortcode() { 
    get_template_part('toolkitbox_docs');
}
// register shortcode
add_shortcode('climatebox_docs', 'climatebox_toolkitdocs_shortcode');






/* ========================= [[ cc_mime_types ]] ========================= */
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');





/* ========================= [[ Pagination ]] ========================= */
function custom_pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {
    $pagerange = 2;
}
global $paged;
if (empty($paged)) {
    $paged = 1;
}
if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
}

$pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('«'),
    'next_text'       => __('»'),
    'type'            => 'array',
    'add_args'        => false,
    'add_fragment'    => ''
);

$paginate_links = paginate_links($pagination_args);

if (is_array($paginate_links)) {
 echo "<div class='cpagination'>";
 echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
 echo '<ul class="pagination">';
 foreach ( $paginate_links as $page ) {
   echo "<li>$page</li>";
}
echo '</ul>';
echo "</div>";
}
}








add_action( 'wp_ajax_climatebox_search_projects', 'climatebox_search_projects' );
add_action( 'wp_ajax_nopriv_climatebox_search_projects', 'climatebox_search_projects' );
function climatebox_search_projects() {
  global $wpdb;
  global $current_user;
  $authorID = $current_user->ID;
  $user = wp_get_current_user();

  $paged = $_POST['paged'];

  if ( in_array( 'um_teacher', (array) $user->roles ) || in_array( 'um_moderator', (array) $user->roles ) ) { 
    $args = array(
     'post_type'=>'projects', 
     'posts_per_page' => 4,
     'paged' => $paged,
     'post_parent' => 0,
     'author' => $authorID,
     'meta_key' => 'ps_select_contest',
     'meta_value' => $_POST['contest'],
   );

  } elseif ( in_array( 'administrator', (array) $user->roles ) || in_array( 'um_contest-admin', (array) $user->roles ) ) {

    $args = array(
     'post_type'=>'projects', 
     'posts_per_page' => 4,
     'paged' => $paged,
     'post_parent' => 0,
     'meta_key' => 'ps_select_contest',
     'meta_value' =>  $_POST['contest'],
   );

  }


  $loop = new WP_Query( $args );
  if ( $loop->have_posts() ) {
   $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1; ?>

   <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 newprojects-<?php echo  $_POST['contest'] ?>">
     <div class="post_litem project_item">
      <a rel="bookmark" href="<?php echo get_permalink(); ?>">
       <?php the_title( '<p class="title">', '</p>' ); ?>

       <div class="post_meta">
        <p><?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?></p>
      </div>

      <?php $featured_post = get_field('ps_select_contest');
      if( $featured_post ): ?>
        <p class="contest_name"><?php echo esc_html( $featured_post->post_title ); ?></p>
      <?php endif; ?>

      <?php // <button class="btn btn_link"><i class="fas fa-eye"></i> View</button> ?>
    </a>
  </div>
</div>

<?php
endwhile; ?>


<?php 
}
die();
}

function wpdocs_myselective_css_or_js( $hook ) {
  if( current_user_can('um_moderator')){
    echo '<style>.menu-icon-post,.menu-icon-rl_gallery{display:none;} .users-php .row-actions .view, .users-php .row-actions .frontend_profile, .users-php .row-actions .view_info{display:none}</style>';
  }

}

add_action( 'admin_enqueue_scripts', 'wpdocs_myselective_css_or_js' ); 

function cptui_register_my_taxes_materials_category() {

    /**
     * Taxonomy: Materials Categories.
     */

    $labels = [
      "name" => __( "Materials Categories", "acf" ),
      "singular_name" => __( "Materials Category", "acf" ),
      "menu_name" => __( "Categories", "acf" ),
      "all_items" => __( "All Categories", "acf" ),
      "edit_item" => __( "Edit Category", "acf" ),
      "view_item" => __( "View Category", "acf" ),
      "update_item" => __( "Update Materials Category name", "acf" ),
      "add_new_item" => __( "Add new Materials Category", "acf" ),
      "new_item_name" => __( "New Materials Category name", "acf" ),
      "parent_item" => __( "Parent Materials Category", "acf" ),
      "parent_item_colon" => __( "Parent Materials Category:", "acf" ),
      "search_items" => __( "Search Materials Categories", "acf" ),
      "popular_items" => __( "Popular Materials Categories", "acf" ),
      "separate_items_with_commas" => __( "Separate Materials Categories with commas", "acf" ),
      "add_or_remove_items" => __( "Add or remove Materials Categories", "acf" ),
      "choose_from_most_used" => __( "Choose from the most used Materials Categories", "acf" ),
      "not_found" => __( "No Materials Categories found", "acf" ),
      "no_terms" => __( "No Materials Categories", "acf" ),
      "items_list_navigation" => __( "Materials Categories list navigation", "acf" ),
      "items_list" => __( "Materials Categories list", "acf" ),
      "back_to_items" => __( "Back to Materials Categories", "acf" ),
    ];

    $args = [
      "label" => __( "Materials Categories", "acf" ),
      "labels" => $labels,
      'capabilities'      => array(
        'manage_terms'  => 'edit_users',
        'edit_terms'    => 'edit_users',
        'delete_terms'  => 'edit_users',
        'assign_terms'  => 'edit_users'
      ),
      "public" => true,
      "publicly_queryable" => true,
      "hierarchical" => false,
      "show_ui" => true,
      "show_in_menu" => true,
      "show_in_nav_menus" => true,
      "query_var" => true,
      "rewrite" => [ 'slug' => 'materials_category', 'with_front' => true, ],
      "show_admin_column" => true,
      "show_in_rest" => true,
      "rest_base" => "materials_category",
      "rest_controller_class" => "WP_REST_Terms_Controller",
      'meta_box_cb'       => 'materials_category_meta_box',
      "show_in_quick_edit" => true,
    ];
    register_taxonomy( "materials_category", [ "learning_materials" ], $args );
  }
  add_action( 'init', 'cptui_register_my_taxes_materials_category' );

  function materials_category_meta_box( $post ) {
    $terms = get_terms( 'materials_category', array( 'hide_empty' => false ) );

    $post  = get_post();
    $rating = wp_get_object_terms( $post->ID, 'materials_category', array( 'orderby' => 'term_id', 'order' => 'ASC' ) );
    $name  = '';

    if ( ! is_wp_error( $rating ) ) {
      if ( isset( $rating[0] ) && isset( $rating[0]->name ) ) {
        $name = $rating[0]->name;
      }
    }

    foreach ( $terms as $term ) {
      ?>
      <label title='<?php esc_attr_e( $term->name ); ?>'>
        <input type="radio" name="materials_category" value="<?php esc_attr_e( $term->name ); ?>" <?php checked( $term->name, $name ); ?>>
        <span><?php esc_html_e( $term->name ); ?></span>
      </label><br>
      <?php
    }
  }

  function save_materials_category_meta_box( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
      return;
    }

    if ( ! isset( $_POST['materials_category'] ) ) {
      return;
    }

    $rating = sanitize_text_field( $_POST['materials_category'] );
    
    // A valid rating is required, so don't let this get published without one
    if ( empty( $rating ) ) {
        // unhook this function so it doesn't loop infinitely
      remove_action( 'save_post_learning_materials', 'save_materials_category_meta_box' );

      $postdata = array(
        'ID'          => $post_id,
        'post_status' => 'draft',
      );
      wp_update_post( $postdata );
    } else {
      $term = get_term_by( 'name', $rating, 'materials_category' );
      if ( ! empty( $term ) && ! is_wp_error( $term ) ) {
        wp_set_object_terms( $post_id, $term->term_id, 'materials_category', false );
      }
    }
  }
  add_action( 'save_post_learning_materials', 'save_materials_category_meta_box' );

  function cptui_register_my_taxes_key_topics() {

    /**
     * Taxonomy: Key Topics.
     */

    $labels = [
      "name" => __( "Key Topics", "acf" ),
      "singular_name" => __( "Key Topic", "acf" ),
      "menu_name" => __( "Key Topics", "acf" ),
      "all_items" => __( "All Key Topics", "acf" ),
      "edit_item" => __( "Edit Key Topic", "acf" ),
      "view_item" => __( "View Key Topic", "acf" ),
      "update_item" => __( "Update Key Topic name", "acf" ),
      "add_new_item" => __( "Add new Key Topic", "acf" ),
      "new_item_name" => __( "New Key Topic name", "acf" ),
      "parent_item" => __( "Parent Key Topic", "acf" ),
      "parent_item_colon" => __( "Parent Key Topic:", "acf" ),
      "search_items" => __( "Search Key Topics", "acf" ),
      "popular_items" => __( "Popular Key Topics", "acf" ),
      "separate_items_with_commas" => __( "Separate Key Topics with commas", "acf" ),
      "add_or_remove_items" => __( "Add or remove Key Topics", "acf" ),
      "choose_from_most_used" => __( "Choose from the most used Key Topics", "acf" ),
      "not_found" => __( "No Key Topics found", "acf" ),
      "no_terms" => __( "No Key Topics", "acf" ),
      "items_list_navigation" => __( "Key Topics list navigation", "acf" ),
      "items_list" => __( "Key Topics list", "acf" ),
      "back_to_items" => __( "Back to Key Topics", "acf" ),
    ];

    $args = [
      "label" => __( "Key Topics", "acf" ),
      "labels" => $labels,
      'capabilities'      => array(
        'manage_terms'  => 'edit_users',
        'edit_terms'    => 'edit_users',
        'delete_terms'  => 'edit_users',
        'assign_terms'  => 'edit_users'
      ),
      "public" => true,
      "publicly_queryable" => true,
      "hierarchical" => true,
      "show_ui" => true,
      "show_in_menu" => true,
      "show_in_nav_menus" => true,
      "query_var" => true,
      "rewrite" => [ 'slug' => 'key_topics', 'with_front' => true, ],
      "show_admin_column" => false,
      "show_in_rest" => true,
      "rest_base" => "key_topics",
      "rest_controller_class" => "WP_REST_Terms_Controller",
      "show_in_quick_edit" => false,
    ];
    register_taxonomy( "key_topics", [ "learning_materials" ], $args );
  }
  add_action( 'init', 'cptui_register_my_taxes_key_topics' );

  function cptui_register_my_taxes_lm_language() {

    /**
     * Taxonomy: Languages.
     */

    $labels = [
      "name" => __( "Languages", "acf" ),
      "singular_name" => __( "Language", "acf" ),
      "menu_name" => __( "Languages", "acf" ),
      "all_items" => __( "All Languages", "acf" ),
      "edit_item" => __( "Edit Language", "acf" ),
      "view_item" => __( "View Language", "acf" ),
      "update_item" => __( "Update Language name", "acf" ),
      "add_new_item" => __( "Add new Language", "acf" ),
      "new_item_name" => __( "New Language name", "acf" ),
      "parent_item" => __( "Parent Language", "acf" ),
      "parent_item_colon" => __( "Parent Language:", "acf" ),
      "search_items" => __( "Search Languages", "acf" ),
      "popular_items" => __( "Popular Languages", "acf" ),
      "separate_items_with_commas" => __( "Separate Languages with commas", "acf" ),
      "add_or_remove_items" => __( "Add or remove Languages", "acf" ),
      "choose_from_most_used" => __( "Choose from the most used Languages", "acf" ),
      "not_found" => __( "No Languages found", "acf" ),
      "no_terms" => __( "No Languages", "acf" ),
      "items_list_navigation" => __( "Languages list navigation", "acf" ),
      "items_list" => __( "Languages list", "acf" ),
      "back_to_items" => __( "Back to Languages", "acf" ),
    ];

    $args = [
      "label" => __( "Languages", "acf" ),
      'capabilities'      => array(
        'manage_terms'  => 'edit_users',
        'edit_terms'    => 'edit_users',
        'delete_terms'  => 'edit_users',
        'assign_terms'  => 'edit_users'
      ),
      "labels" => $labels,
      "public" => true,
      "publicly_queryable" => true,
      "hierarchical" => false,
      "show_ui" => true,
      "show_in_menu" => true,
      "show_in_nav_menus" => true,
      "query_var" => true,
      "rewrite" => [ 'slug' => 'lm_language', 'with_front' => true, ],
      "show_admin_column" => false,
      "show_in_rest" => true,
      "rest_base" => "lm_language",
      "rest_controller_class" => "WP_REST_Terms_Controller",
      "show_in_quick_edit" => false,
      'meta_box_cb'       => 'lm_language_meta_box',
    ];
    register_taxonomy( "lm_language", [ "learning_materials" ], $args );
  }
  add_action( 'init', 'cptui_register_my_taxes_lm_language' );

  function lm_language_meta_box( $post ) {
    $terms = get_terms( 'lm_language', array( 'hide_empty' => false ) );

    $post  = get_post();
    $rating = wp_get_object_terms( $post->ID, 'lm_language', array( 'orderby' => 'term_id', 'order' => 'ASC' ) );
    $name  = '';

    if ( ! is_wp_error( $rating ) ) {
      if ( isset( $rating[0] ) && isset( $rating[0]->name ) ) {
        $name = $rating[0]->name;
      }
    }

    foreach ( $terms as $term ) {
      ?>
      <label title='<?php esc_attr_e( $term->name ); ?>'>
        <input type="radio" name="lm_language" value="<?php esc_attr_e( $term->name ); ?>" <?php checked( $term->name, $name ); ?>>
        <span><?php esc_html_e( $term->name ); ?></span>
      </label><br>
      <?php
    }
  }

  function save_lm_language_meta_box( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
      return;
    }

    if ( ! isset( $_POST['lm_language'] ) ) {
      return;
    }

    $rating = sanitize_text_field( $_POST['lm_language'] );
    
    // A valid rating is required, so don't let this get published without one
    if ( empty( $rating ) ) {
        // unhook this function so it doesn't loop infinitely
      remove_action( 'save_post_learning_materials', 'save_lm_language_meta_box' );

      $postdata = array(
        'ID'          => $post_id,
        'post_status' => 'draft',
      );
      wp_update_post( $postdata );
    } else {
      $term = get_term_by( 'name', $rating, 'lm_language' );
      if ( ! empty( $term ) && ! is_wp_error( $term ) ) {
        wp_set_object_terms( $post_id, $term->term_id, 'lm_language', false );
      }
    }
  }
  add_action( 'save_post_learning_materials', 'save_lm_language_meta_box' );

  function climate_usermeta_form_field_notes( $user )
  {
    ?>

    <table class="form-table">
      <tr>
        <th>
          <label for="notes">Notes</label>
        </th>
        <td>
          <textarea class="regular-text ltr" id="notes" name="notes"><?= esc_attr( get_user_meta( $user->ID, 'notes', true ) ) ?></textarea>
        </td>
      </tr>
    </table>
    <?php
  }
  
/**
 * The save action.
 *
 * @param $user_id int the ID of the current user.
 *
 * @return bool Meta ID if the key didn't exist, true on successful update, false on failure.
 */
function climate_usermeta_form_field_notes_update( $user_id )
{
    // check that the current user have the capability to edit the $user_id
    if ( ! current_user_can( 'edit_user', $user_id ) ) {
        return false;
    }
  
    // create/update user meta for the $user_id
    return update_user_meta(
        $user_id,
        'notes',
        $_POST['notes']
    );
}
  
// Add the field to user's own profile editing screen.
add_action(
    'show_user_profile',
    'climate_usermeta_form_field_notes'
);
  
// Add the field to user profile editing screen.
add_action(
    'edit_user_profile',
    'climate_usermeta_form_field_notes'
);
  
// Add the save action to user's own profile editing screen update.
add_action(
    'personal_options_update',
    'climate_usermeta_form_field_notes_update'
);
  
// Add the save action to user profile editing screen update.
add_action(
    'edit_user_profile_update',
    'climate_usermeta_form_field_notes_update'
);



function hide_personal_options(){
    echo "\n" . '<script type="text/javascript">jQuery(document).ready(function($) { $(\'form#your-profile > h3:first\').hide(); $(\'form#your-profile > table:first\').hide(); $(\'form#your-profile\').show(); });</script>' . "\n";
}
add_action('admin_head','hide_personal_options');

function new_contact_methods( $contactmethods ) {
    $contactmethods['Occupation'] = 'Occupation';
    $contactmethods['Organization'] = 'Organization';
    unset($contactmethods['url']);
    unset($contactmethods['facebook']);
    unset($contactmethods['instagram']);
    unset($contactmethods['linkedin']);
    unset($contactmethods['myspace']);
    unset($contactmethods['pinterest']);
    unset($contactmethods['soundcloud']);
    unset($contactmethods['tumblr']);
    unset($contactmethods['twitter']);
    unset( $contactmethods['youtube'] );
    unset( $contactmethods['wikipedia'] );
    
    return $contactmethods;
}
add_filter( 'user_contactmethods', 'new_contact_methods', 10, 1 );


function new_modify_user_table( $column ) {
    $column['Occupation'] = 'Occupation';
    return $column;
}
add_filter( 'manage_users_columns', 'new_modify_user_table' );

function new_modify_user_table_row( $val, $column_name, $user_id ) {
    switch ($column_name) {
        case 'Occupation' :
            return get_the_author_meta( 'Occupation', $user_id );
        default:
    }
    return $val;
}
add_filter( 'manage_users_custom_column', 'new_modify_user_table_row', 10, 3 );

function climate_title_filter( $where, $wp_query ){
    global $wpdb;
    if ( $search_term = $wp_query->get( 'climate_search_title' ) ) {
        $where .= ' AND (' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql( like_escape( trim($search_term) ) ) . '%\'  OR ' . $wpdb->posts . '.post_content LIKE \'%' . esc_sql( like_escape( $search_term ) ) . '%\')';
    }
    return $where;
}
function climate_search_title_tax( $where, $wp_query ){
    global $wpdb;
    if ( $search_term = $wp_query->get( 'climate_search_title_tax' ) ) {
        $where .= ' AND ' . $wpdb->posts . '.post_type="learning_materials" OR (' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql( like_escape( trim($search_term) ) ) . '%\'  OR ' . $wpdb->posts . '.post_content LIKE \'%' . esc_sql( like_escape( trim($search_term) ) ) . '%\')';
    }
    return $where;
}

// Yoast Seo Breadcrumbs ///////////////////////////////////////

add_filter( 'wpseo_breadcrumb_links', 'unbox_yoast_seo_breadcrumb_append_link' );
function unbox_yoast_seo_breadcrumb_append_link( $links ) {
 global $post;

 // News Single Page Breadcrumb
 if( is_singular('post')){

  $News = pll_get_post( 64 );
  $News_url = get_the_permalink($News);

  $breadcrumb[1] = array(
   'url' => $News_url,
   'text' => get_the_title($News),
 );
  array_splice($links,1,0, $breadcrumb); 
}

// Stories Single Page Breadcrumb
if( is_singular('stories')){
  $News = pll_get_post( 64 );
  $News_url = get_the_permalink($News);

  $breadcrumb[1] = array(
   'url' => $News_url,
   'text' => get_the_title($News),
 );

  $Stories = pll_get_post( 1230 );
  $Stories_url = get_the_permalink($Stories);

  $breadcrumb[2] = array(
   'url' => $Stories_url,
   'text' => get_the_title($Stories),
 );
  array_splice($links,1,0, $breadcrumb); 
}

// Gallery Single Page Breadcrumb
if( is_singular('rl_gallery')){
  $News = pll_get_post( 64 );
  $News_url = get_the_permalink($News);

  $breadcrumb[1] = array(
   'url' => $News_url,
   'text' => get_the_title($News),
 );

  $Gallery = pll_get_post( 1249 );
  $Gallery_url = get_the_permalink($Gallery);

  $breadcrumb[2] = array(
   'url' => $Gallery_url,
   'text' => get_the_title($Gallery),
 );

  array_splice($links,1,-1, $breadcrumb); 
}

// Textbooks Single Page Breadcrumb
if( is_singular('textbooks')){
  $Climate = pll_get_post( 54 );
  $Climate_url = get_the_permalink($Climate);

  $breadcrumb[1] = array(
   'url' => $Climate_url,
   'text' => get_the_title($Climate),
 );

  $Textbooks = pll_get_post( 316 );
  $Textbooks_url = get_the_permalink($Textbooks);

  $breadcrumb[2] = array(
   'url' => $Textbooks_url,
   'text' => get_the_title($Textbooks),
 );

  array_splice($links,1,0, $breadcrumb); 
}

// Quiz Single Page Breadcrumb
if( is_singular('quiz_listing')){
  $Climate = pll_get_post( 54 );
  $Climate_url = get_the_permalink($Climate);

  $breadcrumb[1] = array(
   'url' => $Climate_url,
   'text' => get_the_title($Climate),
 );

  $Quiz = pll_get_post( 394 );
  $Quiz_url = get_the_permalink($Quiz);

  $breadcrumb[2] = array(
   'url' => $Quiz_url,
   'text' => get_the_title($Quiz),
 );

  array_splice($links,1,0, $breadcrumb); 
}

// Map & Poster Single Page Breadcrumb
if( is_singular('mapposter')){
  $Climate = pll_get_post( 54 );
  $Climate_url = get_the_permalink($Climate);

  $breadcrumb[1] = array(
   'url' => $Climate_url,
   'text' => get_the_title($Climate),
 );

  $MandP = pll_get_post( 319 );
  $MandP_url = get_the_permalink($MandP);

  $breadcrumb[2] = array(
   'url' => $MandP_url,
   'text' => get_the_title($MandP),
 );

  array_splice($links,1,0, $breadcrumb); 
}

// Learning Materials Single Page Breadcrumb
if( is_singular('learning_materials')){
  $Teachers = pll_get_post( 66 );
  $Teachers_url = get_the_permalink($Teachers);

  $breadcrumb[1] = array(
   'url' => $Teachers_url,
   'text' => get_the_title($Teachers),
 );

  array_splice($links,1,0, $breadcrumb); 
}

// Video Lessons Single Page Breadcrumb
if( is_singular('video_lessons')){
  $Teachers = pll_get_post( 66 );
  $Teachers_url = get_the_permalink($Teachers);

  $breadcrumb[1] = array(
   'url' => $Teachers_url,
   'text' => get_the_title($Teachers),
 );

  $VandL = pll_get_post( 1269 );
  $VandL_url = get_the_permalink($VandL);

  $breadcrumb[2] = array(
   'url' => $VandL_url,
   'text' => get_the_title($VandL),
 );

  array_splice($links,1,0, $breadcrumb); 
}

// Discussion Material Single Page Breadcrumb
if( is_singular('discussion_material')){
  $Teachers = pll_get_post( 66 );
  $Teachers_url = get_the_permalink($Teachers);

  $breadcrumb[1] = array(
   'url' => $Teachers_url,
   'text' => get_the_title($Teachers),
 );

  $dmat = pll_get_post( 1276 );
  $dmat_url = get_the_permalink($dmat);

  $breadcrumb[2] = array(
   'url' => $dmat_url,
   'text' => get_the_title($dmat),
 );

  array_splice($links,1,0, $breadcrumb); 
}

// Discussion Topic Single Page Breadcrumb
if( is_singular('discussion_topic')){
  $Teachers = pll_get_post( 66 );
  $Teachers_url = get_the_permalink($Teachers);

  $breadcrumb[1] = array(
   'url' => $Teachers_url,
   'text' => get_the_title($Teachers),
 );

  $dtopic = pll_get_post( 626 );
  $dtopic_url = get_the_permalink($dtopic);

  $breadcrumb[2] = array(
   'url' => $dtopic_url,
   'text' => get_the_title($dtopic),
 );

  array_splice($links,1,0, $breadcrumb); 
}

// Contest Single Page Breadcrumb
if( is_singular('competition')){
  $Contest = pll_get_post( 68 );
  $Contest_url = get_the_permalink($Contest);

  $breadcrumb[1] = array(
   'url' => $Contest_url,
   'text' => get_the_title($Contest),
 );

  array_splice($links,1,0, $breadcrumb); 
}

// Projects Single Page Breadcrumb
if( is_singular('projects')){
  $Contest = pll_get_post( 68 );
  $Contest_url = get_the_permalink($Contest);

  $breadcrumb[1] = array(
   'url' => $Contest_url,
   'text' => get_the_title($Contest),
 );

  $projects = pll_get_post( 771 );
  $projects_url = get_the_permalink($projects);

  $breadcrumb[2] = array(
   'url' => $projects_url,
   'text' => get_the_title($projects),
 );

  array_splice($links,1,0, $breadcrumb); 
}



return $links;
}

add_action( 'um_on_login_before_redirect', 'my_user_login_extra', 10, 1 );
function my_user_login_extra( $args ) {
  wp_redirect( home_url() );
  exit;
}

add_filter( 'um_login_form_button_two_url', 'my_login_form_button_two_url', 10, 2 );
function my_login_form_button_two_url( $secondary_btn_url, $args ) {
  $registration = pll_get_post( 38 );
  $registration_url = get_the_permalink($registration);
  return $registration_url;
}
