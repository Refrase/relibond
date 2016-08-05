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

  const showMenu = () => {
    $( '.nav' ).removeClass( 'nav-shown' ); // Might have been put on through window resize (see function below)
    $( '.nav_open' ).removeClass( 'open' );
    $( '.nav' ).removeClass( 'nav-hideAfterFixed' );
    $( '.nav' ).addClass( 'nav-fixed' );
  };

  const hideMenu = () => {
    $( '.nav' ).removeClass( 'nav-fixed' );
    $( '.nav' ).addClass( 'nav-hideAfterFixed' );
  };

  // let scrollTop = 0;
  // $( window ).on( 'scroll', () => {
  //   setTimeout( () => {
  //     const newScrollTop = $( window ).scrollTop();
  //     const hasFixedClass = $( '.nav' ).hasClass( 'nav-fixed' );
  //     if ( newScrollTop < scrollTop && !hasFixedClass ) { showMenu(); }
  //     else if ( newScrollTop > scrollTop && newScrollTop > 500 ) { hideMenu(); }
  //     scrollTop = $( window ).scrollTop();
  //   }, 50);
  // });

  // Kombinér fix menu ved scroll opad og fix ved cursor øverst i vindue (virker ikke korrekt endnu)
  // let menuShownByScroll = false;
  // let menuShownByMousePos = false;
  // let scrollTop = 0;
  //
  // $( window ).on( 'scroll', () => {
  //   setTimeout( () => {
  //     const newScrollTop = $( window ).scrollTop();
  //     const hasFixedClass = $( '.nav' ).hasClass( 'nav-fixed' );
  //     if ( newScrollTop > 500 && !menuShownByMousePos ) {
  //       if ( newScrollTop < scrollTop && !hasFixedClass ) {
  //         showMenu();
  //         menuShownByScroll = true;
  //       } else {
  //         hideMenu();
  //         setTimeout( () => {
  //           menuShownByScroll = false;
  //         }, 1600);
  //       }
  //     }
  //     scrollTop = $( window ).scrollTop();
  //   }, 200);
  // });
  //
  // // Fix menu, når mus er øverst i vinduet
  // $( document ).mousemove( (e) => {
  //   setTimeout( () => {
  //     const mousePosFromTop = e.pageY - $(window).scrollTop();
  //     const hasFixedClass = $( '.nav' ).hasClass( 'nav-fixed' );
  //     if ( scrollTop > 500 && !menuShownByScroll ) {
  //       if ( mousePosFromTop < 40 && !hasFixedClass ) {
  //         showMenu();
  //         menuShownByMousePos = true;
  //       } else {
  //         hideMenu();
  //         setTimeout( () => {
  //           menuShownByMousePos = false;
  //         }, 1600);
  //       }
  //     }
  //   }, 200);
  // });

  // Opdatér aktivt link i nav med .active state
  $( '.nav a' ).on( 'click', function() {
    $( '.nav' ).find( '.active' ).removeClass( 'active' );
    $( this ).addClass( 'active' );
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

  // Video with sound load and show + hide
  const isTouchDevice = 'ontouchstart' in document.documentElement;
  const videoUrl = 'https://www.youtube.com/embed/tKQNenGV4ZU?modestbranding=1&start=7&autoplay=1&origin=http://relibond.com'

  $( '.page-welcome_button' ).on( 'click', () => {
    $( '.page-welcome_videoWithSound_wrap' ).toggleClass( 'display-none display-flex fadeIn' );
    setTimeout( () => {
      $( 'body' ).toggleClass( 'overflow-hidden position-fixed' );
      if ( !isTouchDevice ) {
        $( 'body' ).toggleClass( 'margin-right-15' ); // Account for scrollbar
      }
    }, 600 );
    $( '#page-welcome_videoWithSound' ).attr( 'src', videoUrl ); // Set url of youtube
    $( '.page-welcome_title, .nav-wrap' ).addClass( 'display-none' ); // Hidden to avoid problem with these showing in front of movie when played in full screen
  });

  const hideVideoWithSound = () => {
    $( '.page-welcome_videoWithSound_wrap' ).toggleClass( 'display-none display-flex fadeIn' );
    $( 'body' ).toggleClass( 'overflow-hidden position-fixed' );
    if ( !isTouchDevice ) {
      $( 'body' ).toggleClass( 'margin-right-15' ); // Account for scrollbar
    }
    $( '#page-welcome_videoWithSound' ).attr( 'src', '' );
    $( '.page-welcome_title, .nav-wrap' ).removeClass( 'display-none' );
  };

  $( '.page-welcome_videoWithSound_wrap' ).on( 'click', hideVideoWithSound );

  // Hide video with esc
  $( window ).on( 'keydown', (e) => {
    const charCode = e.which || e.keyCode;
    const videoWithSoundActive = $( '.page-welcome_videoWithSound_wrap' ).hasClass( 'display-flex' );
    console.log(charCode);
    if ( videoWithSoundActive && charCode === 27 ) {
      hideVideoWithSound();
    }
  });

  // Lazyloading of elements
  const addClassIfInViewport = ( elemId, className, offset ) => {
    $( window ).on( 'scroll', () => {
      setTimeout( () => {
        const advantage = document.getElementById( elemId );
        const advantageInViewport = inViewport( advantage, { offset: offset } );
        if ( advantageInViewport ) {
          $( '#' + elemId ).addClass( className );
        }
      }, 100);
    });
  }

  const advantages = $( '.page-technology_advantage' );
  for ( let i = 0; i < advantages.length + 1; i++ ) { addClassIfInViewport( 'page-technology_advantage-' + i, 'fadeInAndUp', -200 ); }

  addClassIfInViewport( 'page-perspectives_text', 'page-perspectives_text-inViewport', -300 );

  const partnerLogos = $( '.page-partners_logo_wrap' );
  for ( let i = 0; i < partnerLogos.length + 1; i++ ) { addClassIfInViewport( 'page-partners_logo_wrap-' + i, 'fadeInAndUp', -200 ); }

  const employees = $( '.page-contactAndJobs_employee_wrap' );
  for ( let i = 0; i < employees.length + 1; i++ ) { addClassIfInViewport( 'page-contactAndJobs_employee_wrap-' + i, 'fadeInAndUp', -100 ); }

  // Contact form: Add placeholder to textarea (plugin generated contact form)
  $( '#ninja_forms_field_3' ).attr('placeholder', 'Message');
  $( '.ninja-forms-field' ).attr( 'required', true );

});
