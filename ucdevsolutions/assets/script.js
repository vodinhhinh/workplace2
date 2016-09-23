 jQuery(document).ready(function($) {
 
    $(".scroll a,  .gototop").click(function(event){   
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top}, 600,'swing');
    $(".scroll li").removeClass('active');
    $(this).parents('li').toggleClass('active');
    });
	
	var pgurl = window.location.href;//.substr(window.location.href.lastIndexOf("/")+1);
	console.log(pgurl);
     $(".nav.navbar-nav li a").each(function(){		 
          if(($(this).attr("href") == pgurl || $(this).attr("href") == '') && $(this).attr("href")!='#')
		  {
			  $(this).parent().addClass("active");
			   $(this).closest('li.dropdown-submenu').addClass("active");
			    $(this).closest('li.rootMenu').addClass("active");
			  
		  }
			
     });
	 
	$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
			event.preventDefault(); 
			event.stopPropagation(); 
			$(this).parent().siblings().removeClass('open');
			$(this).parent().toggleClass('open');
		}); 
	// Setup Youtube video
	var youtubeID = 'rPmGtZAUxNs';
	//For smartphone
	$('#mobileYoutube').attr("src","https://www.youtube.com/embed/"+youtubeID);
	//For desktop
	var winHeight = $(window).height();
	
	//Setup the height of the about page
	var headerHeight = $('.navbar-wrapper').height();
	var footerHeight = $('.footer.spacer.text-center').outerHeight();
	console.log(headerHeight);
	$('#about').height(winHeight - headerHeight - footerHeight);
	

	
	$('#youtube-video').height(winHeight -70);
	$('#background-video').height(winHeight -70);
	var options = { videoId: youtubeID, start: 0 };
	$('#youtube-video').tubular(options);
	// f-UGhWj1xww cool sepia hd
	// 49SKbS7Xwf4 beautiful barn sepia
	
	$('.description').collapser({
		mode: 'lines',
		truncate: 5,
		controlBtn: function(){
			return $(this).parent().find( '.btn-more' );
		},
		showText: 'learn more',
		hideText: 'hide text',
		afterHide: function(){
						var thisbtn = $(this).parent().find( '.btn-more' );
						thisbtn.show();
					}
	});
		
	
	
	
	$('#youtubelist').youtubegallery();
	
	
	
		
		
	// get the first collection
	var $applications = $('#applications');

	// clone applications to get a second collection
	var $data = $applications.clone();

  
	 // attempt to call Quicksand on every form change
	$('#filterVideo li').click(function(){
		$('#filterVideo li').removeClass('active');
		// Get video type when user click
		var liVideo = $(this);
		liVideo.addClass('active');
		var typeVideo = liVideo.find('span').attr('data-type');
		// Create a filter
		if ( typeVideo == 'all')
		{
			var filteredData = $data.find('li');
		}else{
			var filteredData = $data.find('li[data-type=' + typeVideo + ']');
		}
		// finally, call quicksand
		$applications.quicksand(filteredData, {
		  duration: 800,
		  //easing: 'easeInOutQuad'
		},function() {
			// callback code
			// reload youtubeplugin
			$('#youtubelist').youtubegallery();
		});
	});
	
	 $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            full_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your name'
                    }
                }
            },
             company: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please supply your company'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your phone number'
                    },
                    phone: {
                        country: 'US',
                        message: 'Please supply a vaild phone number with area code'
                    }
                }
            },            
            comment: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Please enter at least 10 characters and no more than 200'
                    },
                    notEmpty: {
                        message: 'Please supply a message'
                    }
                    }
                }
            }
        })
		.on('error.form.bv',function(e){
			$('.message').slideUp({ opacity: "show" }, "slow"); // Do something ...
		})
        .on('success.form.bv', function(e) {
            $('.message').hide();
            $('#contact_form').data('bootstrapValidator').resetForm();
            // Prevent form submission
            e.preventDefault();
			
            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
				if(result.checksuccess)
				{
					$('#success_message').slideDown({ opacity: "show" }, "slow"); 
					$('#contact_form')[0].reset();
				}else{
					
					$('#error_message').slideDown({ opacity: "show" }, "slow");	
				}
					
            }, 'json')
			.fail( function(xhr, textStatus, errorThrown) {
				$('#error_message').slideDown({ opacity: "show" }, "slow");	
			});
			
        });
		
	
	
	
	
	
    });






var wow = new WOW(
  {
    boxClass:     'wowload',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true        // act on asynchronously loaded content (default is true)
  }
);
wow.init();




$('.carousel').swipe( {
     swipeLeft: function() {
         $(this).carousel('next');
     },
     swipeRight: function() {
         $(this).carousel('prev');
     },
     allowPageScroll: 'vertical'
 });

// Custom sorting plugin
(function($) {
  $.fn.sorted = function(customOptions) {
    var options = {
      reversed: false,
      by: function(a) { return a.text(); }
    };
    $.extend(options, customOptions);
    $data = $(this);
    arr = $data.get();
    arr.sort(function(a, b) {
      var valA = options.by($(a));
      var valB = options.by($(b));
      if (options.reversed) {
        return (valA < valB) ? 1 : (valA > valB) ? -1 : 0;				
      } else {		
        return (valA < valB) ? -1 : (valA > valB) ? 1 : 0;	
      }
    });
    return $(arr);
  };
})(jQuery);


