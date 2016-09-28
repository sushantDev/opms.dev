var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');

       .styles([
            'blog-post.css',
            'bootstrap.css',
            'font-awesome.css',
            'metisMenu.css',
            'sb-admin-2.css',
            'bootstrap.min.css',
            'bootstrap-theme.css',
            'elegant-icons-style.css',
            'font-awesome.css',
            'font-awesome.min.css',
            'fullcalendar.css',
            'jquery-jvectormap-1.2.2.css',
            'jquery-ui-1.10.4.min.css',
            'line-icons.css',
            'owl.carousel.css',
            'style.css',
            'style-responsive.css',
            'widgets.css',
            'xcharts.min.css'

 ], './public/css/libs.css')


     .scripts([

            'jquery.js',
            'bootstrap.js',
            'sb-admin-2.js',
            'metisMenu.js',
            'scripts.js',
            'additional-methods.min.js',
            'bootstrap.js',
            'bootstrap.min.js',
            'bootstrap-switch.js',
            'bootstrap-wysiwyg.js',
            'bootstrap-wysiwyg-custom.js',
            'calendar-custom.js',
            'chartjs-custom.js',
            'charts.js',
            'charts-flot.js',
            'charts-other.js',
            'charts-xcharts.js',
            'dynamic-table.js',
            'easy-pie-chart.js',
            'excanvas.min.js',
            'form-component.js',
            'form-validation-script.js',
            'fullcalendar.js',
            'fullcalendar.min.js',
            'ga.js',
            'gdp-data.js',
            'gritter.js',
            'html5shiv.js',
            'index.js',
            'jquery.autosize.min.js',
            'jquery.customSelect.min.js',
            'jquery.flot.pie.js',
            'jquery.hotkeys.js',
            'jquery.js',
            'jquery.localscroll.js',
            'jquery.nicescroll.js',
            'jquery.placeholder.min.js',
            'jquery.rateit.min.js',
            'jquery.scrollTo.min.js',
            'jquery.slimscroll.min.js',
            'jquery.smartWizard.js',
            'jquery.sparkline.js',
            'jquery.sparkline-11.js',
            'jquery.stepy.js',
            'jquery.tagsinput.js',
            'jquery.validate.min.js',
            'jquery-1.8.3.min.js',
            'jquery-jvectormap-1.2.2.min.js',
            'jquery-jvectormap-world-mill-en.js',
            'jquery-ui-1.9.2.custom.min.js',
            'jquery-ui-1.10.4.min.js',
            'lte-ie7.js',
            'morris.min.js',
            'morris-script.js',
            'owl.carousel.js',
            'scripts.js',
            'sliders.js',
            'sparkline-chart.js',
            'sparklines.js',
            'xcharts.min.js'



     ], './public/js/libs.js')
});
