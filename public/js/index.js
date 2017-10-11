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
    var cssSlidy = function cssSlidy(newOptions) {
        var options = function () {
            var mergedOptions = {},
                defaultOptions = {
                timeOnSlide: 3,
                timeBetweenSlides: 1,
                slidyContainerSelector: '#slidy-container', // name of slider container
                slidySelector: '#slidy', // name of slider
                slidyDirection: 'left', // options: left, right
                fallbackFunction: function fallbackFunction() {},
                cssAnimationName: 'slidy',
                captionSource: 'data-caption', // options: data-caption, alt, none
                captionBackground: 'rgba(0,0,0,0.3)',
                captionColor: '#fff',
                captionFont: 'Avenir, Avenir Next, Droid Sans, DroidSansRegular, Corbel, Tahoma, Geneva, sans-serif',
                captionPosition: 'bottom', // options: top, bottom
                captionAppear: 'slide', //  options: slide, perm, fade
                captionSize: '1.6rem', // same units
                captionPadding: '.6rem' // same units
            };
            for (var option in defaultOptions) {
                mergedOptions[option] = defaultOptions[option];
            }for (var option in newOptions) {
                mergedOptions[option] = newOptions[option];
            }return mergedOptions;
        }(),
            CS = this;
        CS.animationString = 'animation';
        CS.hasAnimation = false;
        CS.keyframeprefix = '';
        CS.domPrefixes = 'Webkit Moz O Khtml ms'.split(' ');
        CS.pfx = '';
        CS.element = document.getElementById(options.slidySelector.replace('#', ''));
        CS.init = function () {
            // browser supports keyframe animation w/o prefixes
            if (CS.element.style.animationName !== undefined) CS.hasAnimation = true;
            // browser supports keyframe animation w/ prefixes
            if (CS.hasAnimation === false) {
                for (var i = 0; i < CS.domPrefixes.length; i++) {
                    if (CS.element.style[CS.domPrefixes[i] + 'AnimationName'] !== undefined) {
                        CS.pfx = domPrefixes[i];
                        CS.animationString = pfx + 'Animation';
                        CS.keyframeprefix = '-' + pfx.toLowerCase() + '-';
                        CS.hasAnimation = true;
                        // determines CSS prefix required for CSS animations
                        break;
                    }
                }
            }
            if (CS.hasAnimation === true) {
                var images = CS.element.getElementsByTagName("img"),
                    L = images.length,
                    fig = document.createElement('figure'),
                    who,
                    temp;
                while (L) {
                    temp = fig.cloneNode(false);
                    who = images[--L];
                    // wraps all images in the slider with <figure> tags
                    if (options.captionSource === "alt" || options.captionSource === "data-caption") {
                        caption = who.getAttribute(options.captionSource);
                    }
                    who.parentNode.insertBefore(temp, who);
                    if (options.captionSource == "alt" || options.captionSource == "data-caption") {
                        if (caption !== null) {
                            content = document.createElement('figcaption');
                            content.innerHTML = caption;
                            // places captions in each <figure> element, if required
                        }
                    }
                    temp.appendChild(who);
                    if (options.captionSource !== "none") {
                        if (caption !== null) temp.appendChild(content);
                    }
                }
                var figs = CS.element.getElementsByTagName("figure");
                var firstFig = figs[0]; // get the first figure inside the "slidy" element.
                figWrap = firstFig.cloneNode(true); // copy it.
                CS.element.appendChild(figWrap); // add the clone to the end of the images
                var imgCount = images.length,
                    // count the number of images in the slide, including the new cloned element
                totalTime = (options.timeOnSlide + options.timeBetweenSlides) * (imgCount - 1),
                    // calculate the total length of the animation by multiplying the number of _actual_ images by the amount of time for both static display of each image and motion between them
                slideRatio = options.timeOnSlide / totalTime * 100,
                    // determine the percentage of time an induvidual image is held static during the animation
                moveRatio = options.timeBetweenSlides / totalTime * 100,
                    // determine the percentage of time for an individual movement
                basePercentage = 100 / imgCount,
                    // work out how wide each image should be in the slidy, as a percentage.
                position = 0,
                    // set the initial position of the slidy element
                css = document.createElement("style"); // start marking a new style sheet
                // creating css style tag
                css.type = "text/css";
                css.id = options.slidySelector.replace('#', '') + "-css";
                css.innerHTML += options.slidyContainerSelector + " { overflow: hidden; }\n";
                css.innerHTML += options.slidySelector + " { text-align: left; margin: 0; font-size: 0; position: relative; width: " + imgCount * 100 + "%;  }\n"; // set the width for the inner slider container
                css.innerHTML += options.slidySelector + " figure { float: left; margin: 0; position: relative; display: inline-block; width: " + basePercentage + "%; height: auto; }\n"; // set the width and size pf the inner <figure> elements
                css.innerHTML += options.slidySelector + " figure img { width: 100%; }\n";
                if (options.captionSource == "alt" || options.captionSource == "data-caption") {
                    css.innerHTML += options.slidySelector + " figure figcaption { position: absolute; width: 100%; background-color: " + options.captionBackground + "; color: " + options.captionColor + "; font-family: " + options.captionFont + ";";
                    var captions = document.getElementsByTagName("figcaption");
                    var captionHeight = captions[0].offsetHeight * 2 + parseInt(window.getComputedStyle(captions[0]).fontSize, 10);
                    if (options.captionPosition == "top") {
                        switch (options.captions) {
                            case 'fade':
                                css.innerHTML += " top: 0; opacity: 0;";
                                break;
                            case 'slide':
                                css.innerHTML += " top: -" + captionHeight + "px; ";
                                break;
                            default:
                                css.innerHTML += " top: 0;";
                        }
                    } else {
                        switch (options.captionAppear) {
                            case 'fade':
                                css.innerHTML += " bottom: 0; opacity: 0;";
                                break;
                            case 'slide':
                                css.innerHTML += " bottom: -" + captionHeight + "px; ";
                                break;
                            default:
                                css.innerHTML += " bottom: 0;";
                        }
                    }
                    css.innerHTML += " font-size: " + options.captionSize + "; padding: " + options.captionPadding + "; " + keyframeprefix + "transition: .5s; }\n";
                    css.innerHTML += options.slidySelector + ":hover figure figcaption { opacity: 1; ";
                    if (options.captionPosition == "top") {
                        css.innerHTML += " top: 0px;";
                    } else {
                        css.innerHTML += " bottom: 0px;";
                    }
                    css.innerHTML += " }\n";
                }
                css.innerHTML += "@" + keyframeprefix + "keyframes " + options.cssAnimationName + " {\n";
                if (options.slidyDirection == "right") {
                    for (i = imgCount - 1; i > 0; i--) {
                        // 
                        position += slideRatio; // make the keyframe the position of the image
                        css.innerHTML += position + "% { left: -" + i * 100 + "%; }\n";
                        position += moveRatio; // make the postion for the _next_ slide
                        css.innerHTML += position + "% { left: -" + (i - 1) * 100 + "%; }\n";
                    }
                } else {
                    // the slider is moving to the left    
                    for (i = 0; i < imgCount - 1; i++) {
                        // 
                        position += slideRatio; // make the keyframe the position of the image
                        css.innerHTML += position + "% { left: -" + i * 100 + "%; }\n";
                        position += moveRatio; // make the postion for the _next_ slide
                        css.innerHTML += position + "% { left: -" + (i + 1) * 100 + "%; }\n";
                    }
                }
                css.innerHTML += "}\n";
                css.innerHTML += options.slidySelector + " { ";
                if (options.slidyDirection == "right") {
                    css.innerHTML += "left: " + imgCount * 100 + "%";
                } else {
                    css.innerHTML += "left: 0%; ";
                }

                css.innerHTML += keyframeprefix + "transform: translate3d(0,0,0); " + keyframeprefix + "animation: " + totalTime + "s " + options.cssAnimationName + " infinite; }\n"; // call on the completed keyframe animation sequence
                // place css style tag
                if (options.cssLocation !== undefined) options.cssLocation.appendChild(css);else document.body.appendChild(css);
            } else {
                // fallback function
                options.fallbackFunction();
            }
        }();
    };
    cssSlidy();
});

/***/ })

/******/ });