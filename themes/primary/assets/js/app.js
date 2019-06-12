$(document).ready(function() {

    // Attach fastclick
    FastClick.attach(document.body);

    // Activate tooltip bootstrap
    $('[data-toggle=tooltip]').tooltip({
        container: 'body',
    });

    // Add your own custom script
    // ...
    var navbarTrans = $('header').hasClass('navbar-primary');

    if(navbarTrans) {
        $(document).on('scroll', function() {
            if(navbarTrans && window.scrollY >= 150) {
                $('header').addClass('navbar-default').removeClass('navbar-primary');
                navbarTrans = false;
            } else if(! navbarTrans && window.scrollY < 250) {
                $('header').addClass('navbar-primary').removeClass('navbar-default');
                navbarTrans = true;
            }
        })
    }
});
