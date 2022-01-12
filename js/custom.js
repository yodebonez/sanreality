jQuery(document).ready(function() {
	
	"use strict";
	// Your custom js code goes here.

	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	  });


	   // the following code make the name of the file appear on select
	   $(".custom-file-input").on("change", function() {
		var fileName = $(this).val().split("\\").pop();
		$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
	  });

	// Slick Slider

		$('.ct-box-slider').slick({
			autoplay: false,
			autoplaySpeed: 4000,
			arrows: false,
		});
	  $('#ct-js-box-slider--prev').on('click', function() {
		$('.ct-js-box-slider').slick('slickPrev');
	  });
	  $('#ct-js-box-slider--next').on('click', function() {
		$('.ct-js-box-slider').slick('slickNext');
	  });

	  
		$('.ct-box-slider1').slick({
			autoplay: false,
			autoplaySpeed: 4000,
			arrows: false,
		});
	  $('#ct-js-box-slider--prev1').on('click', function() {
		$('.ct-js-box-slider1').slick('slickPrev');
	  });
	  $('#ct-js-box-slider--next1').on('click', function() {
		$('.ct-js-box-slider1').slick('slickNext');
	  });

	  $('.ct-box-slider2').slick({
		autoplay: false,
		autoplaySpeed: 4000,
		arrows: false,
	});
  $('#ct-js-box-slider--prev2').on('click', function() {
	$('.ct-js-box-slider2').slick('slickPrev');
  });
  $('#ct-js-box-slider--next2').on('click', function() {
	$('.ct-js-box-slider2').slick('slickNext');
  });


  $('.carousel').carousel()


  /*Clients Slider*/  
  if ($('#clients-slider').length){
	var owlClient = $("#clients-slider"); 
	owlClient.owlCarousel({
		autoPlay:false,
		items : 18, //10 items above 1000px browser width
		itemsDesktop : [1000,10], //5 items between 1000px and 901px
		itemsDesktopSmall : [900,8], // betweem 900px and 601px
		itemsTablet: [600,5], //2 items between 600 and 0
		itemsMobile : [400,4] // itemsMobile disabled - inherit from itemsTablet option
	});
}

// Custom Navigation Events
$(".clients-slider .next").click(function(){
  owlClient.trigger('owl.next');
})
$(".clients-slider .prev").click(function(){
  owlClient.trigger('owl.prev');
})

});