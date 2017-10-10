let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.webpackConfig({
  output: {
    publicPath: "/",
  },
});



// webpack.mix.js 是所有资源编译的入口，可以将其看作 Webpack 的轻量级配置封装层。
// Mix 任务可以以方法链的方式被链在一起来定义前端资源如何被编译。
mix.js('resources/assets/js/app.js', 'public/js')
   .js('node_modules/jquery/dist/jquery.js', 'public/static/js')
   .js('resources/assets/js/vendor/cssslidy.js', 'public/static/js')
   .js('resources/assets/js/index.js', 'public/js')
   .js('resources/assets/js/common.page.js', 'public/js')
   .js('resources/assets/js/vendor/html5shiv.min.js', 'public/static/js')
   .js('resources/assets/js/vendor/respond.min.js', 'public/static/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .less('resources/assets/sass/base.less','public/css')
   .less('resources/assets/sass/about.less','public/css')
   .less('resources/assets/sass/index.less','public/css');



/*
*如果你只想要将多个原生 CSS 样式文件合并到一个文件，可以使用 combine 方法。该方法还支持连接 JavaScript 文件：
*合并css文件
*mix.combine([
*    'public/css/vendor/normalize.css',
*    'public/css/vendor/videojs.css'
*], 'public/css/all.css');
*/


/*
*很多开发者会给编译的前端资源添加时间戳或者唯一令牌后缀以强制浏览器加载最新版本而不是代码的缓存副本。
*Mix 可以使用 version 方法为你处理这种情况。
*version 方法会自动附加唯一hash到已编译文件名，从而方便实现缓存刷新：
*
*mix.js('resources/assets/js/app.js', 'public/js')
*   .version();
*/

// mix.disableNotifications(); 禁用通知


// 别人写的配置示例
/*
  ctrl+shift+/  多行注释
 mix.webpackConfig({
  output: {
    publicPath: "/",
    chunkFilename: 'js/[name].[chunkhash].js'
  },
  resolve: {
    alias: {
      'components': 'assets/js/components',
      'config': 'assets/js/config',
      'lang': 'assets/js/lang',
      'plugins': 'assets/js/plugins',
      'vendor': 'assets/js/vendor',
      'views': 'assets/js/views',
      'dashboard': 'assets/js/views/dashboard',
    },
    modules: [
      'node_modules',
      path.resolve(__dirname, "resources")
    ]
  },
})

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .js('resources/assets/js/home.js', 'public/js')
   .sass('resources/assets/sass/home.scss', 'public/css')
   .version();
*/