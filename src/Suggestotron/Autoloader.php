<?php
namespace Suggestotron;
require '../src/Suggestotron/Config.php';
\Suggestotron\Config::setDirectory('../config');

class Autoloader {
    public function load($className)
    {
        //Estando no mesmo namespace non e preciso que poñelo explicitamente
        $config = Config::get('autoload');

        $file = $config['class_path'] . '/' . str_replace("\\", "/", $className) . '.php';

        if (file_exists($file)) {
            require $file;
        } else {
            return false;
        }
    }

    public function register()
    {
        spl_autoload_register([$this, 'load']);
    }
}

$loader = new Autoloader();
$loader->register();