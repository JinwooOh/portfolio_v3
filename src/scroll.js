$(function() {
  console.log('TEST');
   $(window).scroll(function () {
      if ($(this).scrollTop() > 200) {
         $('body').addClass('changeColor1')
      }if ($(this).scrollTop() > 800) {
         $('body').removeClass().addClass('changeColor2')
      }if ($(this).scrollTop() > 1400) {
         $('body').removeClass().addClass('changeColor3')
      }


      if ($(this).scrollTop() < 200) {
         $('body').removeClass();
      }
      if ($(this).scrollTop() < 800) {
         $('body').removeClass('changeColor2');
      }
      if ($(this).scrollTop() < 1400) {
         $('body').removeClass('changeColor3');
      }
   });
});
