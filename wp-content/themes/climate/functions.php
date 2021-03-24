<?php
// Author: Naimesh Rao


// Remove Link ?=ver ///////////////////////////////////////

function webbkod_remove_version() {
	return '';
}
add_filter('the_generator', 'webbkod_remove_version');

remove_action('wp_head', 'wp_generator');



// Upload File Size Media ///////////////////////////////////////

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );



// Search Highlight Text ///////////////////////////////////////
/*
function search_excerpt_highlight() {
    $excerpt = get_the_excerpt();
    $keys = implode('|', explode(' ', get_search_query()));
    $excerpt = preg_replace('/(' . $keys .')/iu', '<strong class="search-highlight">\0</strong>', $excerpt);

    echo '<p>' . $excerpt . '</p>';
}

function search_title_highlight() {
    $title = get_the_title();
    $keys = implode('|', explode(' ', get_search_query()));
    $title = preg_replace('/(' . $keys .')/iu', '<strong class="search-highlight">\0</strong>', $title);

    echo $title;
}
*/


// Polylang String ///////////////////////////////////////
add_action('init', function() {

  pll_register_string('climate', 'All rights reserved.'); // Footer File
  pll_register_string('climate', 'Question'); // Footer File
  pll_register_string('climate', 'View On'); // Footer File
  pll_register_string('climate', 'Logout'); // Header File
  pll_register_string('climate', 'My Account'); // Header File
  pll_register_string('climate', 'Login'); // Header File

  pll_register_string('climate', 'Download this Document'); // toolkit doc file

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
  pll_register_string('climate', 'Back to Textbooks list'); // Single - Textbook
  pll_register_string('climate', 'Topics'); // Single - Textbook
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

  pll_register_string('climate', 'Oops!'); // 404
  pll_register_string('climate', 'This is not the page you are looking for.'); // 404
  pll_register_string('climate', 'Wanna try something else?'); // 404
  pll_register_string('climate', 'The page you requested cannot be found'); // 404
  pll_register_string('climate', 'This might be because:'); // 404
  pll_register_string('climate', 'The Web page you are attempting to view may not exist or may have moved.'); // 404
  pll_register_string('climate', 'You may have reached this page from an incorrect link. Try double checking the Web address.'); // 404

  pll_register_string('climate', 'Error 404'); // Breadcrumb
  pll_register_string('climate', 'Home'); // Breadcrumb

});


// ACF Strings for Polylang ///////////////////////////////////////
add_action('init', function () {
  foreach (acf_get_field_groups() as $group) {
    $fields = acf_get_fields($group['ID']);
    if (is_array($fields) && count($fields)) {
      foreach ($fields as &$field) {
        pll_register_string('form_field_group'.$group['ID'].'_label_'.$field['name'], $field['label'], 'acf_form_fields');
      }
    }
  }
});

add_filter('acf/prepare_field', function ($field) {
  if (!is_admin()) {
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

    // $child_2 = acf_add_options_sub_page(array(
    //   'page_title'  => __('Theme URL Redirection for Language'),
    //   'menu_title'  => __('URL Redirection'),
    //   'updated_message' => __("Theme Post Updated", 'acf'),
    //   'parent_slug' => $parent['menu_slug'],
    //   'capability'    => 'edit_url_redirection',
    // ));

  }
}

// Custom JS in WP-ADMIN ///////////////////////////////////////
function themeoption_js_admin() { 
  ?>

  <script>
    $(".theme-options_page_acf-options-url-redirection label:contains(EN)").closest( ".acf-field" ).css("background-color", "#fff9e6");
  </script>

  <?php 
}
add_action('wp_print_scripts', 'themeoption_js_admin');




// Content Permissions meta box in CPT Edit ///////////////////////////////////////
// add_action( 'add_meta_boxes', function() {

//  remove_meta_box( 'members-cp', 'competition', 'advanced' );

// }, 11 );





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


// UM Emails Background Color Change ///////////////////////////////////////
// add_filter("um_email_template_body_attrs", function( $css_atts ){
//    return 'style="background: #fff;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;"';
// });



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
    //$logo           =   get_stylesheet_directory_uri() . '/img/undp_logo_blue.png';

    //$html = get_template_part( 'email_disc_topic' );

    // $html = "<html><body>
    // <p>Hellow ,</p>
    // <p>New Discussion Topic Created</p>
    // <p><a href=$link>$fromName</a></p>
    // <p>Thank You</p>
    // </body>
    // </html>";

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


    $headers[] = "From: UNDP Climate Box <help@climate-box-dev.wishtreetech.com>"; // $fromName
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

    // $html = "<html><body>
    // <p>Hellow ,</p>
    // <p>New Discussion Topic Created</p>
    // <p><a href=$link>$fromName</a></p>
    // <p>Thank You</p>
    // </body>
    // </html>";

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


    $headers[] = "From: UNDP Climate Box <help@climate-box-dev.wishtreetech.com>"; // $fromName
    $headers[] ="Content-Type: text/html";

    foreach ( $subscribers as $subscriber )
    {
        $emails= $subscriber->user_email;
        wp_mail($emails, $subject, $html, $headers);
    }
    
}


// Next Post Link ///////////////////////////////////////
function next_shortcode($atts) {

//global $wp;  
//$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

//$link_text =  __('Next Quiz');
//$link_text =  'Next Quiz';

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





// function remove_menus(){

// $roles = wp_get_current_user()->roles;
 
// if( !in_array('editor',$roles)){
// return;
// }
 
// remove_menu_page( 'index.php' ); //Dashboard
// remove_menu_page( 'edit.php' ); //Posts
// remove_menu_page( 'upload.php' ); //Media
// remove_menu_page( 'edit-comments.php' ); //Comments
// remove_menu_page( 'themes.php' ); //Appearance
// remove_menu_page( 'plugins.php' ); //Plugins
// remove_menu_page( 'users.php' ); //Users
// remove_menu_page( 'tools.php' ); //Tools
// remove_menu_page( 'options-general.php' ); //Settings
// remove_menu_page( 'edit.php?post_type=page' ); //Pages
// remove_menu_page('edit.php?post_type=testimonial'); // Custom post type 1
// remove_menu_page('edit.php?post_type=homeslider'); // Custom post type 2
// }
// add_action( 'admin_menu', 'remove_menus' , 100 );






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



// ACF URL Redirection code for Languages ///////////////////////////////////////
//add_action('init','climatebox_urls');
// function climatebox_urls($page) {

//   $lang = get_bloginfo("language"); 
//   $getpage = get_field($page."-".$lang);
//   $url = get_permalink(  $getpage);
//   return $url;

// }




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

// REMOVE CODE on Delivery
// function revcon_change_post_label() {
//     global $menu;
//     global $submenu;
//     $menu[5][0] = 'News';
//     $submenu['edit.php'][5][0] = 'News';
//     $submenu['edit.php'][10][0] = 'Add News';
//     $submenu['edit.php'][16][0] = 'News Tags';
// }
// function revcon_change_post_object() {
//     global $wp_post_types;
//     $labels = &$wp_post_types['post']->labels;
//     $labels->name = 'News';
//     $labels->singular_name = 'News';
//     $labels->add_new = 'Add News';
//     $labels->add_new_item = 'Add News';
//     $labels->edit_item = 'Edit News';
//     $labels->new_item = 'News';
//     $labels->view_item = 'View News';
//     $labels->search_items = 'Search News';
//     $labels->not_found = 'No News found';
//     $labels->not_found_in_trash = 'No News found in Trash';
//     $labels->all_items = 'All News';
//     $labels->menu_name = 'News';
//     $labels->name_admin_bar = 'News';
// }

// add_action( 'admin_menu', 'revcon_change_post_label' );
// add_action( 'init', 'revcon_change_post_object' );

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










// add_action( 'wp_ajax_demo_load_my_posts', 'demo_load_my_posts' );
// add_action( 'wp_ajax_nopriv_demo_load_my_posts', 'demo_load_my_posts' );
// function demo_load_my_posts() {

//     global $wpdb;
    
//     $msg = '';
    
//     if( isset( $_POST['data']['page'] ) ){
//         // Always sanitize the posted fields to avoid SQL injections
//         $page = sanitize_text_field($_POST['data']['page']); // The page we are currently at
//         $name = sanitize_text_field($_POST['data']['th_name']); // The name of the column name we want to sort
//         $sort = sanitize_text_field($_POST['data']['th_sort']); // The order of our sort (DESC or ASC)
//         $cur_page = $page;
//         $page -= 1;
//         $per_page = 15; // Number of items to display per page
//         $previous_btn = true;
//         $next_btn = true;
//         $first_btn = true;
//         $last_btn = true;
//         $start = $page * $per_page;
        
//         // The table we are querying from  
//         $posts = $wpdb->prefix . "posts";
        
//         $where_search = '';
        
//         // Check if there is a string inputted on the search box
//         if( ! empty( $_POST['data']['search']) ){
//             // If a string is inputted, include an additional query logic to our main query to filter the results
//             $where_search = ' AND (post_title LIKE "%%' . $_POST['data']['search'] . '%%" OR post_content LIKE "%%' . $_POST['data']['search'] . '%%") ';
//         }
        
//         // Retrieve all the posts
//         $all_posts = $wpdb->get_results($wpdb->prepare("
//             SELECT * FROM $posts WHERE post_type = 'post' AND post_status = 'publish' $where_search
//             ORDER BY $name $sort LIMIT %d, %d", $start, $per_page ) );
        
//         $count = $wpdb->get_var($wpdb->prepare("
//             SELECT COUNT(ID) FROM " . $posts . " WHERE post_type = 'post' AND post_status = 'publish' $where_search", array() ) );
        
//         // Check if our query returns anything.
//         if( $all_posts ):
//             $msg .= '<table class = "table table-striped table-hover table-file-list">';
            
//             // Iterate thru each item
//             foreach( $all_posts as $key => $post ):
//                 $msg .= '
//                 <tr>
//                 <td width = "25%"><a href = "' . get_permalink( $post->ID ) . '">' . $post->post_title . '</a></td>
//                 <td width = "60%">' . $post->post_excerpt . '</td>
//                 <td width = "15%">' . $post->post_date . '</td>
//                 </tr>';        
//             endforeach;
            
//             $msg .= '</table>';
            
//         // If the query returns nothing, we throw an error message
//         else:
//             $msg .= '<p class = "bg-danger">No posts matching your search criteria were found.</p>';
            
//         endif;

//         $msg = "<div class='cvf-universal-content'>" . $msg . "</div><br class = 'clear' />";
        
//         $no_of_paginations = ceil($count / $per_page);

//         if ($cur_page >= 7) {
//             $start_loop = $cur_page - 3;
//             if ($no_of_paginations > $cur_page + 3)
//                 $end_loop = $cur_page + 3;
//             else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
//                 $start_loop = $no_of_paginations - 6;
//                 $end_loop = $no_of_paginations;
//             } else {
//                 $end_loop = $no_of_paginations;
//             }
//         } else {
//             $start_loop = 1;
//             if ($no_of_paginations > 7)
//                 $end_loop = 7;
//             else
//                 $end_loop = $no_of_paginations;
//         }
        
//         $pag_container .= "
//         <div class='cvf-universal-pagination'>
//         <ul>";

//         if ($first_btn && $cur_page > 1) {
//             $pag_container .= "<li p='1' class='active'>First</li>";
//         } else if ($first_btn) {
//             $pag_container .= "<li p='1' class='inactive'>First</li>";
//         }

//         if ($previous_btn && $cur_page > 1) {
//             $pre = $cur_page - 1;
//             $pag_container .= "<li p='$pre' class='active'>Previous</li>";
//         } else if ($previous_btn) {
//             $pag_container .= "<li class='inactive'>Previous</li>";
//         }
//         for ($i = $start_loop; $i <= $end_loop; $i++) {

//             if ($cur_page == $i)
//                 $pag_container .= "<li p='$i' class = 'selected' >{$i}</li>";
//             else
//                 $pag_container .= "<li p='$i' class='active'>{$i}</li>";
//         }
        
//         if ($next_btn && $cur_page < $no_of_paginations) {
//             $nex = $cur_page + 1;
//             $pag_container .= "<li p='$nex' class='active'>Next</li>";
//         } else if ($next_btn) {
//             $pag_container .= "<li class='inactive'>Next</li>";
//         }

//         if ($last_btn && $cur_page < $no_of_paginations) {
//             $pag_container .= "<li p='$no_of_paginations' class='active'>Last</li>";
//         } else if ($last_btn) {
//             $pag_container .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
//         }

//         $pag_container = $pag_container . "
//         </ul>
//         </div>";
        
//         echo
//         '<div class = "cvf-pagination-content">' . $msg . '</div>' .
//         '<div class = "cvf-pagination-nav">' . $pag_container . '</div>';
        
//     }
    
//     exit();
    
// }

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
        echo '<style>.menu-icon-post,.menu-icon-rl_gallery{display:none;}</style>';
    }
    
}
 
add_action( 'admin_enqueue_scripts', 'wpdocs_myselective_css_or_js' ); 

function cptui_register_my_taxes_materials_category() {

    /**
     * Taxonomy: Materials Categories.
     */

    $labels = [
        "name" => __( "Materials Categories", "custom-post-type-ui" ),
        "singular_name" => __( "Materials Category", "custom-post-type-ui" ),
        "menu_name" => __( "Categories", "custom-post-type-ui" ),
        "all_items" => __( "All Categories", "custom-post-type-ui" ),
        "edit_item" => __( "Edit Category", "custom-post-type-ui" ),
        "view_item" => __( "View Category", "custom-post-type-ui" ),
        "update_item" => __( "Update Materials Category name", "custom-post-type-ui" ),
        "add_new_item" => __( "Add new Materials Category", "custom-post-type-ui" ),
        "new_item_name" => __( "New Materials Category name", "custom-post-type-ui" ),
        "parent_item" => __( "Parent Materials Category", "custom-post-type-ui" ),
        "parent_item_colon" => __( "Parent Materials Category:", "custom-post-type-ui" ),
        "search_items" => __( "Search Materials Categories", "custom-post-type-ui" ),
        "popular_items" => __( "Popular Materials Categories", "custom-post-type-ui" ),
        "separate_items_with_commas" => __( "Separate Materials Categories with commas", "custom-post-type-ui" ),
        "add_or_remove_items" => __( "Add or remove Materials Categories", "custom-post-type-ui" ),
        "choose_from_most_used" => __( "Choose from the most used Materials Categories", "custom-post-type-ui" ),
        "not_found" => __( "No Materials Categories found", "custom-post-type-ui" ),
        "no_terms" => __( "No Materials Categories", "custom-post-type-ui" ),
        "items_list_navigation" => __( "Materials Categories list navigation", "custom-post-type-ui" ),
        "items_list" => __( "Materials Categories list", "custom-post-type-ui" ),
        "back_to_items" => __( "Back to Materials Categories", "custom-post-type-ui" ),
    ];

    $args = [
        "label" => __( "Materials Categories", "custom-post-type-ui" ),
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
        "name" => __( "Key Topics", "custom-post-type-ui" ),
        "singular_name" => __( "Key Topic", "custom-post-type-ui" ),
        "menu_name" => __( "Key Topics", "custom-post-type-ui" ),
        "all_items" => __( "All Key Topics", "custom-post-type-ui" ),
        "edit_item" => __( "Edit Key Topic", "custom-post-type-ui" ),
        "view_item" => __( "View Key Topic", "custom-post-type-ui" ),
        "update_item" => __( "Update Key Topic name", "custom-post-type-ui" ),
        "add_new_item" => __( "Add new Key Topic", "custom-post-type-ui" ),
        "new_item_name" => __( "New Key Topic name", "custom-post-type-ui" ),
        "parent_item" => __( "Parent Key Topic", "custom-post-type-ui" ),
        "parent_item_colon" => __( "Parent Key Topic:", "custom-post-type-ui" ),
        "search_items" => __( "Search Key Topics", "custom-post-type-ui" ),
        "popular_items" => __( "Popular Key Topics", "custom-post-type-ui" ),
        "separate_items_with_commas" => __( "Separate Key Topics with commas", "custom-post-type-ui" ),
        "add_or_remove_items" => __( "Add or remove Key Topics", "custom-post-type-ui" ),
        "choose_from_most_used" => __( "Choose from the most used Key Topics", "custom-post-type-ui" ),
        "not_found" => __( "No Key Topics found", "custom-post-type-ui" ),
        "no_terms" => __( "No Key Topics", "custom-post-type-ui" ),
        "items_list_navigation" => __( "Key Topics list navigation", "custom-post-type-ui" ),
        "items_list" => __( "Key Topics list", "custom-post-type-ui" ),
        "back_to_items" => __( "Back to Key Topics", "custom-post-type-ui" ),
    ];

    $args = [
        "label" => __( "Key Topics", "custom-post-type-ui" ),
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
        "name" => __( "Languages", "custom-post-type-ui" ),
        "singular_name" => __( "Language", "custom-post-type-ui" ),
        "menu_name" => __( "Languages", "custom-post-type-ui" ),
        "all_items" => __( "All Languages", "custom-post-type-ui" ),
        "edit_item" => __( "Edit Language", "custom-post-type-ui" ),
        "view_item" => __( "View Language", "custom-post-type-ui" ),
        "update_item" => __( "Update Language name", "custom-post-type-ui" ),
        "add_new_item" => __( "Add new Language", "custom-post-type-ui" ),
        "new_item_name" => __( "New Language name", "custom-post-type-ui" ),
        "parent_item" => __( "Parent Language", "custom-post-type-ui" ),
        "parent_item_colon" => __( "Parent Language:", "custom-post-type-ui" ),
        "search_items" => __( "Search Languages", "custom-post-type-ui" ),
        "popular_items" => __( "Popular Languages", "custom-post-type-ui" ),
        "separate_items_with_commas" => __( "Separate Languages with commas", "custom-post-type-ui" ),
        "add_or_remove_items" => __( "Add or remove Languages", "custom-post-type-ui" ),
        "choose_from_most_used" => __( "Choose from the most used Languages", "custom-post-type-ui" ),
        "not_found" => __( "No Languages found", "custom-post-type-ui" ),
        "no_terms" => __( "No Languages", "custom-post-type-ui" ),
        "items_list_navigation" => __( "Languages list navigation", "custom-post-type-ui" ),
        "items_list" => __( "Languages list", "custom-post-type-ui" ),
        "back_to_items" => __( "Back to Languages", "custom-post-type-ui" ),
    ];

    $args = [
        "label" => __( "Languages", "custom-post-type-ui" ),
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
        $where .= ' AND (' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql( like_escape( $search_term ) ) . '%\'  OR ' . $wpdb->posts . '.post_content LIKE \'%' . esc_sql( like_escape( $search_term ) ) . '%\')';
    }
    return $where;
}
function climate_search_title_tax( $where, $wp_query ){
    global $wpdb;
    if ( $search_term = $wp_query->get( 'climate_search_title_tax' ) ) {
        $where .= ' AND ' . $wpdb->posts . '.post_type="learning_materials" OR (' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql( like_escape( $search_term ) ) . '%\'  OR ' . $wpdb->posts . '.post_content LIKE \'%' . esc_sql( like_escape( $search_term ) ) . '%\')';
    }
    return $where;
}





// Custom Breadcrumbs ///////////////////////////////////////

// if ( ! function_exists( 'ct_climate_breadcrumbs' ) ) {
//   function ct_climate_breadcrumbs( $args = array() ) {

//     if ( is_front_page() ) {
//       return;
//     }
//     if ( get_theme_mod( 'ct_climate_show_breadcrumbs_setting' ) == 'no' ) {
//       return;
//     }

//     global $post;
//     $defaults  = array(
//       'separator_icon'      => '&gt;',
//       'breadcrumbs_id'      => 'breadcrumbs',
//       'breadcrumbs_classes' => 'breadcrumb-trail breadcrumbs',
//       'home_title'          => esc_html__( 'Home', 'acf' )
//     );
//     $args      = apply_filters( 'ct_climate_breadcrumbs_args', wp_parse_args( $args, $defaults ) );
//     $separator = '<span class="separator"> ' . esc_html( $args['separator_icon'] ) . ' </span>';

//     /***** Begin Markup *****/

//     // Open the breadcrumbs
//     $html = '<div id="' . esc_attr( $args['breadcrumbs_id'] ) . '" class="' . esc_attr( $args['breadcrumbs_classes'] ) . '">';

//     // Add Homepage link & separator (always present)
//     $html .= '<span class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . esc_attr( $args['home_title'] ) . '">' . esc_html( $args['home_title'] ) . '</a></span>';
//     $html .= $separator;

//     // Post
//     if ( is_singular( 'post' ) ) {
      
//       $category = get_the_category( $post->ID );
//       $category_values = array_values( $category );
//       $last_category = end( $category_values );
//       $cat_parents = rtrim( get_category_parents( $last_category->term_id, true, ',' ), ',' );
//       $cat_parents = explode( ',', $cat_parents );

//       foreach ( $cat_parents as $parent ) {
//         $html .= '<span class="item-cat">' . wp_kses( $parent, wp_kses_allowed_html( 'a' ) ) . '</span>';
//         $html .= $separator;
//       }
//       $html .= '<span class="item-current item-' . $post->ID . '"><span class="bread-current bread-' . $post->ID . '" title="' . esc_attr( get_the_title() ) . '">' . wp_strip_all_tags( get_the_title() ) . '</span></span>';
//     } elseif ( is_singular( 'page' ) ) {

//       if ( $post->post_parent ) {
//         $parents = get_post_ancestors( $post->ID );
//         $parents = array_reverse( $parents );

//         foreach ( $parents as $parent ) {
//           $html .= '<span class="item-parent item-parent-' . esc_attr( $parent ) . '"><a class="bread-parent bread-parent-' . esc_attr( $parent ) . '" href="' . esc_url( get_permalink( $parent ) ) . '" title="' . esc_attr( get_the_title( $parent ) ) . '">' . wp_strip_all_tags( get_the_title( $parent ) ) . '</a></span>';
//           $html .= $separator;
//         }
//       }
//       $html .= '<span class="item-current item-' . $post->ID . '"><span title="' . esc_attr( get_the_title() ) . '"> ' . wp_strip_all_tags( get_the_title() ) . '</span></span>';
//     } elseif ( is_singular( 'attachment' ) ) {

//       $parent_id        = $post->post_parent;
//       $parent_title     = get_the_title( $parent_id );
//       $parent_permalink = esc_url( get_permalink( $parent_id ) );

//       $html .= '<span class="item-parent"><a class="bread-parent" href="' . esc_url( $parent_permalink ) . '" title="' . esc_attr( $parent_title ) . '">' . wp_strip_all_tags( $parent_title ) . '</a></span>';
//       $html .= $separator;
//       $html .= '<span class="item-current item-' . $post->ID . '"><span title="' . esc_attr( get_the_title() ) . '"> ' . wp_strip_all_tags( get_the_title() ) . '</span></span>';
//     } elseif ( is_singular() ) {

//       $post_type         = get_post_type( $post->ID );
//       $post_type_object  = get_post_type_object( $post_type );
//       $post_type_archive = get_post_type_archive_link( $post_type );

//       $html .= '<span class="item-cat item-custom-post-type-' . esc_attr( $post_type ) . '"><a class="bread-cat bread-custom-post-type-' . esc_attr( $post_type ) . '" href="' . esc_url( $post_type_archive ) . '" title="' . esc_attr( $post_type_object->labels->name ) . '">' . wp_strip_all_tags( $post_type_object->labels->name ) . '</a></span>';
//       $html .= $separator;
//       $html .= '<span class="item-current item-' . $post->ID . '"><span class="bread-current bread-' . $post->ID . '" title="' . $post->post_title . '">' . wp_strip_all_tags( $post->post_title ) . '</span></span>';
//     } elseif ( is_category() ) {

//       $parent = get_queried_object()->category_parent;

//       if ( $parent !== 0 ) {

//         $parent_category = get_category( $parent );
//         $category_link   = get_category_link( $parent );

//         $html .= '<span class="item-parent item-parent-' . esc_attr( $parent_category->slug ) . '"><a class="bread-parent bread-parent-' . esc_attr( $parent_category->slug ) . '" href="' . esc_url( $category_link ) . '" title="' . esc_attr( $parent_category->name ) . '">' . esc_html( $parent_category->name ) . '</a></span>';
//         $html .= $separator;
//       }
//       $html .= '<span class="item-current item-cat"><span class="bread-current bread-cat" title="' . $post->ID . '">' . single_cat_title( '', false ) . '</span></span>';
//     } elseif ( is_tag() ) {
//       $html .= '<span class="item-current item-tag"><span class="bread-current bread-tag">' . single_tag_title( '', false ) . '</span></span>';
//     } elseif ( is_author() ) {
//       $html .= '<span class="item-current item-author"><span class="bread-current bread-author">' . get_queried_object()->display_name . '</span></span>';
//     } elseif ( is_day() ) {
//       $html .= '<span class="item-current item-day"><span class="bread-current bread-day">' . get_the_date() . '</span></span>';
//     } elseif ( is_month() ) {
//       $html .= '<span class="item-current item-month"><span class="bread-current bread-month">' . get_the_date( 'F Y' ) . '</span></span>';
//     } elseif ( is_year() ) {
//       $html .= '<span class="item-current item-year"><span class="bread-current bread-year">' . get_the_date( 'Y' ) . '</span></span>';
//     } elseif ( is_archive() ) {
//       $custom_tax_name = get_queried_object()->name;
//       $html .= '<span class="item-current item-archive"><span class="bread-current bread-archive">' . esc_html( $custom_tax_name ) . '</span></span>';
//     } elseif ( is_search() ) {
//       $html .= '<span class="item-current item-search"><span class="bread-current bread-search">'. esc_html( __("Search results for:", "acf") ) . ' ' . get_search_query() . '</span></span>';
//     } elseif ( is_404() ) {
//       $html .= '<span>' . esc_html__( 'Error 404', 'acf' ) . '</span>';
//     } elseif ( is_home() ) {
//       $html .= '<span>' . esc_html( get_the_title( get_option( 'page_for_posts' ) ) ) . '</span>';
//     }

//     $html .= '</div>';
//     $html = apply_filters( 'ct_climate_breadcrumbs_filter', $html );

//     echo wp_kses_post( $html );
//   }
// }







// Breadcrumbs
function custom_breadcrumbs() {
       
    // Settings
    $separator          = '&gt;';
    $breadcrums_id      = 'breadcrumbs';
    $breadcrums_class   = 'breadcrumbs_ul';
    $home_title         = esc_html__( 'Home', 'acf' );

    // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
    $custom_taxonomy    = 'product_cat';
       
    // Get the query & post information
    global $post,$wp_query;
       
    // Do not display on the homepage
    if ( !is_front_page() ) {
       
        // Build the breadcrums
        echo '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';
           
        // Home page
        echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
        //echo '<li class="separator separator-home"> ' . $separator . ' </li>';
           
        if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {
              
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>';
              
        } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {
              
            // If post is a custom post type
            $post_type = get_post_type();
              
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                  
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
              
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                //echo '<li class="separator"> ' . $separator . ' </li>';
              
            }
              
            $custom_tax_name = get_queried_object()->name;
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';
              
        } else if ( is_single() ) {
              
            // If post is a custom post type
            $post_type = get_post_type();
              
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                  
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
              
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                //echo '<li class="separator"> ' . $separator . ' </li>';
              
            }

            // Added by Naimesh Rao
            if($post_type == 'textbooks') {

              // echo "test";

            }
              
            // Get post category info
            $category = get_the_category();
             
            if(!empty($category)) {
              
                // Get last category post is in
                $last_category = end(array_values($category));
                  
                // Get parent any categories and create array
                $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
                $cat_parents = explode(',',$get_cat_parents);
                  
                // Loop through parent categories and store in variable $cat_display
                $cat_display = '';
                foreach($cat_parents as $parents) {
                    $cat_display .= '<li class="item-cat">'.$parents.'</li>';
                    //$cat_display .= '<li class="separator"> ' . $separator . ' </li>';
                }
             
            }
              
            // If it's a custom post type within a custom taxonomy
            $taxonomy_exists = taxonomy_exists($custom_taxonomy);
            if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {
                   
                $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
                $cat_id         = $taxonomy_terms[0]->term_id;
                $cat_nicename   = $taxonomy_terms[0]->slug;
                $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                $cat_name       = $taxonomy_terms[0]->name;
               
            }
              
            // Check if the post is in a category
            if(!empty($last_category)) {
                echo $cat_display;
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                  
            // Else if post is in a custom taxonomy
            } else if(!empty($cat_id)) {
                  
                echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
                //echo '<li class="separator"> ' . $separator . ' </li>';
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
              
            } else {
                  
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                  
            }
              
        } else if ( is_category() ) {
               
            // Category page
            echo '<li class="item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';
               
        } else if ( is_page() ) {
               
            // Standard page
            if( $post->post_parent ){
                   
                // If child page, get parents 
                $anc = get_post_ancestors( $post->ID );
                   
                // Get parents in the right order
                $anc = array_reverse($anc);
                   
                // Parent page loop
                if ( !isset( $parents ) ) $parents = null;
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                    //$parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
                }
                   
                // Display parent pages
                echo $parents;
                   
                // Current page
                echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';
                   
            } else {
                   
                // Just display current page if not parents
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';
                   
            }
               
        } else if ( is_tag() ) {
               
            // Tag page
               
            // Get tag information
            $term_id        = get_query_var('tag_id');
            $taxonomy       = 'post_tag';
            $args           = 'include=' . $term_id;
            $terms          = get_terms( $taxonomy, $args );
            $get_term_id    = $terms[0]->term_id;
            $get_term_slug  = $terms[0]->slug;
            $get_term_name  = $terms[0]->name;
               
            // Display the tag name
            echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';
           
        } elseif ( is_day() ) {
               
            // Day archive
               
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            //echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
               
            // Month link
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
            //echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';
               
            // Day display
            echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';
               
        } else if ( is_month() ) {
               
            // Month Archive
               
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            //echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
               
            // Month display
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';
               
        } else if ( is_year() ) {
               
            // Display year archive
            echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';
               
        } else if ( is_author() ) {
               
            // Auhor archive
               
            // Get the author information
            global $author;
            $userdata = get_userdata( $author );
               
            // Display author name
            echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';
           
        } else if ( get_query_var('paged') ) {
               
            // Paginated archives
            echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';
               
        } else if ( is_search() ) {
           
            // Search results page
            echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';
           
        } elseif ( is_404() ) {
               
            // 404 page
            echo '<li>' . esc_html__( 'Error 404', 'acf' ) . '</li>';

        } 
       
        echo '</ul>';
           
    }
       
}