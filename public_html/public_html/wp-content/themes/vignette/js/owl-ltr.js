jQuery(document).ready(function($) {
  jQuery(".wc-carousel-viva ul").addClass("owl-carousel za-owl-carousel columns-1");
  jQuery(".wc-carousel-viva > div").removeAttr("data-block-name");
  jQuery(".wc-carousel-viva > div").removeClass();
  jQuery(".wc-carousel-viva > div").addClass("woocommerce columns-1");
  var $eowl = $('.za-owl-carousel');
  $eowl.children().each( function( index ) {
    jQuery(this).attr( 'data-position', index );
  });
  $eowl.owlCarousel({
    center: false,
    nav:true,
    dots:false,
    loop: true,
    autoplay:false,
    autoplayTimeout:3500,
    items: '3',
    margin:20,
    navText: [""],
    responsive:{
      0:{
        items:1
      },
      700:{
        items:2
      },
      1000:{
        items: 4
      }
    }
  });
  $(document).on('click', '.listing-item', function() {
    $eowl.trigger('to.za.owl.carousel', $(this).data( 'position' ) );
  });
});

jQuery(document).ready(function($) {
  jQuery(".wc-carousel-viva-b ul").addClass("owl-carousel vivab-owl-carousel columns-1");
  jQuery(".wc-carousel-viva-b > div").removeAttr("data-block-name");
  jQuery(".wc-carousel-viva-b > div").removeClass();
  jQuery(".wc-carousel-viva-b > div").addClass("woocommerce columns-1");
  var $eowl = $('.vivab-owl-carousel');
    $eowl.children().each( function( index ) {
      jQuery(this).attr( 'data-position', index );
    });

    $eowl.owlCarousel({
      center: false,
      nav:true,
      dots:false,
      loop: true,
      autoplay:false,
      autoplayTimeout:3500,
      items: '2',
      margin:20,
      navText: [""],
      responsive:{
        0:{
            items:1
        },
        700:{
            items:2
        },
        1000:{
            items: 4
        }
      }
    });
  $(document).on('click', '.listing-item', function() {
    $eowl.trigger('to.vivab.owl.carousel', $(this).data( 'position' ) );
  });
});

jQuery(document).ready(function($) {
  jQuery(".wc-carousel-viva-c ul").addClass("owl-carousel vivac-owl-carousel columns-1");
  jQuery(".wc-carousel-viva-c > div").removeAttr("data-block-name");
  jQuery(".wc-carousel-viva-c > div").removeClass();
  jQuery(".wc-carousel-viva-c > div").addClass("woocommerce columns-1");
  var $eowl = $('.vivac-owl-carousel');
    $eowl.children().each( function( index ) {
      jQuery(this).attr( 'data-position', index );
    });

    $eowl.owlCarousel({
      center: false,
      nav:true,
      dots:false,
      loop: true,
      autoplay:false,
      autoplayTimeout:3500,
      items: '2',
      margin:20,
      navText: [""],
      responsive:{
        0:{
            items:1
        },
        700:{
            items:2
        },
        1000:{
            items: 4
        }
      }
    });
  $(document).on('click', '.listing-item', function() {
    $eowl.trigger('to.vivac.owl.carousel', $(this).data( 'position' ) );
  });
});
