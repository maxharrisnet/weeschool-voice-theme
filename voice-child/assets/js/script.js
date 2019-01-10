<script type="text/javascript">
$(function(){
    $('.esg-media-cover-wrapper').click(function(event){
      event.preventDefault();
      window.location = $(this).find('a.eg-washington-element-1').attr('href');
    });
});

// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 1;
var navbarHeight = $('.single-project .site-header').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 0);

function hasScrolled() {
    var st = $(this).scrollTop();

    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if ((st > lastScrollTop && st > navbarHeight) || (st < $(window).height() )){
        // Scroll Down
        $('.single-project .site-header, .site').removeClass('nav-down').addClass('nav-up');
    }
    else {
        // Scroll Up
        if (st + $(window).height() < $(document).height()) {
            $('.single-project .site-header, .site').removeClass('nav-up').addClass('nav-down');
        }
    }

    lastScrollTop = st;
}

$('.rp-post-nav').append('<a class="view-all-link" href="/dev/xyu/work/">View All</a>');

</script>
