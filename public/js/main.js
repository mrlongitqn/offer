$(document).ready(function () {
  
  //initialize swiper   
  var mySwiper = new Swiper ('.js-swiper-banner', {
    // Optional parameters
    loop: true,
    // If we need pagination
    pagination: '.swiper-pagination',
    // Navigation arrows
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev'
  });
  var homeSwiper = new Swiper ('.js-swiper-home', {
    // Optional parameters
    loop: true,
    // Navigation arrows
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev'
  }); 

  if ($(window).width() < 768) {
    $('.js-swiper-banner').find('img').css('height', $(window).height());
  }

  // set min-Height for content
  var setHeightContent = function () {
    var h_windowns = $(window).height();
    var h_header = $('.js-header').outerHeight();
    var h_footer = $('.js-footer').outerHeight();
    console.log(h_header);
    var h_content = parseInt(h_windowns) - (parseInt(h_header) + parseInt(h_footer));
    $('.js-content').css({'height': h_content, 'padding-bottom': h_footer, 'padding-top': h_header});
  };

  // run setHeightContent function
  setHeightContent();

  // Resize mobile will set min-Height for content 
  $(window).resize(function() {
    setHeightContent();
  });
  
  // Tabs Menu render
  $('.js-tab-menu-target').click(function () {
    var self = $(this);
    $('.js-tab-menu-target').removeClass('is-active');
    self.addClass('is-active');
    var data_tab = self.data('tab');
    $('.js-tab-menu-render').filter('[data-tab!="' + data_tab + '"]').hide().removeClass('is-active');
    $('.js-tab-menu-render').filter('[data-tab="' + data_tab + '"]').fadeIn().addClass('is-active');
    setHeightContent();
  });

  // Tabs render
  $('.js-tab-target').click(function () {
    var self = $(this);
    $('.js-tab-target').removeClass('is-active');
    self.addClass('is-active');
    var data_tab = self.data('tab');
    $('.js-tab-render').filter('[data-tab!="' + data_tab + '"]').hide().removeClass('is-active');
    $('.js-tab-render').filter('[data-tab="' + data_tab + '"]').fadeIn().addClass('is-active');
  });

  // Modal render
  $('.js-modal-target').click(function () {
    var self = $(this);
    var data_modal = self.data('modal');
    $('body').addClass('none-scroll');
    $('.js-modal-render').filter('[data-modal!="' + data_modal + '"]').hide().removeClass('is-active');
    $('.js-modal-render').filter('[data-modal="' + data_modal + '"]').fadeIn().addClass('is-active'); 
    return false;
  });

  // Modal close button
  $('.js-modal-close').click(function () {
    $('body').removeClass('none-scroll');
    $(this).closest('.js-modal-render').hide().removeClass('is-active');
    return false;
  });
});