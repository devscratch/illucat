<?php

namespace Illucat\Basic;

use Illuminate\Support\Facades\Route

trait Manager {

    public function Init()
    {
        Route::get('/ttt', function(){
          die('route works!');
        });
    }

}
