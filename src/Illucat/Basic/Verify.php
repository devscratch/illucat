<?php

namespace Illucat\Verify;

use Illucat\Factory\Factory;
use Illucat\Basic\Manager;

trait verifyAll {

    /**
     * Set the variable of license key;
     *
     * @var  $licenseKey
     */

     protected $licenseKey;

     /**
      * Set the variables of server IP
      *
      * @var $serverIP
      */

      protected $serverIP;

      /**
       * The variable of API Request;
       *
       * @var $API
       */

       protected $API;

       /**
        * The variable of response.
        *
        * @var $response
        */

    public static function license()
    {

      $this->licenseKey = env("LICENSE_KEY");
      $this->serverIP   = env("SERVER_IP");
      $this->API        = "http://localhost/license.php?license=" . $this->licenseKey . "&server_ip=" . $this->serverIP;
      return Factory::proccessResponse($this->API, Manager::verified(), Manager::reroute('/license?failed=true', view('k0984')));

    }

}
