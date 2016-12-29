const elixir = require('laravel-elixir');
const sourceVendor = 'resources/assets/vendor/';
const publicVendor = 'public/vendor/';
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
elixir(mix => {
    mix.copy(sourceVendor + 'jquery-typeahead/dist/jquery.typeahead.min.css', 
    	publicVendor + 'jquery-typeahead/jquery.typeahead.min.css');
    mix.copy(sourceVendor + 'jquery-typeahead/dist/jquery.typeahead.min.js', 
    	publicVendor + 'jquery-typeahead/jquery.typeahead.min.js');
});