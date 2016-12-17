<?php

namespace Illucat\Route;

use Illuminate\Support\Facades\Route;

trait Unit
{
    function Main()
    {
        Route::get('/lk', function(){
          return die('ldkdk');
        });
    }
}
