import $ from 'jquery';

$(document).ready(function($) {

  const tablet = 768;

  // Animér scroll til #-link
  $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });

  // Opdatér aktivt link i nav med .active state
  $( '.nav a' ).on( 'click', function() {
    $( '.nav' ).find( '.active' ).removeClass( 'active' );
    $(this).addClass( 'active' );
  });

  // Fjern aktivt stadie for links ved tryk på 'Relibond'
  $( '.navbar-brand' ).on( 'click', function() {
    $( '.nav' ).find( '.active' ).removeClass( 'active' );
  });

  const showMobileMenu = () => {
    console.log('show');
    $( '.nav, .nav_close' ).removeClass( 'nav-hidden' );
    $( '.nav, .nav_close' ).addClass( 'nav-shown' );
  };

  const hideMobileMenu = () => {
    console.log('hide');
    $( '.nav, .nav_close' ).removeClass( 'nav-shown' );
    $( '.nav, .nav_close' ).addClass( 'nav-hidden' );
  };

  // Luk mobilmenu, når der trykkes på link, menuen selv eller knappen til luk
  $( '.nav, .nav li a, .nav_close' ).on( 'click', () => {
    if ( $( window ).width() <= tablet ) {
      hideMobileMenu();
    }
  });

  // Vis mobilmenu ved klik på knak til det
  $( '.nav_open' ).on( 'click', () => {
    if ( $( window ).width() <= tablet ) {
      showMobileMenu();
    }
  });

  // Vis/gem mobil hhv. desktopmenu v. resize
  $( window ).on( 'resize', () => {
    setTimeout( () => {
      if ( $( window ).width() > tablet ) {
        showMobileMenu();
      } else {
        hideMobileMenu();
      }
    }, 1000);
  });

});
