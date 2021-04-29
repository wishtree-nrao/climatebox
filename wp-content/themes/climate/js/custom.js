/*
* Template Name:  UNDP Climate
* Author:         Naimesh Rao
* Version:        1.0.0
*/


function Webbkod_ReSize_FN() {
// Header Height
var Header_Height = jQuery("header.site-header").outerHeight(true);
var TB_Sidebar_Height = jQuery("#TBsidebar").outerHeight(true);

// Main Banner Homepage
jQuery(".site-content#content").css("padding-top", Header_Height );
jQuery("#TBsidebarWrap").css("min-height", TB_Sidebar_Height );

}// End Webbkod_ReSize_FN Function




// jQuery Ready
jQuery(document).ready(function($){


// Fixed Header
function header_scroll() {
	var header = jQuery("header.site-header");
	var scroll = jQuery(window).scrollTop();

	if (scroll > 0) {
		jQuery(header).addClass("fixed");
		jQuery(header).removeClass("ontop");
	} else {
		jQuery(header).addClass("ontop");
		jQuery(header).removeClass("fixed");
	}
}





// Add DropArrow in Mobile Menu
jQuery( "<span class='lvl2_click'></span>" ).insertAfter( "ul.navbar-nav > li.menu-item-has-children > a" );
var container = jQuery("ul.navbar-nav");
container.find("li.menu-item-has-children > .lvl2_click").click(function (e) {
	var menu = jQuery(this).parent(".menu-item").toggleClass("open_lvl2_submenu");
	jQuery(".menu-item", container).not(menu).removeClass("open_lvl2_submenu");
	e.preventDefault();
});



// Close Mobile Menu
jQuery(document).click(function(){
	jQuery("#main-nav").removeClass('show');
});

jQuery("ul.navbar-nav").click(function(e){
	e.stopPropagation();
});




// Add Class scrolltop in Header on scroll
jQuery(function() {

	jQuery(window).scroll(function() {
		header_scroll();
	});

	header_scroll();
});



// Call Outer Resize Function
Webbkod_ReSize_FN();



}); // END jQuery Ready






jQuery(window).load(function() {

	jQuery('.ctf-tweets').slick({
		dots: false,
		infinite: false,
		speed: 300,
		slidesToShow: 2,
		slidesToScroll: 2,
		adaptiveHeight: true,
		responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
    ]
});

}); // END jQuery Load



