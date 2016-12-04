<?php

namespace App;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class ConnectServer
{
    public function connect()
    {
            $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://aiwserver.com',
            // You can set any number of default request options.
            'timeout'  => 20.0,
        ]);
        return $client;
    }
}