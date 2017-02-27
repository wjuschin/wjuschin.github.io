jQuery(document).ready(function(){
  var skillBarTopPos = jQuery('.skillbar').position().top;
  jQuery(document).scroll(function(){
    var scrolled_val = $(document).scrollTop().valueOf();
    if(scrolled_val>skillBarTopPos-1150) startAnimation();
  });

  function startAnimation(){
    jQuery('.skillbar').each(function(){
      jQuery(this).find('.skillbar-bar').animate({
        width:jQuery(this).attr('data-percent')
      },6000);
    });
  };

});