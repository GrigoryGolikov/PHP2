<?php

class Autoload
{

    public function loadClass($className)
    {
        $name = str_replace('\\','/',str_replace('app\\','',$className));
        $fileName = "../{$name}.php";

        // var_dump($className);

        if (file_exists($fileName)) {
            // var_dump($fileName);
            include $fileName;
        }
    }
}