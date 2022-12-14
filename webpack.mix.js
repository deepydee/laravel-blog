let mix = require('laravel-mix');

mix.setPublicPath('public');

mix.combine([
    'resources/assets/admin/plugins/fontawesome-free/css/all.min.css',
    'resources/assets/admin/css/adminlte.min.css',
    'resources/assets/admin/plugins/select2/css/select2.min.css',
    'resources/assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css',
], 'public/assets/admin/css/admin.min.css');

mix.combine([
    'resources/assets/front/css/bootstrap.css',
    'resources/assets/front/css/font-awesome.min.css',
    'resources/assets/front/css/style.css',
    'resources/assets/front/css/animate.css',
    'resources/assets/front/css/responsive.css',
    'resources/assets/front/css/colors.css',
    'resources/assets/front/css/version/marketing.css',
], 'public/assets/front/css/styles.min.css');

mix.combine([
    'resources/assets/admin/plugins/jquery/jquery.min.js',
    'resources/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js',
    'resources/assets/admin/plugins/select2/js/select2.full.min.js',
    'resources/assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js',
    'resources/assets/admin/js/adminlte.min.js',
    'resources/assets/admin/js/custom.js',
], 'public/assets/admin/js/admin.min.js');

mix.combine([
    'resources/assets/front/js/jquery.min.js',
    'resources/assets/front/js/tether.min.js',
    'resources/assets/front/js/bootstrap.js',
    'resources/assets/front/js/animate.js',
    'resources/assets/front/js/custom.js',
], 'public/assets/front/js/scripts.min.js');

mix.copyDirectory('resources/assets/admin/plugins/fontawesome-free/webfonts', 'public/assets/admin/webfonts');
mix.copyDirectory('resources/assets/admin/img', 'public/assets/admin/img');

mix.copyDirectory('resources/assets/front/fonts', 'public/assets/front/fonts');
mix.copyDirectory('resources/assets/front/images', 'public/assets/front/images');
mix.copyDirectory('resources/assets/front/upload', 'public/assets/front/upload');

mix.copy('resources/assets/admin/css/adminlte.min.css.map', 'public/assets/admin/css/adminlte.min.css.map');
mix.copy('resources/assets/admin/js/adminlte.min.js.map', 'public/assets/admin/js/adminlte.min.js.map');