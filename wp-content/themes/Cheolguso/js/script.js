jQuery(document).ready(function ($) {
  "use strict"

  $(".sun").click(function () {
    $("body").removeClass("dark-mode")
    document.cookie =
      "dark_mode=false; path=/; max-age=0; domain=falsy.me; secure"
    document.cookie =
      "light_mode=true; path=/; max-age=1036800; domain=falsy.me; secure"
  })

  $(".moon").click(function () {
    $("body").addClass("dark-mode")
    document.cookie =
      "light_mode=false; path=/; max-age=0; domain=falsy.me; secure"
    document.cookie =
      "dark_mode=true; path=/; max-age=1036800; domain=falsy.me; secure"
  })

  if (
    document.cookie.indexOf("dark_mode") < 0 &&
    $("body").hasClass("dark-mode")
  ) {
    $("body").removeClass("dark-mode")
  }

  if (
    document.cookie.indexOf("dark_mode") >= 0 &&
    !$("body").hasClass("dark-mode")
  ) {
    $("body").addClass("dark-mode")
  }
})
