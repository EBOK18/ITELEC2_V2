$(document).ready(function() {
  let light_mode = true; // Access value from mode button for user-preferences.

  $("#mode_button").click(function() {
    if(light_mode) {
      $("#wrapper").css({
        "background-color" : "var(--color2)",
        "color" : "var(--color1)"
      });

      $("header").css("border-bottom", "1px var(--color1) solid");

      $("#side_bar_button > img").attr("src", "../../src/res/images/menu_light.png");
      $(".logo-bg1").css("color", "var(--color1)");
      $(".logo-bg2").css({
        "background-color" : "var(--color1)",
        "color" : "var(--color2)"
      });

      $("#search_bar").css({
        "background-color" : "var(--color2)",
        "color" : "var(--color1)",
        "border" : "2px var(--color1) solid"
      });

      $("#search_button > img").attr("src", "../../src/res/images/search_light.png");

      $("#mode_button > img").attr("src", "../../src/res/images/mode_light.png");

      $("#account_button > img").attr("src", "../../src/res/images/account_light");

      $(".content_container").css("border", "1px var(--color1) solid");

      $("#side_bar").css("background-color", "var(--color1)");

      $(".divider").css("border-color", "var(--color1)");

      $("#dashboard_button").css("color", "var(--color2)");
      $("#dashboard_button > img").attr("src", "../../src/res/images/dashboard_dark.png");

      $("#manage_user_button").css("color", "var(--color2)");
      $("#manage_user_button > img").attr("src", "../../src/res/images/manage_user_dark.png");

      $("#friends_button").css("color", "var(--color2)");
      $("#friends_button > img").attr("src", "../../src/res/images/friends_dark.png");

      $("#settings_button").css("color", "var(--color2)");
      $("#settings_button > img").attr("src", "../../src/res/images/settings_dark.png");

      $("#logout_button").css("color", "var(--color2)");
      $("#logout_button > img").attr("src", "../../src/res/images/logout_dark.png");

      light_mode = false;
    } else {
      $("#wrapper").css({
        "background-color" : "var(--color1)",
        "color" : "var(--color2)"
      });

      $("header").css("border-bottom", "1px var(--color2) solid");

      $("#side_bar_button > img").attr("src", "../../src/res/images/menu_dark.png");
      $(".logo-bg1").css("color", "var(--color2)");
      $(".logo-bg2").css({
        "background-color" : "var(--color2)",
        "color" : "var(--color1)"
      });

      $("#search_bar").css({
        "background-color" : "var(--color1)",
        "color" : "var(--color2)",
        "border" : "2px var(--color2) solid"
      });

      $("#search_button > img").attr("src", "../../src/res/images/search_dark.png");

      $("#mode_button > img").attr("src", "../../src/res/images/mode_dark.png");

      $("#account_button > img").attr("src", "../../src/res/images/account_dark");

      $(".content_container").css("border", "1px var(--color2) solid");

      $("#side_bar").css("background-color", "var(--color2)");

      $(".divider").css("border-color", "var(--color2)");

      $("#dashboard_button").css("color", "var(--color1)");
      $("#dashboard_button > img").attr("src", "../../src/res/images/dashboard_light.png");

      $("#manage_user_button").css("color", "var(--color1)");
      $("#manage_user_button > img").attr("src", "../../src/res/images/manage_user_light.png");

      $("#friends_button").css("color", "var(--color1)");
      $("#friends_button > img").attr("src", "../../src/res/images/friends_light.png");

      $("#settings_button").css("color", "var(--color1)");
      $("#settings_button > img").attr("src", "../../src/res/images/settings_light.png");

      $("#logout_button").css("color", "var(--color1)");
      $("#logout_button > img").attr("src", "../../src/res/images/logout_light.png");

      light_mode = true;
    }
  });
});