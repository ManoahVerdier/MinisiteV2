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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/productList.js":
/*!*************************************!*\
  !*** ./resources/js/productList.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/*=========================================================================================
    File Name: productList.js
    Description: Liste des produits filtrable
    ----------------------------------------------------------------------------------------
    Item Name: Minisites
==========================================================================================*/


$(function () {
  // RTL Support
  var direction = 'ltr',
      isRTL = false;

  if ($('html').data('textdirection') == 'rtl') {
    direction = 'rtl';
  }

  if (direction === 'rtl') {
    isRTL = true;
  } //Définition des variables


  var sidebarShop = $('.sidebar-shop'),
      sidebarToggler = $('.shop-sidebar-toggler'),
      gridViewBtn = $('.grid-view-btn'),
      listViewBtn = $('.list-view-btn'),
      comparison = $('.btn-comparison'),
      products = $('#products'),
      overlay = $('.body-content-overlay'),
      sortingDropdown = $('.dropdown-sort .dropdown-item'),
      sortingText = $('.dropdown-toggle .active-sorting'); //Identification du framework

  if ($('body').attr('data-framework') === 'laravel') {
    var url = $('body').attr('data-asset-path');
  } // Mise à jour du dropdown de tri


  if (sortingDropdown.length) {
    sortingDropdown.on('click', function () {
      var $this = $(this);
      var selectedLang = $this.text();
      sortingText.text(selectedLang);
    });
  } // Afficher/masquer la sidebar (mobile)


  if (sidebarToggler.length) {
    sidebarToggler.on('click', function () {
      sidebarShop.toggleClass('show');
      overlay.toggleClass('show');
      $('body').addClass('modal-open');
    });
  } // Click dans l'overlay (flou)


  if (overlay.length) {
    overlay.on('click', function (e) {
      sidebarShop.removeClass('show');
      overlay.removeClass('show');
      $('body').removeClass('modal-open');
    });
  } //Initialisation des sliders


  $('.slider').each(function (index, element) {
    //Création du composant
    noUiSlider.create(element, {
      start: [parseInt($(this).attr('min')), parseInt($(this).attr('max'))],
      direction: direction,
      connect: true,
      tooltips: [true, true],
      pips: {
        mode: 'range',
        density: 1
      },
      format: wNumb({
        decimals: 0
      }),
      range: {
        min: parseInt($(this).attr('min')),
        max: parseInt($(this).attr('max'))
      }
    }) //Définition du comportement à la mise à jour (appel livewire)  
    .on('update', function (values) {
      var name = "init";

      if ($(element).attr('name') !== undefined) {
        name = $(element).attr('name');
      }

      Livewire.emit("sliderUpdated", {
        values: values,
        name: name
      });
    });
  }); // Mise à jour d'une checkbox

  $('.checkboxUpdate').each(function (index, element) {
    $(this).on("click", function () {
      Livewire.emit("boolUpdated", $(this).attr("name"));
    });
  }); //Mise à jour d'une catégorie

  $('.categUpdate').each(function (index, element) {
    $(this).on("click", function () {
      Livewire.emit("categUpdated", $(this).attr("value"));
    });
  }); //Mise à jour du tri

  $('.orderUpdate').each(function (index, element) {
    $(this).on("click", function () {
      console.log({
        orderBy: $(this).attr("orderBy"),
        orderDirection: $(this).attr("orderDirection")
      });
      Livewire.emit("orderUpdated", {
        orderBy: $(this).attr("orderBy"),
        orderDirection: $(this).attr("orderDirection")
      });
    });
  }); //Mise à jour d'une note

  $('.rateUpdate').each(function (index, element) {
    $(this).on("click", function () {
      console.log($(this).attr("value"));
      Livewire.emit("rateUpdated", $(this).attr("value"));
    });
  }); //Réinitialisation

  $('.btn-reinit').on('click', function () {
    Livewire.emit("reinit");
  }); // Vue en grille

  if (gridViewBtn.length) {
    gridViewBtn.on('click', function () {
      products.removeClass('list-view').addClass('grid-view');
      listViewBtn.removeClass('active');
      gridViewBtn.addClass('active');
    });
  } // Vue en liste


  if (listViewBtn.length) {
    listViewBtn.on('click', function () {
      products.removeClass('grid-view').addClass('list-view');
      gridViewBtn.removeClass('active');
      listViewBtn.addClass('active');
    });
  } // Cacher la sidebar au redimmensionnement de la fenêtre


  $(window).on('resize', function () {
    if ($(window).outerWidth() >= 991) {
      $('.sidebar-shop').removeClass('show');
      $('.body-content-overlay').removeClass('show');
    }
  }); // For Comparison Icon

  if (comparison.length) {
    comparison.on('click', function () {
      var $this = $(this);
      $.ajax({
        url: "/addComparison/" + $(this).attr("product-id")
      }).done(function (data) {
        $this.toggleClass("btn-outline-primary");
        $this.toggleClass("btn-primary");
        $this.find('svg').toggleClass('text-white');

        if (data) {
          toastr['success']('', 'Ajouté au comparateur', {
            closeButton: true,
            tapToDismiss: false,
            toastClass: "toast-title toast-primary",
            titleClass: "text-blank"
          });
        } else {
          toastr['success']('', 'Retiré du comparateur', {
            closeButton: true,
            tapToDismiss: false,
            toastClass: "toast-title toast-primary",
            titleClass: "text-blank"
          });
          $this.trigger("blur");
        }
      });
    });
  }
});

/***/ }),

/***/ 1:
/*!*******************************************!*\
  !*** multi ./resources/js/productList.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\verdi\Projets\minisite\resources\js\productList.js */"./resources/js/productList.js");


/***/ })

/******/ });