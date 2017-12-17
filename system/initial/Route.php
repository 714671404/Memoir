<?php
namespace System\Initial;

/*
 * 定义路由规则
 */


class Route
{

    static private $_prefix             =          null;
    static private $_get_array          =          [];

    static function get($path, $controller)
    {
        if (is_string($path)) {
            $p = explode('/', self::is_prefix($path));

            $r = explode('/', self::is_prefix($_SERVER['REQUEST_URI']));

            if (count($p) === count($r)) {
                $variable = null;
                foreach ($p as $k => $v) {
                    if ($v[0] === '{') {
                        $variable   =   self::removal($v);
                        self::$_get_array[$variable]  =   $r[$k];
                    }
                }
            }
        }

        if (is_string($controller)) {
            $controller = explode('@', $controller);
            $c = $controller[0];
            $m = $controller[1];
            $transfer_c = new $c(self::$_get_array);
            $transfer_c = $m();
        }
        exit;
        return $controller;
    }

    static private function removal($string)
    {
        if (is_string($string)) {
            if ($string[0] === '{') return substr($string, 1, strlen($string)-2);
        }

        return $string;
    }

    static private function is_prefix($string)
    {

        if (is_string($string)) {
            if ($string[0] === '/') {
                self::$_prefix = substr($string, 1, strlen($string));
            }

            if (self::$_prefix[0] === 'i') {
                self::$_prefix = substr(self::$_prefix, strlen('index.php/'), strlen(self::$_prefix));
            }

        }
        return self::$_prefix;
    }

}