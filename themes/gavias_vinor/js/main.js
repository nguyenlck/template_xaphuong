(function ($) {
   "use strict";
  
   //------- OWL carousle init  ---------------
    jQuery(document).ready(function(){
      function init_carousel_owl(){
        $('.init-carousel-owl').each(function(){
          var items = $(this).data('items') ? $(this).data('items') : 5;
          var items_lg = $(this).data('items_lg') ? $(this).data('items_lg') : 4;
          var items_md = $(this).data('items_md') ? $(this).data('items_md') : 3;
          var items_sm = $(this).data('items_sm') ? $(this).data('items_sm') : 2;
          var items_xs = $(this).data('items_xs') ? $(this).data('items_xs') : 1;
          var loop = $(this).data('loop') ? $(this).data('loop') : true;
          var speed = $(this).data('speed') ? $(this).data('speed') : 200;
          var auto_play = $(this).data('auto_play') ? $(this).data('auto_play') : false;
          var auto_play_speed = $(this).data('auto_play_speed') ? $(this).data('auto_play_speed') : false;
          var auto_play_timeout = $(this).data('auto_play_timeout') ? $(this).data('auto_play_timeout') : 1000;
          var auto_play_hover = $(this).data('auto_play_hover') ? $(this).data('auto_play_hover') : true;
          var navigation = $(this).data('navigation') ? $(this).data('navigation') : false;
          var rewind_nav = $(this).data('rewind_nav') ? $(this).data('rewind_nav') : true;
          var pagination = $(this).data('pagination') ? $(this).data('pagination') : false;
          var mouse_drag = $(this).data('pagination') ? $(this).data('mouse_drag') : true;
          var touch_drag = $(this).data('touch_drag') ? $(this).data('touch_drag') : true;
          if(items == 1 ) items_lg = items_md = items_sm = items_xs = 1;
          $(this).owlCarousel({
              nav: navigation,
              autoplay: auto_play,
              autoplayTimeout: auto_play_timeout,
              autoplaySpeed: auto_play_speed,
              autoplayHoverPause: auto_play_hover,
              navText: [ '<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>' ],
              autoHeight: false,
              loop: loop, 
              dots: pagination,
              rewind: rewind_nav,
              smartSpeed: speed,
              mouseDrag: mouse_drag,
              touchDrag: touch_drag,
              responsive : {
                  0 : {
                    items: 1,
                    nav: false
                  },
                  640 : {
                    items : items_xs
                  },
                  768 : {
                    items : items_sm
                  },
                  992: {
                    items : items_md
                  },
                  1200: {
                    items: items_lg
                  },
                  1400: {
                    items: items
                  }
              }
          });
       }); 
    }

    init_carousel_owl();

  /* ============ Isotope ==============*/
    if ( $.fn.isotope ) {
      $( '.isotope-items' ).each(function() {

        var $el = $( this ),
            $filter = $( '.portfolio-filter a' ),
            $loop =  $( this );

        $loop.isotope();

        $loop.imagesLoaded(function() {
          $loop.isotope( 'layout' );
        });

        if ( $filter.length > 0 ) {

          $filter.on( 'click', function( e ) {
            e.preventDefault();
            var $a = $(this);
            $filter.removeClass( 'active' );
            $a.addClass( 'active' );
            $loop.isotope({ filter: $a.data( 'filter' ) });
          });
        };
      });
    };
    
  });


function scrolltop() {
  var offset = 300;
  var duration = 500;

  jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > offset) {
      jQuery('.return-top').fadeIn(duration);
    } else {
      jQuery('.return-top').fadeOut(duration);
    }
  });

  jQuery('.return-top').click(function(event) {
    event.preventDefault();
    jQuery('html, body').animate({scrollTop: 0}, duration);
    return false;
  });
}
  //===== AOS ============
  $(window).on('load', function(){
    $(document).imagesLoaded(function(){
      setTimeout(function() {
        AOS.init({
          offset: 50,
          disable: 'mobile',
          delay: 100,
        });
      }, 100);
    });
  })
jQuery(document).ready(function () {
  $(document).imagesLoaded( function(){
    $('.gavias-parallax').each(function(){
      $(this).parallax("50%", 0.1);
    });
  })

  scrolltop();
  if ($(window).width() > 780) {
    if ( $.fn.jpreLoader ) {
      var $preloader = $( '.js-preloader' );
      $preloader.jpreLoader({
        autoClose: true,
      }, function() {
        $preloader.addClass( 'preloader-done' );
        $( 'body' ).trigger( 'preloader-done' );
        $( window ).trigger( 'resize' );
      });
    }
  }else{
    $('body').removeClass('js-preloader');
  };

  $('#gva-offcanvas-inner').perfectScrollbar();
  
  // ==================================================================================
  // Offcavas
  // ==================================================================================
  $('#menu-bar').on('click',function(e){
    if($('.gva-offcanvas-inner').hasClass('show-view')){
        $(this).removeClass('show-view');
        $('.gva-offcanvas-inner').removeClass('show-view');
    }else{
        $(this).addClass('show-view');
       $('.gva-offcanvas-inner').addClass('show-view'); 
    }
    e.stopPropagation();
  })

  $('#menu-bar-another').on('click',function(e){
    if($(this).hasClass('show-view')){
      $(this).removeClass('show-view');
      $(this).parent().find('.content-inner').removeClass('show-view');
    }else{
      $(this).addClass('show-view');
      $(this).parent().find('.content-inner').addClass('show-view'); 
    }
    e.stopPropagation();
  })

  $('.close-offcanvas a').on('click', function(e){
    if($('.gva-offcanvas-inner').hasClass('show-view')){
        $('.gva-offcanvas-inner').removeClass('show-view');
        $('#menu-bar').removeClass('show-view');
    }
    e.stopPropagation();
  });


  $('.sidebar').theiaStickySidebar({
		additionalMarginTop: 30,
    minWidth: 992
  });

  var $container = $('.post-masonry-style');
  $container.imagesLoaded( function(){
      $container.masonry({
          itemSelector : '.item-masory',
          gutterWidth: 0,
          columnWidth: 1,
      }); 
  });

  $('.gva-search-region .icon').on('click',function(e){
    if($(this).parent().hasClass('show')){
        $(this).parent().removeClass('show');
    }else{
        $(this).parent().addClass('show');
    }
    e.stopPropagation();
  })

  $('.gva-search-region .close').on('click',function(e){
    $(this).parents('.gva-search-region').removeClass('show');
  });

  $('.gva-account-region .icon').on('click',function(e){
    if($(this).parent().hasClass('show')){
        $(this).parent().removeClass('show');
    }else{
        $(this).parent().addClass('show');
    }
    e.stopPropagation();
  })

  /*========== Click Show Sub Menu ==========*/
  $('.gva-navigation a').on('click','.nav-plus',function(){
      if($(this).hasClass('nav-minus') == false){
          $(this).parent('a').parent('li').find('> ul').slideDown();
          $(this).addClass('nav-minus');
      }else{
          $(this).parent('a').parent('li').find('> ul').slideUp();
          $(this).removeClass('nav-minus');
      }
      return false;
  });

 //==== Customize =====
  $('.gavias-skins-panel .control-panel').click(function(){
      if($(this).parents('.gavias-skins-panel').hasClass('active')){
          $(this).parents('.gavias-skins-panel').removeClass('active');
      }else $(this).parents('.gavias-skins-panel').addClass('active');
  });

  $('.gavias-skins-panel .layout').click(function(){
      $('body').removeClass('wide-layout').removeClass('boxed');
      $('body').addClass($(this).data('layout'));
      $('.gavias-skins-panel .layout').removeClass('active');
      $(this).addClass('active');
      var $container = $('.post-masonry-style');
      $container.imagesLoaded( function(){
          $container.masonry({
              itemSelector : '.item-masory',
              gutterWidth: 0,
              columnWidth: 1,
          }); 
      });
  });


  // ============================================================================
  // Fixed top Menu Bar
  // ============================================================================
  if($('.gv-sticky-menu').length > 0){
    var sticky = new Waypoint.Sticky({
      element: $('.gv-sticky-menu')[0]
    });
  }  

  // ============================================================================
  // Customize
  // ============================================================================
  $('.help .control-panel').click(function(){
    if($(this).parents('.help').hasClass('show')){
      $(this).parents('.help').removeClass('show');
    }else $(this).parents('.help').addClass('show');
  });

  //Fix caption image for gallery post 
  $('.article-detail .post-thumbnail.post-gallery .owl-item .item img').each(function(){
    var $title = $(this).attr('title');
    if($title && $title != undefined){
      $(this).parent().append('<div class="caption">'+$title+'</div>');
    }
  })

});

})(jQuery);
