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
});

function toggleMenu() {
    jQuery("body").toggleClass('nav-active');
}