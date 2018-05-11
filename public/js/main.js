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
      
$('.menu-dropdown').click(function () {
    $('.menu-warp').toggle();
    $('.menu-dropdown').toggleClass('opened');
  });
  //now run horizontal menu hover helper
  //jadewits_horizontal_hover_menu({container:'.main_menu',waittime:500});
  function tab(el){
    el.find("ul").each(function(){
        var $active, $content;
        var $links = $(this).find("a");
                
        $active = $($links.filter('[href="' + location.hash + '"]')[0] || $links[0]);
        $active.addClass("active");
                
        $content = $($active[0].hash);
        $content.fadeIn("fast");
                
        $links.not($active).each(function () {
            $(this.hash).hide();
        });
                
        $(this).on('click', 'a', function(i){
            $active.removeClass('active');
            $content.hide();
            $active = $(this);
            $content = $(this.hash);
            $active.addClass('active');
            $content.fadeIn("fast");
            i.preventDefault();
        });				
    });			
}
$(document).ready(function(){
    tab($(".tab-menu"));
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
      
     

	
	
   