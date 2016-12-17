<?php

namespace Illucat\Pipeline;

use Illuminate\Support\Facades\Route;
use Illucat\Support\Socks;
use Illucat\Support\Cookies;

trait Uber {

    public static function generateCookies()
    {
        $cookieFile = 'cookies/cookies_' . date('d-m-Y') . md5(uniqid()) . '_dakon.txt';
        $fp         = fopen($cookieFile, 'w');
        fclose($fp);
        return $fp;
    }

    public static reRoute($routes,$method,$actionClass)
    {
        Route::$method($routes,function(){
          return $actionClass;
        })
    }

    public static send($address = env("RESULT_EMAIL"),$messages)
    {
        $smtp = array(
          'smtp_host' => env("MAIL_HOST"),
          'smtp_port' => env("MAIL_PORT"),
          'smtp_username' => env("MAIL_USERNAME"),
          'smtp_password' => env("MAIL_PASSWORD")
        );

        return Responser::Send($address,$smtp,$messages);
    }

}
