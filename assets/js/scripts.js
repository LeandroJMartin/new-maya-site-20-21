$(document).ready(function () {

  /*-- Menu --*/
  $('#open-menu').on('click', function() {

    let width = $(window).width();

    if(width > 1200){
      $('#menu').css({ 'transform': 'translate(0)', 'transition': 'all 0.27s ease-out'}).animate({ 'left':'0' });
      $('#menu-base').animate({ 'left': '-85px' });
    }else{
      $('#menu').css({ 'transform': 'translate(0)', 'transition': 'all 0.27s ease-out'}).animate({ 'bottom':'0' });
      $('#menu-base').animate({ 'bottom': '-85px' });
    }
    $('#menu').addClass('open');

  });

  $('#close-menu').on('click', function() {

    let width = $(window).width();

    if(width > 1200){
      $('#menu').animate({ 'left':'-100%' });
      $('#menu-base').delay( 570 ).animate({ 'left':'0' });
    }else{
      $('#menu').animate({ 'bottom':'-100%' });
      $('#menu-base').delay( 570 ).animate({ 'bottom':'0' });
    }
    $('#menu').removeClass('open');

  });

  $("input, textarea").on("change keyup paste", function(){
      $(this).css({ 'color' : 'white', 'border' : '2px solid #36d38a' });
  });


  var timelineSwiper = new Swiper ('#portfolio', {
    direction: 'vertical',
    loop: false,
    speed: 1200,
    mousewheel: true,
    pagination: '.swiper-pagination',
    paginationBulletRender: function (swiper, index, className) {

      var width = $(window).width();
      var nameLink = document.querySelectorAll('.swiper-slide')[index].getAttribute('data-name');
      // var number = document.querySelectorAll('.swiper-slide')[index].getAttribute('data-number');

      if(width > 1080){
        return '<span class="' + className + '">' + nameLink + '</span>';
      }else{
        let quant = $('.swiper-slide').length;
        let sum = index + 1;
        return '<span class="' + className + '">' + sum + '/' + quant + '</span>';
      }
    },
    paginationClickable: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
  });

  function adjust_size_work() {

    let heightWindow = $(window).height();
    let widthWindow = $(window).width();

    if(widthWindow > 1200){
      $('.works-item').css({ 'height' : heightWindow });
    }

  };
  $(window).width( function() {
    adjust_size_work();
  });
  $(window).resize( function() {
    adjust_size_work();
  });

  function adjust_position_arrows(){

    let heightWin = $(window).height();
    let heightItem = $('.pagination .wrap').height();
    let calc = heightWin - heightItem;
    let total = calc / 2;

    $('.swiper-button-prev').css({'top' : total + 'px'});
    $('.swiper-button-next').css({'bottom' : total + 'px'});

  };
  adjust_position_arrows();

  $(window).resize( function() {

    adjust_position_arrows();

  });

  var swiper = new Swiper("#portHome", {
    effect: "fade",
    speed: 2500,
    mousewheel:	{
			invert: true,
		},
    autoplay: {
      delay: 2000,
    },
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

  });

  var locoScroll = new LocomotiveScroll({
     el: document.querySelector('.smooth-scroll'),
     smooth: true,
     smartphone: {
        smooth: true
    },
    tablet: {
        smooth: true
    }
  });





  /*
  function () {
    $('a[href*="#"]:not([href="#"])').click(function() {

      var target = $(this.hash);

      if (target.length) {
        $('html, body').animate({ scrollTop: target.offset().top }, 500);
        return false;
      }

    });
  });
  */

  /*
  function parallax_video_home(){

    let parallax = $('#parallax').offset().top;
    let less = parallax - 600;
    var timeleft = 10;

    $(window).on('scroll', function() {

      timeleft--;
      var height = $(window).scrollTop();

      if(height > less){
        $('#parallax .wrap').css({'background-color': 'rgba(0, 0, 0, 0.' + timeleft + ')'});
      }

    });
  }
  $(window).on('scroll', function(){
    parallax_video_home();
  });
  */

});
