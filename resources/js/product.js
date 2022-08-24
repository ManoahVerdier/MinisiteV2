//  File Name: app-ecommerce-details.js
//  Description: App Ecommerce Details js.
//  ----------------------------------------------------------------------------------------------
//  Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
//  Author: PIXINVENT
//  Author URL: http://www.themeforest.net/user/pixinvent
// ================================================================================================

$(function () {
    'use strict';
  
    var productsSwiper = $('.swiper-responsive-breakpoints'),
      productOption = $('.product-color-options li'),
      btnCart = $('.btn-cart'),
      wishlist = $('.btn-wishlist'),
      checkout = 'app-ecommerce-checkout.html',
      isRtl = $('html').attr('data-textdirection') === 'rtl';
  

  
    // Init Swiper
    if (productsSwiper.length) {
      new Swiper('.swiper-responsive-breakpoints', {
        slidesPerView: 3,
        spaceBetween: 55,
        // init: false,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        },
        breakpoints: {
          1600: {
            slidesPerView: 3,
            spaceBetween: 55
          },
          1300: {
            slidesPerView: 3,
            spaceBetween: 55
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 55
          },
          320: {
            slidesPerView: 1,
            spaceBetween: 55
          }
        }
      });
    }


  });
  