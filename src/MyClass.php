<?php
namespace Halcyon;
require __DIR__.'/../vendor/autoload.php';

use Halcyon\MyFolder\HG;

class MyClass
{
        public function me()
        {
                $mmm = new My3rdClass;
                $mmm->method();

                (new HG)->method();
        }
}

(new MyClass)->me();
