/*=========================================================================================
    File Name: productList.js
    Description: Liste des produits filtrable
    ----------------------------------------------------------------------------------------
    Item Name: Minisites
==========================================================================================*/

'use strict';

$(function () {
  // RTL Support
  var direction = 'ltr', isRTL = false;
  
  if ($('html').data('textdirection') == 'rtl') {
    direction = 'rtl';
  }

  if (direction === 'rtl') {
    isRTL = true;
  }

  
  //Définition des variables
  var sidebarShop = $('.sidebar-shop'),
    sidebarToggler = $('.shop-sidebar-toggler'),
    gridViewBtn = $('.grid-view-btn'),
    listViewBtn = $('.list-view-btn'),
    products = $('#products'),
    overlay = $('.body-content-overlay'),
    sortingDropdown = $('.dropdown-sort .dropdown-item'),
    sortingText = $('.dropdown-toggle .active-sorting');

  //Identification du framework
  if ($('body').attr('data-framework') === 'laravel') {
    var url = $('body').attr('data-asset-path');
  }

  // Mise à jour du dropdown de tri
  if (sortingDropdown.length) {
    sortingDropdown.on('click', function () {
      var $this = $(this);
      var selectedLang = $this.text();
      sortingText.text(selectedLang);
    });
  }

  // Afficher/masquer la sidebar (mobile)
  if (sidebarToggler.length) {
    sidebarToggler.on('click', function () {
      sidebarShop.toggleClass('show');
      overlay.toggleClass('show');
      $('body').addClass('modal-open');
    });
  }

  // Click dans l'overlay (flou)
  if (overlay.length) {
    overlay.on('click', function (e) {
      sidebarShop.removeClass('show');
      overlay.removeClass('show');
      $('body').removeClass('modal-open');
    });
  }

  //Initialisation des sliders
  $('.slider').each(function (index, element) {
    //Création du composant
    noUiSlider.create(
      element, {
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
      }
    )
    //Définition du comportement à la mise à jour (appel livewire)  
    .on(
      'update',
      function (values) {
        var name = "init";

        if ($(element).attr('name') !== undefined)
        {
          name = $(element).attr('name');
        }

        Livewire.emit("sliderUpdated", { values: values, name: name });
      }
    )
  });

  // Mise à jour d'une checkbox
  $('.checkboxUpdate').each(function (index, element) {
    $(this).on("click", function () {
      Livewire.emit("boolUpdated",  $(this).attr("name"));
    })
  });

  //Mise à jour d'une catégorie
  $('.categUpdate').each(function (index, element) {
    $(this).on("click", function () {
      Livewire.emit("categUpdated",  $(this).attr("value"));
    })
  });

  //Réinitialisation
  $('.btn-reinit').on('click', function () {
    console.log("test");
    Livewire.emit("reinit");
  });


  // Vue en grille
  if (gridViewBtn.length) {
    gridViewBtn.on('click', function () {
      products.removeClass('list-view').addClass('grid-view');
      listViewBtn.removeClass('active');
      gridViewBtn.addClass('active');
    });
  }

  // Vue en liste
  if (listViewBtn.length) {
    listViewBtn.on('click', function () {
      products.removeClass('grid-view').addClass('list-view');
      gridViewBtn.removeClass('active');
      listViewBtn.addClass('active');
    });
  }
  
});

// Cacher la sidebar au redimmensionnement de la fenêtre
$(window).on('resize', function () {
  if ($(window).outerWidth() >= 991) {
    $('.sidebar-shop').removeClass('show');
    $('.body-content-overlay').removeClass('show');
  }
});

