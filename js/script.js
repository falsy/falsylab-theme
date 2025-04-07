jQuery(document).ready(function ($) {
  "use strict"

  $(".sun").click(function () {
    $("html").removeClass("dark-mode")
    document.cookie =
      "dark_mode=false; path=/; max-age=0; domain=falsy.me; secure"
    document.cookie =
      "light_mode=true; path=/; max-age=1036800; domain=falsy.me; secure"
  })

  $(".moon").click(function () {
    $("html").addClass("dark-mode")
    document.cookie =
      "light_mode=false; path=/; max-age=0; domain=falsy.me; secure"
    document.cookie =
      "dark_mode=true; path=/; max-age=1036800; domain=falsy.me; secure"
  })
})
