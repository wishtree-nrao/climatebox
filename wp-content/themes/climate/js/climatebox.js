jQuery(document).ready(function($) {
	jQuery(".showmore").live("click",function() {
		console.log("test");
		var contest = $(this).attr('data-contest');
		$(".newprojects-"+contest).show();
		$(".more-"+contest).hide();
		$(".less-"+contest).show();
	});
	jQuery(".classmore").live("click",function() {
		var contest = $(this).attr('data-contest');
		var paged = $(this).attr('data-paged');
		var totalpages = $(this).attr('data-total-pages'); 
		var morelink = $(this);
		$.ajax({
            type: 'POST',
            url: admin_ajax.ajaxurl,
            data: {
            	action: "climatebox_search_projects", 
            	contest: contest,
            	paged:paged,
        	},
            success: function (data) {
                $(".contest-projects-"+contest).before(data);
               
                if(totalpages == morelink.attr('data-paged')){
                	$(".less-"+contest).show();
                	$(".more-"+contest).removeClass("classmore");
                	$(".more-"+contest).addClass("showmore");
                	$(".more-"+contest).hide();
                }

                 morelink.attr('data-paged', (parseInt(paged)+1));
            },
            
        });
	});
	jQuery(".classless").click(function() {
		var contest = $(this).attr('data-contest');
		$(".newprojects-"+contest).hide();
		$(".more-"+contest).show();
		$(".less-"+contest).hide();
	});

	jQuery("#sortby").on("change",function() {
		jQuery("#climatefilter").submit();
	});

	jQuery("#climatefilter").on("submit",function(e) {
		e.preventDefault();
		$.ajax({
            type: 'POST',
            url: admin_ajax.ajaxurl,
            data: $(this).serializeArray(),
            success: function (data) {
            	$(".section-stories").html(data);
            },
            
        });

	});
	
});