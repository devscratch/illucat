<?php

namespace Illucat\Factory;

use Illucat\Factory\Driver;
use Illucat\Factory\Slicer;

class Mass {

    public static function Mass($url,$sock,$agent)
    {
        echo "[" . $sock . "] => boting..... ";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "www.google.com/lksdfk");
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
        curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
        curl_setopt($ch, CURLOPT_PROXY, $sock);
        curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
        curl_setopt($ch, CURLOPT_USERAGENT, $agent);
        $result = curl_exec($ch);
        return var_dump(curl_getinfo($ch));


        if(preg_match("/\"images\/add\-to\-cart\.png/",$grab))
        {
            echo "ada add to cartnya" . PHP_EOL;
        }
        else
        {
            $grabs = Driver::Take($url['u'],$sock,$agent);
            if(preg_match("/\"images\/add\-to\-cart\.png/",$grabs))
            {
              echo "ada add to cartnya" . PHP_EOL;
            }
        }

    }

    public static function grab($url,$sock,$agent)
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
    }

}
