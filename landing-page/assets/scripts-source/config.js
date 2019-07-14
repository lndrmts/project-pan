$( document ).ready(function() {
	$('.slider').slick({
		dots: true,
		arrows: false
	});
	// Navigation Mobile
	$('#openNavgation').on('click', function(){
		$('nav').toggleClass('navigation--mobile navigation');
	});
	$('#closeNavigation').on('click', function(){
		$('nav').removeClass('navigation--mobile');
		$('nav').addClass('navigation');
	});
});
