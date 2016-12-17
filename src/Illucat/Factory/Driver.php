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



    public static function Take($url,)

}
