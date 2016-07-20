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
            'frontend/caseDetail.css',
            'frontend/caseList.css',
            'frontend/comment.css',
            'frontend/courseList.css',
            'frontend/create.css',
            'frontend/depart.css',
            'frontend/iconfont.css',
            'frontend/myachieve.css',
            'frontend/personal.css',
            'frontend/show.css',
            'frontend/style.css',
            'frontend/swipeslider.css'
        ], 'public/css/frontend.css')
        .copy(
            'resources/assets/js/frontend/swipeslider.min.js',
            'public/js/swipeslider.min.js'
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
            "public/js/backend.js"
        ]);
});