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
        .copy(
            'resources/assets/js/backend/globalize.culture.zh-CHS.js',
            'public/js/globalize.culture.zh-CHS.js'
        )
        .copy(
            'node_modules/jqwidgets-framework/jqwidgets/styles/',
            'resources/assets/css/backend/jqwidgets'
        )
        .copy(
            "node_modules/jqwidgets-framework/jqwidgets/",
            'resources/assets/js/backend/jqwidgets'
        )
        .styles([
            'backend/jqwidgets/jqx.base.css',
            'backend/jqwidgets/jqx.bootstrap.css'
        ], 'public/css/jqxDatagrid.css')

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
         * Jqwidgets
         */
        .scripts([
            "backend/jqwidgets/jqxcore.js",
            "backend/jqwidgets/jqxdata.js",
            "backend/jqwidgets/jqxdata.export.js",
            "backend/jqwidgets/jqxbuttons.js",
            "backend/jqwidgets/jqxscrollbar.js",
            "backend/jqwidgets/jqxlistbox.js",
            "backend/jqwidgets/jqxdropdownlist.js",
            "backend/jqwidgets/jqxmenu.js",
            "backend/jqwidgets/jqxgrid.js",
            "backend/jqwidgets/jqxgrid.filter.js",
            "backend/jqwidgets/jqxgrid.sort.js",
            "backend/jqwidgets/jqxgrid.selection.js",
            "backend/jqwidgets/jqxgrid.columnsresize.js",
            "backend/jqwidgets/jqxgrid.export.js",
            "backend/jqwidgets/jqxgrid.pager.js",
            "backend/jqwidgets/jqxpanel.js",
            "backend/jqwidgets/globalization/globalize.js",
            "backend/jqwidgets/jqxcalendar.js",
            "backend/jqwidgets/jqxdatetimeinput.js",
            "backend/jqwidgets/jqxcheckbox.js"
        ], 'public/js/jqxDatagrid.js')

        /**
         * Apply version control
         */
        .version([
            "public/css/frontend.css",
            "public/css/backend.css",
            "public/js/backend.js"
        ]);
});