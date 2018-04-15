$(window).scroll(function(){
    if($(this).scrollTop()>100){
        $('.backto-top').fadeIn()
        ;}
else{
    $('.backto-top').fadeOut();
}});
$('.backto-top').click(function(){
    $('body,html').animate({scrollTop:0},800);
})
/*carsol*/
jQuery(document).ready(function($) {
    "use strict";
    $('#customers-testimonials').owlCarousel( {
            loop: true,
            center: true,
            items: 3,
            margin: 30,
            autoplay: true,
            dots:true,
        nav:true,
            autoplayTimeout: 8500,
            smartSpeed: 450,
          navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
           responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1170: {
                    items: 3
                }
            }
        });
    });

    /*menu*/
    var slideout = new Slideout({
        'panel': document.getElementById('panel'),
        'menu': document.getElementById('menu'),
        'padding': 300,
        'tolerance': 70
      });

      // Toggle button
      document.querySelector('.toggle-button').addEventListener('click', function() {
        slideout.toggle();
      });
      /*jhk*/
      
     
   