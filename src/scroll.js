$(function() {
  console.log('TEST');
   $(window).scroll(function () {
      if ($(this).scrollTop() > 200) {
         $('body').addClass('changeColor1')
      }if ($(this).scrollTop() > 800) {
         $('body').removeClass().addClass('changeColor2')
      }


      if ($(this).scrollTop() < 200) {
         $('body').removeClass();
      }
      if ($(this).scrollTop() < 800) {
         $('body').removeClass('changeColor2');
      }
      
   });
});
