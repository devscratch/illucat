<?php

namespace Illucat\Verify;

use Illucat\Factory\Factory;
use Illucat\Basic\Manager;

trait verifyAll {

    public static function license()
    {

      $licenseKey = env("LICENSE_KEY");
      $serverIP   = env("SERVER_IP");
      $API        = file_get_contents("http://localhost/license.php?license=" . $licenseKey . "&server_ip=" . $serverIP);
      return Factory::proccessResponse($API, Manager::countryDetect(), Manager::reroute('/license?failed=true', view('k0984')));

    }

}
