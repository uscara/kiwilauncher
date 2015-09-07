var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    //mix.less('app.less');
    mix.sass("frontend/web-style.scss", "public/css/web-style.css");
    mix.sass("backend/admin-style.scss", "public/css/admin-style.css");
    
    mix.scripts(["frontend/menu.js", "frontend/index.js"], "public/js/web-index.js");
    mix.scripts(["frontend/menu.js", "frontend/skills.js"], "public/js/web-skills.js");
    mix.scripts(["frontend/menu-works.js", "frontend/works.js"], "public/js/web-works.js");
    mix.scripts(["frontend/menu.js"], "public/js/web-work-detail.js");
    mix.scripts(["frontend/menu.js", "frontend/blog.js"], "public/js/web-blog.js");
    mix.scripts(["frontend/menu.js", "frontend/contact.js"], "public/js/web-contact.js");

    mix.scripts("backend/admin-blog-post-form.js", "public/js/admin-blog-post-form.js");
    mix.scripts("backend/admin-image-post-form.js", "public/js/admin-image-post-form.js");
    mix.scripts("backend/admin-index.js", "public/js/admin-index.js");
    mix.scripts("backend/admin-menu.js", "public/js/wadmin-menu.js");
    mix.scripts("backend/admin-user-form.js", "public/js/admin-user-form.js");
    mix.scripts("backend/admin-work-post-form.js", "public/js/admin-work-post-form.js");

});

