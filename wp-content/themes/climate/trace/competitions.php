<?php 
/**
* Template Name: Competitions Page
* @package WordPress
* @subpackage Climate Box
* @since Climate Box
*/
get_header(); ?>
<?php 
function checkRole()
{
  $user = wp_get_current_user();
  if ( in_array( 'um_teacher', (array) $user->roles ) ) {
    return true;
  }
  return false;
}
?>

<div id="primary" class="site-content">
  <div id="content" role="main">

    <?php get_header(); ?>
    <div class  ="col-md-12">
      <div class="tab">
        <button class="tablinks" onclick="openTabs(event, 'Competitions')">Competitions</button>
        <?php 
        if(checkRole()){
      //The user has the "author" role
          ?>
          <button class="tablinks" onclick="openTabs(event, 'project-submissions')">Project Submissions</button>
        <?php }?>
      </div>

      <div id="Competitions" class="tabcontent">
        <h3>Competitions</h3>

        <?php echo do_shortcode('[posts_table post_type="competition"]');?>
      </div>
      <?php 
      if(checkRole()){
      //The user has the "author" role
        ?>
        <div id="project-submissions" class="tabcontent">
          <h3>project-submissions</h3>
          <p>Paris is the capital of France.</p>
        </div>
      <?php }?>

    </div>
    <?php get_footer(); ?>


  </div><!-- #content -->
</div><!-- #primary -->



<style>

*{box-sizing:border-box}
.tab{float:left;border:1px solid #ccc;background-color:#f1f1f1;width:30%;height:600px}
.tab button{display:block;background-color:inherit;color:#000;padding:22px 16px;width:100%;border:none;outline:none;text-align:left;cursor:pointer;transition:.3s}
.tab button:hover{background-color:#ddd}
.tab button.active{background-color:#ccc}
.tabcontent{float:left;padding:0 12px;border:1px solid #ccc;width:70%;border-left:none;height:600px}


</style>


<script>
  function openTabs(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>