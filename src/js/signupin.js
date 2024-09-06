$(document).ready(function() {
  $("#sign_in_button").click(function() {
    $("#signup").fadeOut(700);
    setTimeout(function() {
      $("#signin").fadeIn(700);
      setTimeout(function() {
        $("#signin").css("display", "flex");
      });
    }, 700);
  });

  $("#sign_up_button").click(function() {
    $("#signin").fadeOut(700);
    setTimeout(function() {
      $("#signup").fadeIn(700);
      setTimeout(function() {
        $("#signup").css("display", "flex");
      });
    }, 700);
  });
});