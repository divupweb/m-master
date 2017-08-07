$(document).ready(function(){
 var elem;
 elem = $('.shower-menu');
 elem.click(function(){
    if ($('.header__menu').hasClass('show')){
    	$('.header__menu').removeClass('show');
    	$('.header__menu').addClass('hide');
    }
    else{
    	$('.header__menu').removeClass('hide');
    	$('.header__menu').addClass('show');
    }
 })
});
