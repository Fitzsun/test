webpackJsonp([8],{"+9WN":function(l,e,n){"use strict";(function(l){n("xe4v"),n("OfQI"),n("t/gs");n("PYKI");l(function(){var e=0,n=null,i=l(".carousel-inner li").first().clone();l(".carousel-inner").append(i);var a=l(".carousel-inner li").length;l(".carousel-inner").css({width:100*a+"%"}),l(".carousel-inner li").css({float:"left",width:100/a+"%",height:"auto"}),l(".next").click(function(){e++,e===l(".carousel-inner li").length&&(e=1,l(".carousel-inner").css({left:0})),l(".carousel-inner").stop().animate({left:100*-e+"%"},"slow"),e===l(".carousel-inner li").length-1?l(".carousel-indicator li").eq(0).addClass("active").siblings().removeClass("active"):l(".carousel-indicator li").eq(e).addClass("active").siblings().removeClass("active")}),l(".prev").click(function(){e--,-1===e&&(e=l(".carousel-inner li").length-2,l(".carousel-inner").css({left:100*-(l(".carousel-inner li").length-1)+"%"})),l(".carousel-inner").stop().animate({left:100*-e+"%"},"slow"),l(".carousel-indicator li").eq(e).addClass("active").siblings().removeClass("active")}),l(".carousel-indicator li").mouseover(function(){var e=l(this).index();l(".carousel-inner").stop().animate({left:100*-e+"%"},150),l(".carousel-indicator li").eq(e).addClass("active").siblings().removeClass("active")}),n=setInterval(function(){e++,e===l(".carousel-inner li").length&&(e=1,l(".carousel-inner").css({left:0})),l(".carousel-inner").stop().animate({left:100*-e+"%"},"slow"),e===l(".carousel-inner li").length-1?l(".carousel-idicator li").eq(0).addClass("active").siblings().removeClass("active"):l(".carousel-idicator li").eq(e).addClass("active").siblings().removeClass("active")},2e3),l(".carousel-container").hover(function(){clearInterval(n)},function(){n=setInterval(function(){e++,e===l(".carousel-inner li").length&&(e=1,l(".carousel-inner").css({left:0})),l(".carousel-inner").stop().animate({left:100*-e+"%"},"slow"),e===l(".carousel-inner li").length-1?l(".carousel-idicator li").eq(0).addClass("active").siblings().removeClass("active"):l(".carousel-idicator li").eq(e).addClass("active").siblings().removeClass("active")},2e3)}),l(document).ready(function(){l.ajax({type:"get",url:"/ajax/links",cache:!0,success:function(e){console.log(e);for(var n="",i=0;i++;i<e.length){var a=e[i];n+='\n            <p>友情链接</p>\n            <ul class="clearfix">\n              <li><a href="'+a.link_href+'" rel="nofollow">'+a.link_name+'</a></li>\n              <li><a href="'+a.link_href+'" rel="nofollow">'+a.link_name+'</a></li>\n              <li><a href="'+a.link_href+'" rel="nofollow">'+a.link_name+'</a></li>\n              <li><a href="'+a.link_href+'" rel="nofollow">'+a.link_name+'</a></li>\n              <li><a href="'+a.link_href+'" rel="nofollow">'+a.link_name+'</a></li>\n              <li><a href="'+a.link_href+'" rel="nofollow">'+a.link_name+'</a></li>\n              <li><a href="'+a.link_href+'" rel="nofollow">'+a.link_name+'</a></li>\n              <li><a href="'+a.link_href+'" rel="nofollow">'+a.link_name+'</a></li>\n              <li><a href="'+a.link_href+'" rel="nofollow">'+a.link_name+'</a></li>\n              <li><a href="'+a.link_href+'" rel="nofollow">'+a.link_name+'</a></li>\n              <li><a href="'+a.link_href+'" rel="nofollow">'+a.link_name+'</a></li>\n              <li><a href="'+a.link_href+'" rel="nofollow">'+a.link_name+"</a></li>\n            </ul>\n          "}console.log(n),l(".friendly-link")[0].html(n)}})})})}).call(e,n(0))},0:function(l,e){l.exports=window.jQuery},"t/gs":function(l,e){}},["+9WN"]);