var elixir = require('laravel-elixir');
require('./elixir-extensions');

elixir(function (mix) {
    mix
    //.phpUnit()
    //.compressHtml()

    /**
     * Copy needed files from /node directories
     * to /public directory.
     */
        .copy(
            'resources/assets/js/frontend/swipeslider.min.js',
            'public/js/swipeslider.min.js'
        )
        .copy(
            'resources/assets/js/frontend/chinaMapConfig.js',
            'public/js/chinaMapConfig.js'
        )
        .copy(
            'resources/assets/js/frontend/map.js',
            'public/js/map.js'
        )
        .copy(
            'resources/assets/js/frontend/upload.js',
            'public/js/upload.js'
        )
        .copy(
            'resources/assets/js/plugin/intense/intense.js',
            'public/js/intense.js'
        )

        /**
         * Process backend SCSS stylesheets
         */
        .sass([
            'backend/app.scss',
            'backend/plugin/toastr/toastr.scss',
            'plugin/sweetalert/sweetalert.scss'
        ], 'resources/assets/css/backend/app.css')

        /**
         * Combine pre-processed backend CSS files
         */
        .styles([
            'backend/app.css'
        ], 'public/css/backend.css')

        /**
         * Combine backend scripts
         */
        .scripts([
            'plugin/sweetalert/sweetalert.min.js',
            'plugins.js',
            'backend/app.js',
            'backend/plugin/toastr/toastr.min.js',
            'backend/custom.js'
        ], 'public/js/backend.js')

        /**
         * Apply version control
         */
        .version([
            "public/css/frontend.css",
            "public/css/backend.css",
            "public/js/backend.js",
        ]);
});