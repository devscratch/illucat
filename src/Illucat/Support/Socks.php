<?php

namespace Illucat\Support;

use Illucat\Factory\Pipeline;
use Illucat\Factory\Driver;
use Illucat\Support\Slicer;

trait Socks {

      public static function grabCookies($case = 1)
      {
          switch ($case) {
            case 1:
                $resource       = Driver::Take("http://www.vipsocks24.net");
                $getParentSlice = Slicer::Slice($resource,'<h3 class=\'post-title entry-title\' itemprop=\'name\'>','</h3>');
                $getMainSlice   = Slicer::Slice($getParentSlice, '<a href=\'', '\'');
                $getBodySlice   = Driver::Take($getMainSlice);
                $Slice          = Slicer::Slice($getBodySlice,'#8f0201; color: #ffffff;" wrap="hard">','<textarea>');
                return $Slice;
              break;
            case 2:
                $resource       = Driver::Take("http://www.socks24.org/");
                $getParentSlice = Slicer::Slice($resource,'<h3 class=\'post-title entry-title\' itemprop=\'name\'>', '</h3>');
                $getMainSlice   = Slicer::Slice($getParentSlice, '<a href=\'', '\'');
                $getBodySlice   = Driver::Take($getMainSlice);
                $Slice          = Slicer::Slice($getBodySlice, "</span>" . PHP_EOL . "<span style=\"color: rgb(255, 255, 255);\">", "</span></span></pre><br>");
                return $Slice;
              break;
            default:
              # code...
              break;
          }
      }

}
