jQuery(document).ready(function($) {
	'use strict';

	$('.sun').click(function() {
		$('body').removeClass('dark-mode');
		document.cookie = "dark_mode=false; path=/; max-age=0; domain=falsy.me; secure";
	});

	$('.moon').click(function() {
		$('body').addClass('dark-mode');
		document.cookie = "dark_mode=true; path=/; max-age=1036800; domain=falsy.me; secure";
	});
});

// window.addEventListener('DOMContentLoaded', function() {
// 	if(window.localStorage.getItem('isDarkMode') === 'true') {
// 		document.body.classList.add('dark-mode')
// 	}
// });