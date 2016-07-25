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
        .styles([
            'frontend/active.css',
            'frontend/caseDetail.css',
            'frontend/caseList.css',
            'frontend/comment.css',
            'frontend/courseList.css',
            'frontend/create.css',
            'frontend/depart.css',
            'frontend/iconfont.css',
            'frontend/map.css',
            'frontend/myachieve.css',
            'frontend/participate.css',
            'frontend/personal.css',
            'frontend/schoolList.css',
            'frontend/show.css',
            'frontend/style.css',
            'frontend/swipeslider.css',
            'frontend/uploadstyle.css',
            'frontend/video.css'
        ], 'public/css/frontend.css')

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
            'resource/asset/js/plugin/intense/intense.js',
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