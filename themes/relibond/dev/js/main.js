import $ from 'jquery';
import inViewport from 'in-viewport';

$(document).ready(function($) {

  const tablet = 768;

  // Animér scroll til #-link
  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });

  // Fix menu ved scroll over bestemt punkt
  // $( window ).on( 'scroll', () => {
  //   setTimeout( () => {
  //     const hasFixedClass = $( '.nav' ).hasClass( 'nav-fixed' );
  //     if ( $( window ).scrollTop() > 500 && !hasFixedClass ) {
  //       $( '.nav' ).removeClass( 'nav-shown' ); // Might have been put on through window resize (see function below)
  //       $( '.nav' ).addClass( 'nav-fixed' );
  //     } else if (  ) {
  //       $( '.nav' ).removeClass( 'nav-fixed' );
  //     }
  //   }, 300);
  // });

  // Fix menu ved scroll opad
  let scrollTop = 0;
  $( window ).on( 'scroll', () => {
    setTimeout( () => {
      const newScrollTop = $( window ).scrollTop();
      const hasFixedClass = $( '.nav' ).hasClass( 'nav-fixed' );
      if ( newScrollTop < scrollTop && !hasFixedClass ) {
        $( '.nav' ).removeClass( 'nav-shown' ); // Might have been put on through window resize (see function below)
        $( '.nav_open' ).removeClass( 'open' );
        $( '.nav' ).removeClass( 'nav-hideAfterFixed' );
        $( '.nav' ).addClass( 'nav-fixed' );
        $( '.nav_open' ).addClass();
      } else if ( newScrollTop > scrollTop ) {
        $( '.nav' ).removeClass( 'nav-fixed' );
        $( '.nav' ).addClass( 'nav-hideAfterFixed' );
      }
      scrollTop = $( window ).scrollTop();
    }, 50);
  });

  // Opdatér aktivt link i nav med .active state
  $( '.nav a' ).on( 'click', function() {
    $( '.nav' ).find( '.active' ).removeClass( 'active' );
    $(this).addClass( 'active' );
  });

  const showMobileMenu = () => {
    $( '.nav' ).removeClass( 'nav-hidden' );
    $( '.nav' ).addClass( 'nav-shown' );
  };

  const hideMobileMenu = () => {
    $( '.nav' ).removeClass( 'nav-shown' );
    $( '.nav' ).addClass( 'nav-hidden' );
  };

  const toggleMobileMenu = () => {
    $( '.nav' ).toggleClass( 'nav-shown' );
    $( '.nav' ).toggleClass( 'nav-hidden' );
  };

  // Luk mobilmenu, når der trykkes på link, menuen selv eller knappen til luk
  $( '.nav, .nav li a' ).on( 'click', () => {
    if ( $( window ).width() <= tablet ) {
      $( '.nav_open' ).toggleClass( 'open' );
      hideMobileMenu();
    }
  });

  // Burger/kryds-animation + vis mobilmenu ved klik på knak til det
  $( '.nav_open' ).on( 'click', () => {
      $( '.nav_open' ).toggleClass( 'open' );
      toggleMobileMenu();
  });

  // Vis/gem mobil hhv. desktopmenu v. resize
  $( window ).on( 'resize', () => {
    setTimeout( () => {
      $( '.nav_open' ).removeClass( 'open' );
      if ( $( window ).width() > tablet ) {
        showMobileMenu();
      } else {
        hideMobileMenu();
      }
    }, 1000);
  });

  // Fuldskærmsvideo
	$(function(){
	  $('#welcome_video').css({
	  	width: $(window).innerWidth() + 'px',
	  	height: $(window).innerWidth()*0.566 + 'px'
	  });

	  // Behold fuld skærm ved ændring af vinduestr.
	  $(window).resize(function(){
	    $('#welcome_video').css({
	    	width: $(window).innerWidth() + 'px',
	    	height: $(window).innerWidth()*0.566 + 'px'
	    });
	  });
	});

  // Lazyload advantages
  const fadeInAndUpIfInViewport = ( elem ) => {
    $( window ).on( 'scroll', () => {
      setTimeout( () => {
        const advantage = document.getElementById( elem );
        const advantageInViewport = inViewport( advantage, { offset: -300 } );
        if ( advantageInViewport ) {
          $( '#' + elem ).addClass( 'fadeInAndUp' );
        }
      }, 100);
    });
  }
  fadeInAndUpIfInViewport( 'page-technology_advantage-1' );
  fadeInAndUpIfInViewport( 'page-technology_advantage-2' );
  fadeInAndUpIfInViewport( 'page-technology_advantage-3' );

});
