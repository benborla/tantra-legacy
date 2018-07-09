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

mix.scripts([
    'public/assets/bower_components/jquery/dist/jquery.min.js',
// <!-- GSAP -->
    'public/assets/bower_components/gsap/src/minified/TweenMax.min.js',
    'public/assets/bower_components/gsap/src/minified/plugins/ScrollToPlugin.min.js',

// <!-- Bootstrap -->
    'public/assets/bower_components/tether/dist/js/tether.min.js',
    'public/assets/bower_components/bootstrap/dist/js/bootstrap.min.js',

// <!-- Sticky Kit -->
    'public/assets/bower_components/sticky-kit/dist/sticky-kit.min.js',

// <!-- Jarallax -->
    'public/assets/bower_components/jarallax/dist/jarallax.min.js',
    'public/assets/bower_components/jarallax/dist/jarallax-video.min.js',

// <!-- Flickity -->
    'public/assets/bower_components/flickity/dist/flickity.pkgd.min.js',

// <!-- Isotope -->
    'public/assets/bower_components/isotope/dist/isotope.pkgd.min.js',

// <!-- Photoswipe -->
    'public/assets/bower_components/photoswipe/dist/photoswipe.min.js',
    'public/assets/bower_components/photoswipe/dist/photoswipe-ui-default.min.js',

// <!-- Typed.js -->
    'public/assets/bower_components/typed.js/dist/typed.min.js',

// <!-- Jquery Form -->
    'public/assets/bower_components/jquery-form/jquery.form.js',

// <!-- Jquery Validation -->
    'public/assets/bower_components/jquery-validation/dist/jquery.validate.min.js',

// <!-- Jquery Countdown + Moment -->
    'public/assets/bower_components/jquery.countdown/dist/jquery.countdown.min.js',
    'public/assets/bower_components/moment/min/moment.min.js',
    'public/assets/bower_components/moment-timezone/builds/moment-timezone-with-data.js',

// <!-- Hammer.js -->
    'public/assets/bower_components/hammer.js/hammer.min.js',

// <!-- nK Share -->
    'public/assets/plugins/nk-share/nk-share.js',

// <!-- NanoSroller -->
    'public/assets/bower_components/nanoscroller/bin/javascripts/jquery.nanoscroller.min.js',

// <!-- SoundManager2 -->
    'public/assets/bower_components/SoundManager2/script/soundmanager2-nodebug-jsmin.js',

// <!-- DateTimePicker -->
    'public/assets/bower_components/datetimepicker/build/jquery.datetimepicker.full.min.js',

// <!-- Revolution Slider -->
    'public/assets/plugins/revolution/js/jquery.themepunch.tools.min.js',
    'public/assets/plugins/revolution/js/jquery.themepunch.revolution.min.js',
    'public/assets/plugins/revolution/js/extensions/revolution.extension.video.min.js',
    'public/assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js',
    'public/assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js',

// <!-- Keymaster -->
    'public/assets/bower_components/keymaster/keymaster.js',

// <!-- Summernote -->
    'public/assets/bower_components/summernote/dist/summernote.min.js',

// <!-- Prism -->
    'public/assets/bower_components/prism/prism.js',

// <!-- GODLIKE -->
    'public/assets/js/godlike.min.js',
    'public/assets/js/godlike-init.js'
], 'public/assets/bundle.js');

mix.styles([
    'public/assets/bower_components/bootstrap/dist/css/bootstrap.min.css',
    'public/assets/bower_components/fontawesome/css/font-awesome.min.css',
    'public/assets/bower_components/ionicons/css/ionicons.min.css',
    'public/assets/plugins/revolution/css/settings.css',
    'public/assets/plugins/revolution/css/layers.css',
    'public/assets/plugins/revolution/css/navigation.css',
    'public/assets/bower_components/flickity/dist/flickity.min.css',
    'public/assets/bower_components/photoswipe/dist/photoswipe.css',
    'public/assets/bower_components/photoswipe/dist/default-skin/default-skin.css',
    'public/assets/bower_components/datetimepicker/build/jquery.datetimepicker.min.css',
    'public/assets/plugins/revolution/css/settings.css',
    'public/assets/plugins/revolution/css/layers.css',
    'public/assets/plugins/revolution/css/navigation.css',
    'public/assets/bower_components/prism/themes/prism-tomorrow.css',
    'public/assets/bower_components/summernote/dist/summernote.css',
    'public/assets/css/godlike.css',
    'public/assets/css/custom.css'
], 'public/assets/bundle.css');