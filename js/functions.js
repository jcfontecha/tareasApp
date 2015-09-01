$(document).ready(function() {
     
     var url_parts = location.href.split('/');
	  var last_segment = url_parts[url_parts.length-1];
	  $('.navbar-nav a[href="' + last_segment + '"]').parents('li').addClass('active');
 });