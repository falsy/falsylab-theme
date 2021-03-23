jQuery(document).ready(function($) {
	'use strict';

	$('.sun').click(function() {
		$('body').removeClass('dark-mode');
		window.localStorage.setItem('isDarkMode', 'false');
	});

	$('.moon').click(function() {
		$('body').addClass('dark-mode');
		window.localStorage.setItem('isDarkMode', 'true');
	});

	if(window.localStorage.getItem('isDarkMode') === 'true') {
		$('body').addClass('dark-mode');
	}
});