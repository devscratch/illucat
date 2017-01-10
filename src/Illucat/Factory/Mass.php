<?php

namespace Illucat\Factory;

use Illucat\Factory\Driver;
use Illucat\Factory\Slicer;

class Mass {

    public static function Mass($url,$sock,$agent)
    {

        $listSocks = explode("\r\n", $sock);
        foreach($listSocks as $sock)
        {
          echo "socknya => " .  $sock . "\r\n";
            /*
            echo "[" . $sock . "] => boting..... ";
            $grab = Driver::Take($url,$sock,$agent);
            if(preg_match("/\"images\/add\-to\-cart\.png/",$grab))
            {
                echo "ada add to cartnya" . PHP_EOL;
            }
            else
            {
                echo "nggak ada" . PHP_EOL;
            }
            */
        }



    }

}
