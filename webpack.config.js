const Encore = require('@symfony/webpack-encore');

// Manually configure the runtime environment if not already configured yet by the "encore" command.
// It's useful when you use tools that rely on webpack.config.js file.
if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    // directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // public path used by the web server to access the output path
    .setPublicPath('/build')
    // only needed for CDN's or sub-directory deploy
    //.setManifestKeyPrefix('build/')

    /*
     * ENTRY CONFIG
     *
     * Each entry will result in one JavaScript file (e.g. app.js)
     * and one CSS file (e.g. app.css) if your JavaScript imports CSS.
     */
    .addEntry('app', './assets/app.js')
    

    // js file inculdes
    .addEntry('js/advancedform', './assets/js/advancedform.js')
    .addEntry('js/apexcharts', './assets/js/apexcharts.js')
    .addEntry('js/autofill-table', './assets/js/autofill-table.js')
    .addEntry('js/carousel', './assets/js/carousel.js')
    .addEntry('js/chart', './assets/js/chart.js')
    .addEntry('js/charts', './assets/js/charts.js')
    .addEntry('js/chat', './assets/js/chat.js')
    .addEntry('js/construction', './assets/js/construction.js')
    .addEntry('js/crypto-datatable', './assets/js/crypto-datatable.js')
    .addEntry('js/custom', './assets/js/custom.js')
    .addEntry('js/custom1', './assets/js/custom1.js')
    .addEntry('js/datatable', './assets/js/datatable.js')
    .addEntry('js/datetime-table', './assets/js/datetime-table.js')
    .addEntry('js/echarts', './assets/js/echarts.js')
    .addEntry('js/flot', './assets/js/flot.js')
    .addEntry('js/form-editor2', './assets/js/form-editor2.js')
    .addEntry('js/form-elements', './assets/js/form-elements.js')
    .addEntry('js/form-validation', './assets/js/form-validation.js')
    .addEntry('js/form-wizard', './assets/js/form-wizard.js')
    .addEntry('js/formeditor', './assets/js/formeditor.js')
    .addEntry('js/formelementadvnced', './assets/js/formelementadvnced.js')
    .addEntry('js/froala', './assets/js/froala.js')
    .addEntry('js/fullcalendar', './assets/js/fullcalendar.js')
    .addEntry('js/generate-otp', './assets/js/generate-otp.js')
    .addEntry('js/handlecounter', './assets/js/handlecounter.js')
    .addEntry('js/index', './assets/js/index.js')
    .addEntry('js/index1', './assets/js/index1.js')
    .addEntry('js/jvectormap', './assets/js/jvectormap.js')
    .addEntry('js/landing', './assets/js/landing.js')
    .addEntry('js/map-leafleft', './assets/js/map-leafleft.js')
    .addEntry('js/mapelmaps', './assets/js/mapelmaps.js')
    .addEntry('js/modal', './assets/js/modal.js')
    .addEntry('js/morris', './assets/js/morris.js')
    .addEntry('js/nvd3', './assets/js/nvd3.js')
    .addEntry('js/owl-carousel', './assets/js/owl-carousel.js')
    .addEntry('js/picker', './assets/js/picker.js')
    .addEntry('js/range', './assets/js/range.js')
    .addEntry('js/rangeslider', './assets/js/rangeslider.js')
    .addEntry('js/select2', './assets/js/select2.js')
    .addEntry('js/slider', './assets/js/slider.js')
    .addEntry('js/sticky', './assets/js/sticky.js')
    .addEntry('js/summernote', './assets/js/summernote.js')
    .addEntry('switcher/switcher', './assets/switcher/switcher.js')
    .addEntry('js/sweet-alert', './assets/js/sweet-alert.js')
    .addEntry('js/table-data', './assets/js/table-data.js')
    .addEntry('js/themeColors', './assets/js/themeColors.js')
    .addEntry('js/timline', './assets/js/timline.js')
    .addEntry('js/tooltip&popover', './assets/js/tooltip&popover.js')
    .addEntry('js/typehead', './assets/js/typehead.js')
    .addEntry('js/widget', './assets/js/widget.js')
    
    // enables the Symfony UX Stimulus bridge (used in assets/bootstrap.js)
    .enableStimulusBridge('./assets/controllers.json')

    // When enabled, Webpack "splits" your files into smaller pieces for greater optimization.
    .splitEntryChunks()

    // will require an extra script tag for runtime.js
    // but, you probably want this, unless you're building a single-page app
    .enableSingleRuntimeChunk()

    /*
     * FEATURE CONFIG
     *
     * Enable & configure other features below. For a full
     * list of features, see:
     * https://symfony.com/doc/current/frontend.html#adding-more-features
     */
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    // enables hashed filenames (e.g. app.abc123.css)
    .enableVersioning(Encore.isProduction())
 /*
    .configureBabel((config) => {
        config.plugins.push('@babel/plugin-proposal-class-properties');
    })

    // enables @babel/preset-env polyfills
    .configureBabelPresetEnv((config) => {
        config.useBuiltIns = 'usage';
        config.corejs = 3;
    })
 */
    .copyFiles({
        from: './assets/images',

        // optional target path, relative to the output dir
        to: 'images/[path][name].[ext]',

        // if versioning is enabled, add the file hash too
        //to: 'images/[path][name].[hash:8].[ext]',

        // only copy files matching this pattern
        //pattern: /\.(png|jpg|jpeg)$/
    })

    .copyFiles({
        from: './assets/plugins',

        // optional target path, relative to the output dir
        to: 'plugins/[path][name].[ext]',

        // if versioning is enabled, add the file hash too
        //to: 'images/[path][name].[hash:8].[ext]',

        // only copy files matching this pattern
        //pattern: /\.(png|jpg|jpeg)$/
    })

    
    // enables Sass/SCSS support
    .enableSassLoader()

    // uncomment if you use TypeScript
    //.enableTypeScriptLoader()

    // uncomment if you use React
    //.enableReactPreset()

    // uncomment to get integrity="..." attributes on your script & link tags
    // requires WebpackEncoreBundle 1.4 or higher
    //.enableIntegrityHashes(Encore.isProduction())

    // uncomment if you're having problems with a jQuery plugin
    //.autoProvidejQuery()
;

module.exports = Encore.getWebpackConfig();
