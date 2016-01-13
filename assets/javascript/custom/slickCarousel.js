$(document).ready(function(){
	$('.gallery-slider').slick({
		dots: true,
		infinite: true,
		arrows: true,
		swipe: true,
		fade: true,
		adaptiveHeight: true,
		mobileFirst: true,
		speed: 500,
		slidesToShow: 1,
		slide: 'div',
		cssEase: 'linear'
	});
});
