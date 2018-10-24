$(document).ready(function() {
  // menu mobile
  jQuery(".hide_menu").appendTo("body");

  jQuery(".show_menu").click(function () {
      toggleMenu();
      jQuery(".wrap-menu").addClass('mostrar');
  });

  jQuery(".hide_menu").click(function () {
      toggleMenu();
      jQuery(".wrap-menu").removeClass('mostrar');
  });

  // drag and drop sort
  var panelList = jQuery('#accordionFunctions');

  panelList.sortable({
    handle: '.card-header', 
    update: function() {
      jQuery('.card', panelList).each(function(index, elem) {
        var $listItem = jQuery(elem),
        newIndex = $listItem.index();
      });
    }
  });

});

function toggleMenu() {
    jQuery("body").toggleClass('nav-active');
}