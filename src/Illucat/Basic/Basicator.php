<?php

namespace Illucat\Basic;

use Illuminate\Support\Facades\Route;
use Illucat\Verify\verifyAll;

trait Manager {

    public function Init()
    {
        return $this->CheckLicense();
    }

    public function reroute($router,$action)
    {
      return Route::get($router, function(){
          return $action;
      });
    }

    public function CheckLicense()
    {
      return verifyAll::license();
    }

}
