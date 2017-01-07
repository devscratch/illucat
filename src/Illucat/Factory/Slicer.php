<?php

namespace Illucat\Factory;

trait Slicer {


  public static function Slice($resource, $start, $end)
  {
    $string = ' ' . $resource;
    $ini = strpos($string,$start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
  }

}
