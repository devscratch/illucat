<?php

namespace Illucat\Factory;

use Illucat\Support\Cookies;
use Illucat\Support\Socks;
use Illucat\Factory\Uber;

trait Driver {

    /**
     * The instance variable to start driver resource.
     *
     * @var $ch
     */

     protected $ch;

     /**
      * The Adress To be used Driver when Taking pasenger
      *
      * @var $url
      */

     protected $url;

     /**
      * The User Agent String to defining the driver agent!.
      *
      * @var $agent
      */

      protected $agent;

      /**
       * The instance of Illucat\Support\Cookies to set the driver cookies.
       *
       * @var $cookiefile
       */

       protected $cookiefile;

       /**
        * The instance of Illucat\Support\Socks tho set the driver socks.
        *
        * @var $socks
        */

        protected $socks;

        /**
         * Error handling? Why not?!
         *
         * @var $errors
         */

         protected $errors;


         public static function Take($url,$sock = "",$agent = "")
         {
           $ch = curl_init();
           curl_setopt($ch, CURLOPT_URL, $url);
           curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
           curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
           curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
           curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
           if($sock != "")
           {
             curl_setopt($ch, CURLOPT_PROXY, $sock);
             curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
           }
           if($agent != "")
           {
             curl_setopt($ch, CURLOPT_USERAGENT, $agent);
           }
           else
           {
             curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36");
           }
           curl_setopt($ch, CURLOPT_TIMEOUT, 10);
           $result = curl_exec($ch);
           return $result;
         }

}
