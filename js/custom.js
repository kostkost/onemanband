var transparentDemo = true;
var fixedTop = false;

$(window).scroll(function(e) {
    oVal = ($(window).scrollTop() / 170);
    $(".blur").css("opacity", oVal);
    
});

$(document).ready(function(){
  var width = $(window).width();
    var countslide;
    if (width > 768) {
        countslide = 3;
    } else {
        countslide = 2;
    }
  $('.works').slick({
      infinite: true,
      slidesToShow: countslide,
      slidesToScroll: countslide,
      autoplay: true,
      dots: true
  });
});


$(document).ready(function() {
    $('.link a[href^="#"]').click(function(){
        var el = $(this).attr('href');
        $('body').animate({
            scrollTop: $(el).offset().top-40}, 2000);
        return false; 
    });
});       

$(document).ready(function() {
    $('.links a[href^="#"]').click(function(){
        var els = $(this).attr('href');
        setTimeout(function(){
            $('body').animate({
                scrollTop: $(els).offset().top-300}, 2000);
            return false; 
        }, 500);
    });              
});