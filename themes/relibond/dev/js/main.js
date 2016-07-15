import $ from 'jquery';

$(document).ready(function($) {

  // Opdatér aktivt link i nav med .active state
  $( '.nav a' ).on( 'click' , function() {
    $( '.nav' ).find( '.active' ).removeClass( 'active' );
    $(this).addClass( 'active' );
  });

  // Fjern aktivt stadie for links ved tryk på 'Relibond'
  $( '.navbar-brand' ).on( 'click' , function() {
    $( '.nav' ).find( '.active' ).removeClass( 'active' );
  });

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

  // Luk dropdown responsive nav, når der trykkes på link
  $( '.navbar-nav a' ).click(function() {
      var navbarToggle = $( '.navbar-toggle' );
      if ( navbarToggle.is( ':visible' ) ) {
          navbarToggle.trigger( 'click' );
      }
  });
  // ... og når man klikker udenfor dropdown-menuen
  $(document).on('click',function(){
    var navbarToggle = $( '.navbar-toggle' );
    if ( navbarToggle.is( ':visible' ) ) {
      $( '.collapse' ).collapse( 'hide' );
    }
  });

});
