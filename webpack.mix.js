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

// 前端
mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/views/frontend/custom/_custom.js', 'public/js')
    .js('resources/views/frontend/custom/tofuture/assets/js/plugin/jquery.fs.tipper.min.js', 'public/js')
    .js('resources/views/frontend/custom/tofuture/assets/js/revolution-slider.js', 'public/js')
    .js('resources/views/frontend/custom/tofuture/assets/js/theme.js', 'public/js')
    .js('resources/views/frontend/custom/tofuture/assets/js/verify.js', 'public/js')
    .js('resources/views/frontend/custom/tofuture/admin/js/admin.js', 'public/js')
    .sass('resources/views/frontend/custom/tofuture/admin/css/customadmin.scss','public/css')
    .sass('resources/views/frontend/custom/tofuture/admin/css/dataTables.responsive.scss','public/css')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/views/frontend/custom/_custom.scss', 'public/css');

mix.styles([
    'resources/views/frontend/custom/tofuture/assets/css/plugin/colorbox.css',
    'resources/views/frontend/custom/tofuture/assets/css/plugin/jquery.fs.tipper.css',
    'resources/views/frontend/custom/tofuture/assets/css/style.css',
], 'public/css/style.css');
// combine all css/js into a single css/js
mix.styles([
    'public/css/_custom.css',
], 'public/css/all.css');
mix.scripts([
    'public/js/_custom.js',
], 'public/js/all.js');
// 最终加载两个文件， all.css 和 all.js
mix.scripts([
    'resources/views/frontend/custom/tofuture/admin/js/jquery.dataTables.min.js',
    'resources/views/frontend/custom/tofuture/admin/js/dataTables.bootstrap.min.js',
    'resources/views/frontend/custom/tofuture/admin/js/dataTables.responsive.js',
], 'public/js/dataTable.js');

// 后台
mix.js('resources/assets/js/backend.js', 'public/js')
    .sass('resources/assets/sass/backend.scss', 'public/css');

/*
*   拷贝图片等
*/
mix.copyDirectory( ['resources/assets/images'],    'public/images')
    .copyDirectory(['resources/views/frontend/custom/tofuture/assets/img'],'public/images/tofuture')
    .copyDirectory(['resources/views/frontend/custom/tofuture/assets/plugin/rs-plugin'],'public/demos/rs-plugin');

