$('document').ready(function() {
	
	var winHeight = $(window).height();
	$('#youtube-video').height(winHeight -70);
	var options = { videoId: 'rPmGtZAUxNs', start: 0 };
	$('#youtube-video').tubular(options);
	// f-UGhWj1xww cool sepia hd
	// 49SKbS7Xwf4 beautiful barn sepia
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

