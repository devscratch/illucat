<?php

namespace Illucat\Factory;

use Illucat\Basic\Manager;

trait Factory {

    public function proccessResponse($json,$success,$failed)
    {
      $decoded = json_decode($json, true);
      if($decoded['status'] != 'active')
      {
        return $failed;
      }
      return $success;
    }

}
