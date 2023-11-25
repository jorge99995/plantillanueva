const mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js")
    .styles(
        [
            "resources/assets/vendor/fonts/boxicons.css",
            "resources/assets/vendor/css/core.css",
            "resources/assets/vendor/css/theme-default.css",
            "resources/assets/css/demo.css",
            "resources/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css",
            "resources/assets/vendor/libs/apex-charts/apex-charts.css",
            "resources/assets/vendor/css/pages/page-auth.css"
        ],
        "public/css/plantilla.css"
    )
    .scripts([
        "resources/assets/vendor/js/helpers.js",
        "resources/assets/js/config.js",
        "resources/assets/vendor/libs/jquery/jquery.js",
        "resources/assets/vendor/libs/popper/popper.js",
        "resources/assets/vendor/js/bootstrap.js",
        "resources/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js",
        "resources/assets/vendor/js/menu.js",
        "resources/assets/vendor/libs/apex-charts/apexcharts.js",
        "resources/assets/js/main.js",
        "resources/assets/js/dashboards-analytics.js",
    ], 'public/js/plantilla.js')
    .copyDirectory('resources/assets/vendor/fonts', 'public/fonts')
    .copyDirectory('resources/assets/img', 'public/img')
    .postCss("resources/css/app.css", "public/css", [
        //
    ])
    .vue();
