/*jshint eqnull:true */
/*!
 * jQuery Cookie Plugin v1.1
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2011, Klaus Hartl
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.opensource.org/licenses/GPL-2.0
 */
(function(e,b){var a=/\+/g;function d(f){return f}function c(f){return decodeURIComponent(f.replace(a," "))}e.cookie=function(k,j,o){if(arguments.length>1&&(!/Object/.test(Object.prototype.toString.call(j))||j==null)){o=e.extend({},e.cookie.defaults,o);if(j==null){o.expires=-1}if(typeof o.expires==="number"){var l=o.expires,n=o.expires=new Date();n.setDate(n.getDate()+l)}j=String(j);return(b.cookie=[encodeURIComponent(k),"=",o.raw?j:encodeURIComponent(j),o.expires?"; expires="+o.expires.toUTCString():"",o.path?"; path="+o.path:"",o.domain?"; domain="+o.domain:"",o.secure?"; secure":""].join(""))}o=j||e.cookie.defaults||{};var f=o.raw?d:c;var m=b.cookie.split("; ");for(var h=0,g;(g=m[h]&&m[h].split("="));h++){if(f(g.shift())===k){return f(g.join("="))}}return null};e.cookie.defaults={}})(jQuery,document);

jQuery(function($){
	window.prettyPrint && prettyPrint();
	$("link[rel=stylesheet][href*='common/css/xe.min.css']").remove();
	// navbar dropdown
	$('.navbar ul.nav>li.dropdown').hover(
		function(){$(this).children('ul').stop(true,true).hide().fadeIn(100);},
		function(){$(this).children('ul').stop(true,true).fadeOut(100);}
	);
	//$('.navbar li.dropdown li').unbind('mouseover').unbind('mouseout');
	

});