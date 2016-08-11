window.requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame || function(f) {
    return setTimeout(f, 1000 / 60)
}

jQuery(document).ready(function() {

    // Sticky Header

    var $body = jQuery('body'),
        $target = jQuery('#scroll-target'),
        targetoffsetTop,
        resizetimer,
        stickyclass = 'sticky' //class to add to BODY when header should be sticky

    function updateCoords() {
        targetoffsetTop = $target.offset().top
    }

    function makesticky() {
        var scrollTop = jQuery(document).scrollTop()
        if (scrollTop >= targetoffsetTop) {
            if (!$body.hasClass(stickyclass)) {
                $body.addClass(stickyclass);
            }
        } else {
            if ($body.hasClass(stickyclass)) {
                $body.removeClass(stickyclass);
            }
        }
    }

    updateCoords();

    jQuery(window).on('scroll', function() {
        requestAnimationFrame(makesticky);
    });

    jQuery(window).on('resize', function() {
        clearTimeout(resizetimer);
        resizetimer = setTimeout(function() {
            $body.removeClass(stickyclass);
            updateCoords();
            makesticky();
        }, 50);
    });

    // Parallax Scrolling

    var $window = jQuery(window); //You forgot this line in the above example

    jQuery('div[data-type="background"]').each(function() {
        var $bgobj = jQuery(this); // assigning the object
        jQuery(window).scroll(function() {
            var yPos = -($window.scrollTop() / $bgobj.data('speed'));
            // Put together our final background position
            var coords = '50% ' + yPos + 'px';
            // Move the background
            $bgobj.css({
                'background-position': coords
            });
        });
    });

    // Smooth Scrolling

    jQuery("nav li a").click(function(evn){
        evn.preventDefault();
        jQuery('html,body').scrollTo(this.hash, this.hash);
    });

  // Active menu highlight

  var aChildren = jQuery("nav li").children(); // find the a children of the list items
   var aArray = []; // create the empty aArray
   for (var i=0; i < aChildren.length; i++) {
       var aChild = aChildren[i];
       var ahref = jQuery(aChild).attr('href');
       aArray.push(ahref);
   } // this for loop fills the aArray with attribute href values

   jQuery(window).scroll(function(){
       var windowPos = jQuery(window).scrollTop(); // get the offset of the window from the top of page
       var windowHeight = jQuery(window).height(); // get the height of the window
       var docHeight = jQuery(document).height();

       for (var i=0; i < aArray.length; i++) {
           var theID = aArray[i];
           var divPos = jQuery(theID).offset().top; // get the offset of the div from the top of page
           var divHeight = jQuery(theID).height(); // get the height of the div in question
           if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
               jQuery("a[href='" + theID + "']").addClass("nav-active");
           } else {
               jQuery("a[href='" + theID + "']").removeClass("nav-active");
           }
       }

       if(windowPos + windowHeight == docHeight) {
           if (!jQuery("nav li:last-child a").hasClass("nav-active")) {
               var navActiveCurrent = jQuery(".nav-active").attr("href");
               jQuery("a[href='" + navActiveCurrent + "']").removeClass("nav-active");
               jQuery("nav li:last-child a").addClass("nav-active");
           }
       }
   });
});
