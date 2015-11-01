var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.scripts([
        "jquery.js",
        "bootstrap.min.js",
        "contact_me.js",
        "jqBootstrapValidation.js",
        "boxgrid.js"
    ], 'public/js/all.js');    
});

elixir(function(mix) {
    mix.styles([
        "bootstrap.min.css",
        "modern-business.css",
        "font-awesome.min.css",
        "boxgrid.css"
    ], 'public/css/all.css');
});

elixir(function(mix) {
    mix.copy("resources/assets/fonts", "public/build/fonts");
//        .copy("resources/assets/sb-admin-2/bower_components/font-awesome/fonts", "public/build/fonts")
//        .copy("resources/assets/sb-admin-2/bower_components/jquery-prettyPhoto/images/prettyPhoto/default", "public/build/images/prettyPhoto/default");
});

elixir(function(mix) {
    mix.version([
        "public/css/all.css",
        "public/css/bootstrap.css",
        "public/css/admin.css",
        "public/js/all.js",
        "public/js/admin.js",
        "public/js/admin-sb2.js"        
    ]);
});
