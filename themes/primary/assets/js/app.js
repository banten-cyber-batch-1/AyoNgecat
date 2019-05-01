$(document).ready(function() {

    // Attach fastclick
    FastClick.attach(document.body);

    // Activate tooltip bootstrap
    $('[data-toggle=tooltip]').tooltip({
        container: 'body',
    });

    // Add your own custom script
    // ...
    var navbarTrans = $('header').hasClass('navbar-inverse');

    if(navbarTrans) {
        $(document).on('scroll', function() {
            if(navbarTrans && window.scrollY >= 250) {
                $('header').addClass('navbar-default').removeClass('navbar-inverse');
                navbarTrans = false;
            } else if(! navbarTrans && window.scrollY < 250) {
                $('header').addClass('navbar-inverse').removeClass('navbar-default');
                navbarTrans = true;
            }
        })
    }
});
