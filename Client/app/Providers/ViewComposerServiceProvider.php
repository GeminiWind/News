<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;


class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        /*View::composer(
            'profile', 'App\Http\ViewComposers\ProfileComposer'
        );*/

        // Using Closure based composers...
        View::composer(['frontend.layout.include.navigation', 'frontend.layout.include.footer'], function ($view) {
           $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://aiwserver.com',
            // You can set any number of default request options.
            'timeout'  => 10.0,
        ]);
        $response = $client->request('GET', 'api/categories');
        $categories= json_decode($response->getBody());
        $view->with('categories',$categories);
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}