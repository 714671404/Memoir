<?php
namespace System\Initial;

class Autoload
{
    private $_path = [
        'web'       =>      ''
    ];

    static function _autoloader($class_name)
    {

        $class_name = trim($class_name, '\\/');
        $class_path = explode('\\', $class_name);

//        if (self::is_c($class_path[count($class_path)-1])) {
//            echo 'true';
//        } else {
//            echo 'false';
//        }
        if (self::is_c('HomeControllers')) {
            echo 'true';
        } else {
            echo 'false';
        }

        exit;

        require_once MEMOIR_PATH . DIRECTORY_SEPARATOR . implode('/', $class_path) . '.php';


    }

    /*
     * 判断加载的是不是控制器
     */
    static function is_c($string)
    {

        $c          =   'Controller';
        $string     =   substr($string, -strlen($c));

        if ($string === $c) {
            return true;
        }
        return false;
    }
}

spl_autoload_register(__NAMESPACE__ . '\Autoload::_autoloader');