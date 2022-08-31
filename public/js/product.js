/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/product.js":
/*!*********************************!*\
  !*** ./resources/js/product.js ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }

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
      comparison = $('.btn-comparison'),
      checkout = 'app-ecommerce-checkout.html',
      ratings = $('.ratingStars'),
      isRtl = $('html').attr('data-textdirection') === 'rtl'; // Init Swiper

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

  var flatPicker = $('.flat-picker'),
      isRtl = $('html').attr('data-textdirection') === 'rtl',
      chartColors = {
    column: {
      series1: '#826af9',
      series2: '#d2b0ff',
      bg: '#f8d3ff'
    },
    success: {
      shade_100: '#7eefc7',
      shade_200: '#06774f'
    },
    donut: {
      series1: '#ffe700',
      series2: '#00d4bd',
      series3: '#826bf8',
      series4: '#2b9bf4',
      series5: '#FFA1A1'
    },
    area: {
      series3: '#a4f8cd',
      series2: '#60f2ca',
      series1: '#2bdac7'
    }
  };
  $(".review-chart").each(function (index, element) {
    var radarChartEl = element,
        radarChartConfig = {
      chart: {
        height: 250,
        type: 'radar',
        toolbar: {
          show: false
        },
        parentHeightOffset: 0,
        dropShadow: {
          enabled: false,
          blur: 8,
          left: 1,
          top: 1,
          opacity: 0.2
        }
      },
      legend: {
        show: true,
        position: 'bottom'
      },
      yaxis: {
        show: false,
        max: 5,
        min: 0,
        forceNiceScale: true
      },
      series: [{
        name: 'Notes',
        data: [$(element).attr("data-rate-global"), $(element).attr("data-rate-client"), $(element).attr("data-rate-functionality"), $(element).attr("data-rate-price"), $(element).attr("data-rate-interface")]
      }],
      colors: [chartColors.donut.series1],
      xaxis: {
        categories: ['Note globale', 'Service client', 'Fonctionnalités', 'Prix', 'Prise en main']
      },
      fill: {
        opacity: [1, 0.8]
      },
      stroke: {
        show: false,
        width: 0
      },
      markers: {
        size: 0
      },
      grid: {
        show: false,
        padding: {
          top: -20,
          bottom: -20
        }
      }
    };

    if (_typeof(radarChartEl) !== undefined && radarChartEl !== null) {
      var radarChart = new ApexCharts(radarChartEl, radarChartConfig);
      radarChart.render();
    }
  }); // For Comparison Icon

  if (comparison.length) {
    comparison.on('click', function () {
      var $this = $(this);
      $.ajax({
        url: "/addComparison/" + $(this).attr("product-id")
      }).done(function (data) {
        $this.toggleClass("btn-outline-primary");
        $this.toggleClass("btn-outline-secondary");
        $this.find('svg').toggleClass('text-primary');

        if (data) {
          toastr['success']('', 'Ajouté au comparateur', {
            closeButton: true,
            tapToDismiss: false,
            rtl: isRtl,
            toastClass: "toast-title toast-primary",
            titleClass: "text-blank"
          });
          $this.find('span').text('Comparé');
        } else {
          toastr['success']('', 'Retiré du comparateur', {
            closeButton: true,
            tapToDismiss: false,
            rtl: isRtl,
            toastClass: "toast-title toast-primary",
            titleClass: "text-blank"
          });
          $this.find('span').text('Comparer');
        }
      });
    });
  }

  if (ratings.length) {
    ratings.each(function () {
      var _$$attr;

      $(this).rateYo({
        rating: 5,
        rtl: isRtl,
        fullStar: true,
        starWidth: (_$$attr = $(this).attr("starWidth")) !== null && _$$attr !== void 0 ? _$$attr : "20px",
        starSvg: '<svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star h-auto w-auto filled-star text-primary fill-current"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>'
      }).on('rateyo.change', function (e, data) {
        var rating = data.rating;
        $(this).parent().find('.counter').val(rating);
      });
      ;
    });
  }
});

/***/ }),

/***/ 2:
/*!***************************************!*\
  !*** multi ./resources/js/product.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\verdi\Projets\minisite\resources\js\product.js */"./resources/js/product.js");


/***/ })

/******/ });