<?php

namespace Illucat\Config;

//use  as Socks;

class c {


  public function __construct($url)
  {
      return $this->massRegister($url);
  }

  public function cookies()
  {
    $sock = \Illucat\Support\Socks::grabCookies();
    $explode = explode(PHP_EOL, $sock);
    return $explode;
  }

  public function massRegister($url)
  {
    $agent = \Faker\Provider\UserAgent::userAgent();
    $socks = \Illucat\Support\Socks::grabCookies();


    $faker = \Faker\Factory::create();

    $register = \Illucat\Factory\Mass::Mass($url,$socks,$agent);
  }


}
