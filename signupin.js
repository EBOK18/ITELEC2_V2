$(document).ready(function() {
  $("#sign_in_button").click(function() {
    $("#signup").fadeOut(750);
    setTimeout(function() {
      $("#signin").css("display", "flex");
    }, 750);
  });

  $("#sign_up_button").click(function() {
    /*
    $("#signin").fadeOut(750);
    setTimeout(function() {
      $("#signup").css("display", "flex");
    }, 750);
    */
  });
});