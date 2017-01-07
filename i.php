<?php

require __DIR__ . '/vendor/autoload.php';

class c {

  use Illucat\Support\Socks;

  public function cookies()
  {
    $sock = self::grabCookies();
    $explode = explode(PHP_EOL, $sock);
    return $explode;
  }

  public function massRegister()
  {
    $agent = Faker\Provider\UserAgent::userAgent();
    $socks = $this->cookies();
      //
      foreach($socks as $sock)
      {
        $faker = Faker\Factory::create();

        $register = \Illucat\Factory\Mass::Mass($sock,$faker->email,$faker->password,$agent);
        if(preg_match("/Successfully/", $register))
        {
          echo "[" . $sock . "] | " . $faker->email . "|" . $faker->password . " => successfully registered on jsec.me!" . PHP_EOL;

        }
        elseif(preg_match("/Back/", $register)) {
          echo "[" . $sock . "] | " . $faker->email . "|" . $faker->password . " => register failed on jsec.me! IP Banned" . PHP_EOL;
        }
      }
  }


}

$a = new c;
$a->massRegister();
