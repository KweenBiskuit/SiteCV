$(function() {

	  $('a[href*=#]:not([href=#])').click(function() {
	  	console.log('location.pathname = ' + location.pathname)

// location.pathname.replace(/^\//,'')
		var locationShort = location.pathname.slice(0,-9);
		console.log('locationShort = ' + locationShort);
	    if ((location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) 

	    || (locationShort.replace(/^\//,'') == locationShort.replace(/^\//,'') && location.hostname == this.hostname) )

	    {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1350);
	        return false;
	      }
	    }
	  });

});

 