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
});
