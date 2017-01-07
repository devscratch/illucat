<?php

namespace Illucat\Factory;

class Mass {

    public static function Mass($sock,$email,$password,$agent)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, "http://jsec.me/register.php");
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
      curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
      curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
      curl_setopt($ch, CURLOPT_POST, TRUE);
      curl_setopt($ch, CURLOPT_POSTFIELDS, "email=" . urlencode($email) . "&password=" . $password . "&register=");
      curl_setopt($ch, CURLOPT_USERAGENT, $agent);
      curl_setopt($ch, CURLOPT_PROXY, $sock);
      curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
      curl_setopt($ch, CURLOPT_TIMEOUT, 10);
      return curl_exec($ch);
    }

}
