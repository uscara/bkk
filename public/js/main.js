$(document).ready(function(){onload=function(){setInterval(function(){$("body").addClass("loaded")},50)},null==localStorage.getItem("language")?(localStorage.setItem("language","th"),document.body.className=localStorage.getItem("language")):document.body.className=localStorage.getItem("language"),$(".change-language").click(function(){var a=$(this).attr("data-lan");document.body.className=a,localStorage.setItem("language",a)}),$("#button-menu-mobile").click(function(){$(this).toggleClass("open")}),$("#offCanvasContent").click(function(){$("#button-menu-mobile").hasClass("open")&&$("#button-menu-mobile").removeClass("open")});var a=window.location.href,t=a.substring(a.lastIndexOf("/")+1);"partners"==t?document.getElementById("partners").style.display="none":"accommodation"==t||"accommodation2"==t?$("#accommodation").addClass("active"):"attraction"==t||"attraction-category"==t?$("#attraction").addClass("active"):"campaign"==t?$("#campaign").addClass("active"):"gallery"==t?$("#gallery").addClass("active"):"trips"==t||"trip"==t?$("#trips").addClass("active"):"transportation"==t&&$("#transportation").addClass("active"),$(window).scroll(function(){$(this).scrollTop()>200?($("#go-top").fadeIn(300),$("#go-top").removeClass("hide")):($("#go-top").fadeOut(300),$("#go-top").addClass("hide"))}),$(".go-top").click(function(a){a.preventDefault(),$("html, body").animate({scrollTop:0},500)})});