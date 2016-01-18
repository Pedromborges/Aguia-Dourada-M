$(document).ready(function() {
  // display popover on initial page load:
  $('body').addClass('greyscreen-open');
  
  $('a[href*="popover"]').click(function() {
    $('body').addClass('greyscreen-open');
    return false;
  });
  
  $('.popclose').click(function() {
    $('body').removeClass('greyscreen-open');
  });
  
  $('.popbutton').click(function(){
	$('.pop1').css('display','none');
	$('.pop2').css('display','inherit');
	$('.popclose').css('right','20em');
  });
  
  
});