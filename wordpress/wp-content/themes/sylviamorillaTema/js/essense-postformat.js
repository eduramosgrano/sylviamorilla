(function($) {
  var formatPostCase = $("#_post_post_format2"),
      formatPostNot  = $("#_post_post_format1"),
      boxListUp      = $(".cmb-type-file-list");

  formatPostCase.click(function(event) {
    boxListUp.show('slow');
  });
  formatPostNot.click(function(event) {
    boxListUp.hide('fast');
  });
  if(formatPostCase.is(':checked')){
    boxListUp.show('slow');
  } else {
    boxListUp.hide('fast');
  }
 })(jQuery);
