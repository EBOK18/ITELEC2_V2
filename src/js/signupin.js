$(document).ready(function() {
  $("#sign_in_button").click(function() {
    $("#signup").fadeOut(1000);
    setTimeout(function() {
      $("#signin").css("display", "flex");
    }, 1000);
  });

  $("#sign_up_button").click(function() {
    // alert("Hello");
    $("#signin").fadeOut(1000);
    setTimeout(function() {
      $("#signup").css("display", "flex");
    }, 1000);
  });
});