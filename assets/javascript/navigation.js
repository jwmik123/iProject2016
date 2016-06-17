$(window).scroll(function(){
  var navigation = $('.navigation');
      scroll = $(window).scrollTop();
      scrollBottom = navigation.offset().top;
      windowHeight = $(window).height();
      firstStep = $('#first-step');

  if (scroll >= scrollBottom){ 
      
      navigation.addClass('fixed');
      firstStep.addClass('margin-top');
      
  }
  
  if (scrollBottom < windowHeight){
      
      navigation.removeClass('fixed');
      firstStep.removeClass('margin-top');
      
  }

});