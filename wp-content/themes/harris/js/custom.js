// @codekit-prepend 'waypoints.js'
// @codekit-prepend 'slick.js'
// @codekit-prepend 'lity.js'
// @codekit-prepend 'modernizr-webp.js'
// @codekit-prepend 'underscore.js'

jQuery(document).ready(function($){
	

	
	 /* Modernizr - check if browser supports webp for section_one. 
     --------------------------------------------------------------------------------------- */
    
    // add data-webp and data-jpg to images in section one and you're gucci
    
     Modernizr.on('webp', function (result) {
	    
	    $('#section_one img').each(function () {
	    
				if (result) {
    
					if ($(this).attr('data-webp')) {
          
          	var img = $(this).data('webp');
          
						$(this).attr('src', img);
        	
        	}
        	
        }
  
	 			else {
		 			
		 			if ($(this).attr('data-jpg')) {
          
          	var img = $(this).data('jpg');
          
						$(this).attr('src', img);
        	
        	}
    
    		}
  		
  		});
  		
  		
  		// background images (one time load, does not reflect media queries or window width..yet)
  		
  		if (result) {
	  		
	  		var sectionOne = '#section_one';
	  		
	  		if ($(sectionOne).attr('data-webpbg')) {
		  		
		  		var imgBg = $(sectionOne).data('webpbg');
		  		
		  		$(sectionOne).css('background-image', 'url(' + imgBg + ')');
		  		
	  		}
	  		
	  	}
	  	
	  	
	  	else {
		  	
		  	if ($('#section_one').attr('data-jpgbg')) {
		  		
		  		var imgBg = $('#section_one').data('jpgbg');
		  		
		  		$('#section_one').css('background-image', 'url(' + imgBg + ')');
		  		
	  		}
		  	
	  	}
  		
			// console.log(result);
	
		});
		
		
		
		/* Load Images - Call function when you reach the a section with images using waypoints
       BG image - <div data-src=""></div>   ,   Image - <img data-src="">
      --------------------------------------------------------------------------------------- */

    function loadImages() {
      
      // images
      
      $('img').each(function () {
        
        if ($(this).attr('data-src')) {
          
          var img = $(this).data('src');
          
          $(this).attr('src', img);
        
        }
      
      });

      // background images
      
      $('div, section').each(function () {
       
        if ($(this).attr('data-src')) {
          
          var backgroundImg = $(this).data('src');
          
          $(this).css('background-image', 'url(' + backgroundImg + ')');
        
        }
      
      });

      console.log('images loaded');
    }

    createWaypoint('section_one', null, null, -1, loadImages, false);
		createWaypoint('internal_main', null, null, -1, loadImages, false);







     /* Wistia - Call function when script needs to be loaded either by hover or waypoints
     --------------------------------------------------------------------------------------- */

    //function wistiaLoad() {
     // jQuery.getScript('https://fast.wistia.com/assets/external/E-v1.js', function(data, textStatus, jqxhr) {
        //console.log('wistia load:', textStatus); // Success
     // });
   // }

    // examples:

    // jQuery(".banner-box-1").one("mouseenter", function(e){
    //   wistiaLoad();
    // });

    // createWaypoint('section-1', null, null, '100%', wistiaLoad, false)
    
    
     // loads wistia on click to improve initial page speed
    $('.wistia_embed').click(function () {
        //make sure to only load if Wistia is not already loaded
        let self = this
        if (typeof Wistia === 'undefined') {
            jQuery.getScript("https://fast.wistia.com/assets/external/E-v1.js", function (data, textStatus, jqxhr) {
                // We got the text but, it's possible parsing could take some time on slower devices. Unfortunately, js parsing does not have
                // a hook we can listen for. So we need to set an interval to check when it's ready 
                var interval = setInterval(function () {
                    if (jQuery(self).attr('id') && window._wq) {
                        var videoId = jQuery(self).attr('id').split('-')[1];
                        window._wq = window._wq || [];
                        _wq.push({
                            id: videoId,
                            onReady: function (video) {
                                jQuery(self).find('.wistia_click_to_play').eq(0).trigger('click');
                            }
                        });
                        clearInterval(interval);
                    }
                }, 100)
            });
        }
    });

   
    
    
    
    
    



    /* Smooth Scroll down to section on click (<a href="#id_of_section_to_be_scrolled_to">)
      --------------------------------------------------------------------------------------- */

    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });

		
		
		/* Waypoints
     --------------------------------------------------------------------------------------- */


    function createWaypoint(triggerElementId, animatedElement, className, offsetVal, functionName, reverse) {
      if(jQuery('#' + triggerElementId).length) {
        var waypoint = new Waypoint({
          element: document.getElementById(triggerElementId),
          handler: function (direction) {
            if (direction === 'down') {
              jQuery(animatedElement).addClass(className);

              if (typeof functionName === 'function') {
                functionName();
                this.destroy();
              }

            } else if (direction === 'up') {
              if (reverse) {
                jQuery(animatedElement).removeClass(className);
              }

            }
          },
          offset: offsetVal
          // Integer or percent
          // 500 means when element is 500px from the top of the page, the event triggers
          // 50% means when element is 50% from the top of the page, the event triggers
        });
      }
    }
		
		
		createWaypoint('sec_three_ani', '#sec_three_ani', 'visible', 200, null, true);
		
		createWaypoint('sec_five_ani', '#sec_five_ani', 'visible', 300, null, true);
		
		createWaypoint('sec_seven_ani', '#sec_seven_ani', 'visible', 300, null, true);
    
    createWaypoint('about_right_ani', '#about_right_ani', 'visible', 200, null, true);
		
		

		
		/* Live Chat - Call function when script needs to be loaded either by hover, click or waypoints
   --------------------------------------------------------------------------------------------------- */ 
   
   
   
   function livechatLoad() {
	   if(my_data.live_chat) {
      jQuery.getScript(my_data.live_chat, function(data, textStatus, jqxhr) {
        console.log('Live Chat load:', textStatus); // Success
      });
      // alert( my_data.live_chat);
      }
    }
   
   
   // createWaypoint('section_one', null, null, -100, livechatLoad, false);
   // createWaypoint('internal_trigger', null, null, -100, livechatLoad, false);




        
    



/* Slick Carousel ( http://kenwheeler.github.io/slick/ )
--------------------------------------------------------------------------------------- */


/*
$('.sec_three_slider').slick({
  infinite: true,
  slidesToShow: 6,
  slidesToScroll: 6,
	arrows:true,
	prevArrow:".arrow_left",
	nextArrow:".arrow_right",
	responsive: [
    {
      breakpoint: 1450,
      settings: {
      slidesToShow: 5,
      slidesToScroll: 5,
     }
   },
   {
      breakpoint: 1100,
      settings: {
      slidesToShow: 3,
      slidesToScroll: 3,
      dots:true,
     }
   },
   {
      breakpoint: 767,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      dots:true,
     }
   }
	]
 });
 
*/



$('.sec_two_slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  mobileFirst:true,
	dots:true,
	arrows:false,
	autoplay: true,
  autoplaySpeed: 4500,
	responsive: [
		{
      breakpoint: 768,
      settings: {
      slidesToShow: 1,
      arrows:true,
      dots:true,
      prevArrow:".sec_two_arrow_left",
			nextArrow:".sec_two_arrow_right",
      slidesToScroll: 1,
     }
   },
    {
      breakpoint: 1040,
      settings: {
      slidesToShow: 2,
      arrows:true,
      prevArrow:".sec_two_arrow_left",
			nextArrow:".sec_two_arrow_right",
      slidesToScroll: 2,
     }
   },
   {
      breakpoint: 1067,
      settings: {
      slidesToShow: 2,
      arrows:true,
      dots:false,
      prevArrow:".sec_two_arrow_left",
			nextArrow:".sec_two_arrow_right",
      slidesToScroll: 2,
     }
   },
   {
      breakpoint: 1450,
      settings: "unslick"
    }
	]
 });
 
 
 
 
 $('.sec_four_cr_wrapper').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  mobileFirst:true,
	dots:true,
	arrows:false,
	autoplay: true,
  autoplaySpeed: 4500,
	responsive: [
   {
      breakpoint: 990,
      settings: "unslick"
    }
	]
 });
 
 
 $('.sec_six_test_wrapper').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  mobileFirst:true,
  adaptiveHeight: true,
	dots:false,
	arrows:false,
	//autoplay: true,
  //autoplaySpeed: 4500,
	responsive: [
   {
      breakpoint: 990,
      settings: "unslick"
    }
	]
 });
 
 
 
 
 
 
 
 function crHov() {
	 
	 $(this).find('.sec_four_hov').toggleClass('active');
	 
 }
 
 
 if ($(window).width() > 990) {
	
		$('.sec_four_cr').off('click', crHov);
	
	}
 
 
 
	if ($(window).width() <= 990) {
	
		$('.sec_four_cr').off().on('click', crHov);
	
	}

	
	$(window).resize(_.debounce(function() {
		
		if ($(window).width() > 990) {
	
			$('.sec_four_cr').off('click', crHov);
	
		}
 
 
		if ($(window).width() <= 990) {
	
			$('.sec_four_cr').off().on('click', crHov);
	
		}
	
	}, 100)); // timeouts functions
 
 
 
 $('.about_slider').slick({
  infinite: true,
  slidesToShow: 5,
  slidesToScroll: 5,
	dots:true,
	arrows:false,
	responsive: [
    {
      breakpoint: 1450,
      settings: {
      slidesToShow: 4,
      slidesToScroll: 4,
     }
   },
   {
      breakpoint: 1250,
      settings: {
      slidesToShow: 3,
      slidesToScroll: 3,
     }
   },
   {
      breakpoint: 850,
      settings: {
      slidesToShow: 2,
      slidesToScroll: 2,
     }
   },
   {
      breakpoint: 633,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
     }
   }
	]
 });

 
 
// macy http://macyjs.com/

/*
var macyInstance = Macy({
  container: '.testimonials_wrapper',
	columns: 3,
	margin:49,
	breakAt: {
        1450: 2,
        1066:1
  }
});
*/


// not found go back button


function goBack() {
 	window.history.back();
}
	
$('span.go_back').on('click', function(e) {
	
	 goBack();
  
});

/* Remove "#" from menu anchor items to avoid jump to the top of the page
--------------------------------------------------------------------------------------- */


$("ul > li.menu-item-has-children > a[href='#']").removeAttr("href");


// footer form


function labelHide() {
	
	$('.form_wrapper .gform_wrapper ul li input, .form_wrapper .gform_wrapper ul li textarea').on('click', function(e) {
  
  	$(this).parent().siblings('label').hide();
  
	});

}


labelHide();


function inputEmpty() {
	
	$('.form_wrapper .gform_wrapper ul li input, .form_wrapper .gform_wrapper ul li textarea').blur(function() {
   
   	if( !this.value ) {
    
    //$(this).parents('p').addClass('warning');
    
    	$(this).parent().siblings('label').show();
   
			}
			
		
   
	});
	
}


inputEmpty();


// loads functions again after ajax gform validation 

$(document).bind('gform_post_render', function(){
	
	labelHide();
	
	inputEmpty();
	
	var inputCheck = $('.form_wrapper .gform_wrapper ul li input, .form_wrapper .gform_wrapper ul li textarea');
	
	
	$(inputCheck).each(function(){
   
   if($(this).val() ) {
    
    $(this).parent().siblings('label').hide();
   
   }
	
	});

	
});




// cr count text if it gets to be longer than three lines, if so add a class to adjust the height and disable flexbox


$('.test_large_quote').each(function(){
    
 var textCount = $(this).text().length;

 if(textCount >= 48) {
	 
	 $(this).addClass('long_count');
	 
 }
 
});



// sidebar 


$(".sidebar_box h3, .sidebar_box ul > li.menu-item-has-children > a").append("<span class='dropdown_arrow'></span>");


$('.sidebar_box.blog_cat h3, .sidebar_box.blog_archive h3').addClass('active');


$('.sidebar_box ul > li.menu-item-has-children > a').on('click', function(e) {
	
	$(this).toggleClass('active');
  
	$(this).next('ul.sub-menu').slideToggle(300);
	
	$(this).parent().parent().parent().parent().parent().toggleClass('padding_hack');
	
	$(this).parent().parent().parent().parent().toggleClass('padding_hack');

});


$('.sidebar_box h3').on('click', function(e) {
	
	$(this).parent().parent().toggleClass('active');
  
  $(this).toggleClass('active');
  
  $(this).next('div').find('ul.menu').slideToggle(300);
  
  $(this).next('ul').slideToggle(300);


});


// nav 


// active states


$('nav ul.menu > li.current-menu-ancestor > a, nav ul.menu > li.current-menu-ancestor > ul.sub-menu > li.current-menu-ancestor > a, .sidebar_box ul.menu > li.current-menu-ancestor > a').addClass('active');
	
	
$('nav ul.menu > li.menu-item-has-children > ul.sub-menu > li.menu-item-has-children > a').on('click', function(e) {
  
  $(this).toggleClass('active');
  
  $(this).next('ul.sub-menu').slideToggle(300);

});

var pgurl = window.location.href;
	
	$(".sidebar_box ul li").each(function(){
  
  if($(this).find('a').attr("href") == pgurl)
    
    $(this).addClass("active");
	
	})


$('.menu_wrapper').on('click', function(e) {
  
  $('nav.nav_tablet').toggleClass('active');
  
  $('.menu_wrapper').toggleClass('active');
  
});


$('.sidebar_box.blog_cat ul li.active, .sidebar_box.blog_archive ul li.active').parent().show();	


function navDesktop() {
		
	$('nav').addClass('nav_desktop');
		
	$('nav').removeClass('nav_tablet');
		
}


function navTablet() {
		
	$('nav').removeClass('nav_desktop');
		
	$('nav').addClass('nav_tablet');
		
}

function topMenu() {
		
	$(this).toggleClass('active');
		
	$(this).next('ul.sub-menu').slideToggle(300);
	
}


if ($(window).width() > 1190) {
	
	navDesktop();
	
	// off
	
	$('nav ul.menu > li.menu-item-has-children > a').off('click', topMenu);
	
}


if ($(window).width() <= 1190) {
	
	navTablet();
	
	$('nav ul.menu > li.menu-item-has-children > a').off().on('click', topMenu);
	
}

$(window).resize(_.debounce(function() {
	
	if ($(window).width() > 1190) {
	
		navDesktop();
		
		// off
		
		$('nav ul.menu > li.menu-item-has-children > a').off('click', topMenu);
	
	}

	if ($(window).width() <= 1190) {
	
		navTablet();
		
		$('nav ul.menu > li.menu-item-has-children > a').off().on('click', topMenu);
	
	}

}, 100)); // timeouts functions

  
}); // document ready