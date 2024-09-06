$(document).ready(function() {
  let side_menu_toggled = false;

  $("#side_bar_button").click(function() {
    if(side_menu_toggled) {
      $("body").css("overflow", "hidden");
      $("#side_bar").css("display", "flex");

      side_menu_toggled = false;
    } else {
      $("body").css("overflow", "auto");
      $("#side_bar").css("display", "none");

      side_menu_toggled = true;
    }
  });
});