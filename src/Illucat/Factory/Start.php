<?php

namespace Illucat\Factory;

class Start {


      public function __construct($argv)
      {

          if(array_key_exists(1,$argv))
          {
              $opt = $argv[1];
              if(in_array($opt,$this->options()))
              {
                  $opt = $this->validateOptions($argv[1]) . ":";
                  return $config = new \Illucat\Config\c(getopt($opt));
              }
              else
              {
                //
              }
          }
          else
          {
              return $this->displayAvailableOptions();
          }


      }

      public function options()
      {
          return [
            '-u',
          ];
      }

      public function validateOptions($argv)
      {
          return str_replace("-", "",$argv);
      }

}
