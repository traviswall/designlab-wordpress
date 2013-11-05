// ------------------------------------------

//           Travis Wall digital

// ------------------------------------------

//                toggles.js
                 
//      everything concerning toggles

// -------------------------------------------

//                  v1.0

//                12.02.13

//-------------------------------------------

//              revision history:

// ------------- v1.1 - 12.02.13 -------------



// -------------------------------------------

// ---------------- display shadow on drop down panel only when expanded ----------------

$(document).click(function(){
	if ($('.panel').height()>1) {
		$('.panel').addClass('panel-on');
		}
    else {
      	$('.panel').removeClass('panel-on');
    	}
});

// ---------------- knocks off top border on the first nav item if about is not on ----------------

$(document).click(function(){
	if ($('.panel-about').hasClass('panel-about-on')) {
		$('.email').addClass('email-add-border'); 
		}
    else {
      	$('.email').removeClass('email-add-border');
    	}
}); 

// ---------------- toggles header buttons triggering drop down panel ----------------

$(function() {
  $(document).each(function(){
  $('.bar-button-about').click(function () {
	  $(this).toggleClass('bar-button-on');
	  $('#panel-wrapper').addClass('viewable');
	  $('.panel-about').toggleClass('panel-about-on');
      });
  $('.bar-button-contact').click(function () {
	  $(this).toggleClass('bar-button-on');
	  $('#panel-wrapper').addClass('viewable');
	  $('.panel-contact').toggleClass('panel-contact-on'); 
      });    
  $('.bar-button').click(function () {
	  $(this).children('.icon').toggleClass('icon-on'); 
      }); 

  $('.category-nav').hover(function () {
	  $(this).children('h2').toggleClass('nav-hover');
	  $(this).children('.icon-list').toggleClass('icon-list-on');
	  $(this).children('.icon-thumbs').toggleClass('icon-thumbs-on'); 
      });                 
  });
});

$(function() {
	$('#panel-wrapper').click(function () {
		$(this).removeClass('viewable');
		$('.panel-about').removeClass('panel-about-on');
		$('.panel-contact').removeClass('panel-contact-on');
		$('.bar-button-about').removeClass('bar-button-on');
		$('.bar-button-contact').removeClass('bar-button-on');
		$('.icon').removeClass('icon-on');	
    });
});


