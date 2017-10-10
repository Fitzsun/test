/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 47);
/******/ })
/************************************************************************/
/******/ ({

/***/ 47:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(48);


/***/ }),

/***/ 48:
/***/ (function(module, exports) {

//  html.js文件只用来组装html,css,js统一在page.js中require()
// require('cp');  // 调用公共的逻辑  比如导航栏点击事件变颜色等(里边还require了公共的样式)
// require('lessDir/sprite.css');  // 调用雪碧图
// require('./page.less'); // 调用视图特有的css
// // 调用处理后的图片和第三方库   build-file
// const config = require('configModule');

/* global IS_PRODUCTION:true */ // 由于ESLint会检测没有定义的变量，因此需要这一个`global`注释声明IS_PRODUCTION是一个全局变量(当然在本例中并不是)来规避warning
// 让carousel-inner居中显示
// 利用js读取屏幕尺寸
// function cc() {
//   var cf = document.body.clientWidth;
//   if (cf <= 1920) {
//     cf = -(1920 - cf) / 2;
//   } else if (cf > 1920) {
//     cf = (cf - 1920) / 2;
//   }
//   $('.bd').css({marginLeft: cf});
// }
// cc();
// document.getElementsByClassName('bd')[0].style.marginLeft = cf;

// alert(cf);

$(document).ready(function () {
  var i = 0;
  var timer = null;
  var firstimg = $('.carousel-inner li').first().clone(); // 复制第一张图片
  $('.carousel-inner').append(firstimg); // 将第一张图片放到最后一张图片后，设置ul的宽度为图片张数*图片宽度.width($('.carousel-inner li').length * ($('.carousel-inner img').width()))
  var len = $('.carousel-inner li').length;
  $('.carousel-inner').css({ 'width': len * 100 + '%' });
  $('.carousel-inner li').css({ 'float': 'left', 'width': 100 / len + '%', 'height': 'auto' });
  // $('.carousel-inner img').css({'width': '100%', 'height': 'auto'});
  // 下一个按钮
  $('.next').click(function () {
    i++;
    if (i === $('.carousel-inner li').length) {
      i = 1; // 这里不是i=0
      $('.carousel-inner').css({ left: 0 }); // 保证无缝轮播，设置left值
    };
    $('.carousel-inner').stop().animate({ left: -i * 100 + '%' }, 'slow');
    if (i === $('.carousel-inner li').length - 1) {
      // 设置小圆点指示
      $('.carousel-indicator li').eq(0).addClass('active').siblings().removeClass('active');
    } else {
      $('.carousel-indicator li').eq(i).addClass('active').siblings().removeClass('active');
    }
  });
  // 上一个按钮
  $('.prev').click(function () {
    i--;
    if (i === -1) {
      i = $('.carousel-inner li').length - 2;
      $('.carousel-inner').css({ left: -($('.carousel-inner li').length - 1) * 100 + '%' });
    }
    $('.carousel-inner').stop().animate({ left: -i * 100 + '%' }, 'slow');
    $('.carousel-indicator li').eq(i).addClass('active').siblings().removeClass('active');
  });
  // //设置按钮的显示和隐藏
  // $('.banner').hover(function(){
  // $('.btn').show();
  // },function(){
  // $('.btn').hide();
  // })
  // 鼠标划入圆点
  $('.carousel-indicator li').mouseover(function () {
    // 这里之前为_index变量,得使用同一个全局变量i去控制
    i = $(this).index();
    $('.carousel-inner').stop().animate({ left: -i * 100 + '%' }, 150);
    $('.carousel-indicator li').eq(i).addClass('active').siblings().removeClass('active');
  });
  // 定时器自动播放
  timer = setInterval(function () {
    i++;
    if (i === $('.carousel-inner li').length) {
      i = 1;
      $('.carousel-inner').css({ left: 0 });
    };
    $('.carousel-inner').stop().animate({ left: -i * 100 + '%' }, 'slow');
    if (i === $('.carousel-inner li').length - 1) {
      $('.carousel-indicator li').eq(0).addClass('active').siblings().removeClass('active');
    } else {
      $('.carousel-indicator li').eq(i).addClass('active').siblings().removeClass('active');
    }
  }, 2000);
  // 鼠标移入，暂停自动播放，移出，开始自动播放
  $('.carousel-container').hover(function () {
    clearInterval(timer);
  }, function () {
    timer = setInterval(function () {
      i++;
      if (i === $('.carousel-inner li').length) {
        i = 1;
        $('.carousel-inner').css({ left: 0 });
      };
      $('.carousel-inner').stop().animate({ left: -i * 100 + '%' }, 'slow');
      if (i === $('.carousel-inner li').length - 1) {
        $('.carousel-indicator li').eq(0).addClass('active').siblings().removeClass('active');
      } else {
        $('.carousel-indicator li').eq(i).addClass('active').siblings().removeClass('active');
      }
    }, 2000);
  });
  // 引入纯css写的轮播图插件  c3的animation

  // 滚动监听
  // 逐渐显示出来
});

/***/ })

/******/ });