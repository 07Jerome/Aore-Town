
// $( document ).ready(function() {
    

// });

// ============= Hero Slider ===============//
var slideWrapper = $(".main-slider"),
    iframes = slideWrapper.find('.embed-player'),
    lazyImages = slideWrapper.find('.slide-image'),
    lazyCounter = 0;

// POST commands to YouTube or Vimeo API
function postMessageToPlayer(player, command){
  if (player == null || command == null) return;
  player.contentWindow.postMessage(JSON.stringify(command), "*");
}

// When the slide is changing
function playPauseVideo(slick, control){
  var currentSlide, slideType, startTime, player, video;

  currentSlide = slick.find(".slick-current");
  slideType = currentSlide.attr("class").split(" ")[1];
  player = currentSlide.find("iframe").get(0);
  startTime = currentSlide.data("video-start");

  if (slideType === "vimeo") {
    switch (control) {
      case "play":
        if ((startTime != null && startTime > 0 ) && !currentSlide.hasClass('started')) {
          currentSlide.addClass('started');
          postMessageToPlayer(player, {
            "method": "setCurrentTime",
            "value" : startTime
          });
        }
        postMessageToPlayer(player, {
          "method": "play",
          "value" : 1
        });
        break;
      case "pause":
        postMessageToPlayer(player, {
          "method": "pause",
          "value": 1
        });
        break;
    }
  } else if (slideType === "youtube") {
    switch (control) {
      case "play":
        postMessageToPlayer(player, {
          "event": "command",
          "func": "mute"
        });
        postMessageToPlayer(player, {
          "event": "command",
          "func": "playVideo"
        });
        break;
      case "pause":
        postMessageToPlayer(player, {
          "event": "command",
          "func": "pauseVideo"
        });
        break;
    }
  } else if (slideType === "video") {
    video = currentSlide.children("video").get(0);
    if (video != null) {
      if (control === "play"){
        video.play();
      } else {
        video.pause();
      }
    }
  }
}

// Resize player
function resizePlayer(iframes, ratio) {
  if (!iframes[0]) return;
  var win = $(".main-slider"),
      width = win.width(),
      playerWidth,
      height = win.height(),
      playerHeight,
      ratio = ratio || 16/9;

  iframes.each(function(){
    var current = $(this);
    if (width / ratio < height) {
      playerWidth = Math.ceil(height * ratio);
      current.width(playerWidth).height(height).css({
        left: (width - playerWidth) / 2,
         top: 0
        });
    } else {
      playerHeight = Math.ceil(width / ratio);
      current.width(width).height(playerHeight).css({
        left: 0,
        top: (height - playerHeight) / 2
      });
    }
  });
}

// DOM Ready
$(function() {
  // Initialize
  slideWrapper.on("init", function(slick){
    slick = $(slick.currentTarget);
    setTimeout(function(){
      playPauseVideo(slick,"play");
    }, 1000);
    resizePlayer(iframes, 16/9);
  });
  slideWrapper.on("beforeChange", function(event, slick) {
    slick = $(slick.$slider);
    playPauseVideo(slick,"pause");
  });
  slideWrapper.on("afterChange", function(event, slick) {
    slick = $(slick.$slider);
    playPauseVideo(slick,"play");
  });
  slideWrapper.on("lazyLoaded", function(event, slick, image, imageSource) {
    lazyCounter++;
    if (lazyCounter === lazyImages.length){
      lazyImages.addClass('show');
      // slideWrapper.slick("slickPlay");
    }
  });

  //start the slider
  slideWrapper.slick({
    // fade:true,
    autoplaySpeed:8000,
    lazyLoad:"progressive",
    // autoplay: true,
    speed:900,
    arrows:false,
    dots:true,
    cssEase:"cubic-bezier(0.87, 0.03, 0.41, 0.9)"
  });

});
//==============================================================

//===============================================================
// Resize event
$(window).on("resize.slickVideoPlayer", function(){  
  resizePlayer(iframes, 16/9);
});

// ============= Hero Slider end ===============//

// ============== FEATURED slider ============== //
$('.container-slider').slick({
  variableWidth: true,
  centerMode: true,
  dots: true,
  lazyLoad:"progressive",
  // fade: true,
  // cssEase: 'linear',
  autoplay: true,
  autoplaySpeed: 6000,
  centerPadding: '70px',
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        dots: true,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        dots: true,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});



//================ testimonial-slider==================//

// var prevButton = '<button type="button" data-role="none" class="slick-prev" aria-label="prev"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" version="1.1"><path fill="#FFFFFF" d="M 16,16.46 11.415,11.875 16,7.29 14.585,5.875 l -6,6 6,6 z" /></svg></button>',
//     nextButton = '<button type="button" data-role="none" class="slick-next" aria-label="next"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#FFFFFF" d="M8.585 16.46l4.585-4.585-4.585-4.585 1.415-1.415 6 6-6 6z"></path></svg></button>';

$('.testimonial-slider').slick({
  infinite: true,
  dots: true,
  autoplay: false,
  autoplaySpeed: 4000,
  speed: 1000,
  // prevArrow: prevButton,
  // nextArrow: nextButton
});

$('.quote-container').mousedown(function(){
  $('.single-item').addClass('dragging');
});
$('.quote-container').mouseup(function(){
  $('.single-item').removeClass('dragging');
});

$('.quote-container').mousedown(function(){
  $('.single-item').addClass('dragging');
});
$('.quote-container').mouseup(function(){
  $('.single-item').removeClass('dragging');
});



//================ testimonial-slider End ==================//





//================ Get in Touch ==================//
// function validateForm() {
//   var n = document.getElementById('name').value;
//   var e = document.getElementById('email').value;
//   var s = document.getElementById('subject').value;
//   var m = document.getElementById('message').value;
//   var onlyLetters =/^[a-zA-Z\s]*$/; 
//   var onlyEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  
  
//   if(n == "" || n == null){
//       document.getElementById('nameLabel').innerHTML = ('Please enter your name');
//       document.getElementById('name').style.borderColor = "red";
//       return false;
//   }
     

//   if (!n.match(onlyLetters)) {
//       document.getElementById('nameLabel').innerHTML = ('Please enter only letters');
//       document.getElementById('name').style.borderColor = "red";
//       return false;
//   }

//   if(e == "" || e == null ){
//         document.getElementById('emailLabel').innerHTML = ('Please enter your email');
//         document.getElementById('email').style.borderColor = "red";
//         return false;
//     }

//   if (!e.match(onlyEmail)) {
//       document.getElementById('emailLabel').innerHTML = ('Please enter a valid email address');
//       document.getElementById('email').style.borderColor = "red";
//       return false;
//   }

//   if(s == "" || s == null ){
//         document.getElementById('subjectLabel').innerHTML = ('Please enter your subject');
//         document.getElementById('subject').style.borderColor = "red";
//         return false;
//     }

//   if (!s.match(onlyLetters)) {
//       document.getElementById('subjectLabel').innerHTML = ('Please enter only letters');
//       document.getElementById('subject').style.borderColor = "red";
//       return false;
//   }

//   if(m == "" || m == null){
//       document.getElementById('messageLabel').innerHTML = ('Please enter your message');
//       document.getElementById('message').style.borderColor = "red";
//       return false;
//   }

//   else{
//         return true;
//     }
    
// }
//================ Get in Touch end ==================//

// $(document).ready(function() {
//   $(".menu-icon").on("click", function() {
//         $("nav ul").toggleClass("showing");
//   });
// });

// // Scrolling Effect

$(window).on("scroll", function() {
  if($(window).scrollTop()) {
        $('nav').addClass('black');
  }

  else {
        $('nav').removeClass('black');
  }
})

/* contact form submission */
$('#contact-form').on('submit', function(e){

  e.preventDefault();

  $('.has-error').removeClass('has-error');
  $('.js-show-feedback').removeClass('js-show-feedback');

  var form = $(this),
      name = form.find('#name').val(),
      email = form.find('#email').val(),
      phone = form.find('#phone').val(),
      ajaxurl = form.data('url');

  if( name === '' ){
    $('#name').parent('.form-group').addClass('has-error');
    return;
    // console.log('required inputs are empty');
  }

  if( email === '' ){
    $('#email').parent('.form-group').addClass('has-error');
    return;
  }

  if( phone === '' ){
    $('#phone').parent('.form-group').addClass('has-error');
    return;
  }

  form.find('input, button, textarea').attr('disabled','disabled');
  $('.js-form-submission').addClass('js-show-feedback');

  $.ajax({
    
    url : ajaxurl,
    type : 'post',
    data : {
      
      name : name,
      email : email,
      phone : phone,
      action: 'aore_save_user_contact_form'
      
    },
    error : function( response ){
      $('.js-form-submission').removeClass('js-show-feedback');
      $('.js-form-error').addClass('js-show-feedback');
      form.find('input, button, textarea').removeAttr('disabled');
    },
    success : function( response ){
      if( response == 0 ){
        
        setTimeout(function(){
          $('.js-form-submission').removeClass('js-show-feedback');
          $('.js-form-error').addClass('js-show-feedback');
          form.find('input, button, textarea').removeAttr('disabled');
        },1500);

      } else {
        
        setTimeout(function(){
          $('.js-form-submission').removeClass('js-show-feedback');
          $('.js-form-success').addClass('js-show-feedback');
          form.find('input, button, textarea').removeAttr('disabled').val('');
        },1500);

      }
    }
    
  });
  
	});



  $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 5,
        // slidesToScroll: 1,
        centerMode: true,
        // autoplay: true,
        // autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
  