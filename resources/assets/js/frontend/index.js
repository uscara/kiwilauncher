$(document).ready(function(event) {
    var mobile_maxwidth = 752;
    var full_frame_ofs_h = 5;
	
	// initialize block height
	// // var landing_graphic = $("#landing-graphic");
	// // if (verge.viewportW() <= mobile_maxwidth) {
	// // 	landing_graphic.css("height", "auto");
	// // }
	// // else {
	// // 	updated_h = verge.viewportH();
	// // 	min_h = parseInt(landing_graphic.css("min-height"));
 // //    	if (min_h > updated_h) {
 // //    		landing_graphic.css("height", min_h + full_frame_ofs_h);
 // //    	}
 // //    	else {
 // //    		landing_graphic.css("height", verge.viewportH() + full_frame_ofs_h);
 // //    	}
	// // }
    
 // //    // content resize
 // //    $(window).resize(function(event) {
 // //    	if (verge.viewportW() <= mobile_maxwidth) {
	// // 		landing_graphic.css("height", "auto");
	// // 	}
	// // 	else {
	// // 		updated_h = verge.viewportH();
	// //     	min_h = parseInt(landing_graphic.css("min-height"));
	// //     	if (min_h > updated_h) {
	// //     		landing_graphic.css("height", min_h + full_frame_ofs_h);
	// //     	}
	// //     	else {
	// //     		landing_graphic.css("height", verge.viewportH() + full_frame_ofs_h);
	// //     	}
	// // 	}
 //    });
    
    
    // Figure hover effects
    /*$(".sltd-work-figure").mouseenter(function(event) {
        $(this).closest("li").siblings("li").find(".sltd-work-figure .figure-layer").addClass("reveal");
    });
    
    $(".sltd-work-figure").mouseleave(function(event) {
        $(".sltd-workr-figure .figure-layer").removeClass("reveal");
    });*/
	$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});
});