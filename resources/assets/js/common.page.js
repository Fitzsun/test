// // require('bootstrap/dist/css/bootstrap.min.css');
// require('iconfontDir/iconfont.css');
// // 公共的样式
// require('lessDir/base.less');
// // require('metisMenu/metisMenu.min');
// require('bootstrap/dist/js/bootstrap.min.js');
// require('vendorDir/promise.min');


  // $('#side-menu').metisMenu();
  // $('#side-menu').css('visibility', 'visible');
  // (() => {
  //   const width = (window.innerWidth > 0) ? window.innerWidth : window.screen.width;
  //   if (width < 768) {
  //     $('div.navbar-collapse').addClass('collapse');
  //     // topOffset = 100; // 2-row-menu
  //     const topOffset = $('nav.navbar').height() + 1 + 1;

  //     let height = ((window.innerHeight > 0) ? window.innerHeight : window.screen.height) - 4;
  //     height = height - topOffset;
  //     if (height < 1) height = 1;
  //     if (height > topOffset) {
  //       $('#page-wrapper').css('min-height', (height) + 'px');
  //     }
  //   } else {
  //     $('div.navbar-collapse').removeClass('collapse');
  //   }

  //   const url = window.location.href;
  //   let element = $('ul.nav a').filter(function filterCb() {
  //     return this.href === url;
  //   }).addClass('active')
  //     .parent('li');
  //   let ifContinue = true;
  //   while (ifContinue) {
  //     if (element.is('li')) {
  //       element = element.parent('ul').addClass('in')
  //                        .parent('li')
  //                        .addClass('active');
  //     } else {
  //       ifContinue = false;
  //     }
  //   }
  // })();

  /* 事件绑定 开始 */
  // 事件绑定 .click  .on  .bind   .delegate
  // $('#navbar>ul').on('click', 'li', function() {
  //   var _index = $(this).index();

  //   $(this).addClass('active').siblings().removeClass('active');
  // });
  /* 事件绑定 结束 */

  // 页面跳转并改变导航栏颜色
  $(document).ready(function() {
    $('#navbar li a').each(function() {
      if ($($(this))[0].href === String(window.location)) { $(this).parent().addClass('active'); };
    });

    // 公用的头和尾是ajax请求得到的,请求一次并缓存下来
    // 友情链接部分
    $.ajax({
      type: 'get',
      url: '/ajax/links',
      cache: true,
      success: function(data) {
        console.log(data);
        var html = '';
        // for循环竟然写错了,最后为i++
        for (var i = 0; i < data.length; i++) {
          var obj = data[i];
          // 拼接字符串也写错了,只写li就行
          html += `
            <li><a href="${obj['link_href']}" rel="nofollow">${obj['link_name']}</a></li>
          `;
        }
        // 循环结束保存数据
        console.log(html);
        $('.friendly-link>.clearfix').html(html);
      },
    });
  });

  /* 各种定时器 开始 */
  /* 各种定时器 结束 */

