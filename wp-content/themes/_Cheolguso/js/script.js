jQuery(document).ready(function($) {
	'use strict';
    
    cgs_contactform7_tip();
    cgs_browser_check();
    cgs_comment_form();
    
    $(window).load(function(){
    	'use strict';
    	
   		cgs_page_about_skill_bar();
   	});
   	
   	
   	
   	
    /* Functions ---------------------------------------------------------------------------------------------------------------------*/
    /* browser check */
    function cgs_browser_check(){
    	"use strict";
    	
	    if(jQuery.browser.msie && jQuery.browser.version <= 8){
	        $("html").addClass("ie8");
	    }
	}
	
	
    /*--------------------------------------------------------------------------------------------------------------------------------*/
    /* about skill bar */
    function cgs_page_about_skill_bar(){
    	"use strict";
    	
	    $(".skill_bar").each(function(){
	        var bar = $(this).attr("data-bar");
	 
	        $(this).animate({
	            "width" : bar + "%"
	        }, 1500);
	    });
    }
    
    
    /*--------------------------------------------------------------------------------------------------------------------------------*/
    /* Contact form 7 */
	function cgs_contactform7_tip(){
		"use strict";
		
	    $(".wpcf7-form-control-wrap").mouseover(function(){
	        $(".wpcf7-not-valid-tip", this).fadeOut();
	    });
    }
    
    
    
    /*--------------------------------------------------------------------------------------------------------------------------------*/
    /* comment */
    function cgs_comment_form(){
        "use strict";
        
        var placeholderTarget = $(".comment-form input[type=text], .comment-form textarea");
        
        placeholderTarget.each(function(){
           if($(this).val() != ""){
                $(this).siblings("label").fadeOut("fast");
           }
        });
        
        placeholderTarget.focus(function(){
            $(this).siblings("label").fadeOut("fast");
        });
     
        placeholderTarget.focusout(function(){
            if($(this).val() == ""){
                $(this).siblings("label").fadeIn("fast");
            }
        });
    }
    
    
    
});