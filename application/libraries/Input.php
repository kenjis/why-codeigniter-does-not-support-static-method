<?php

class Input
{
    public static $instance = null;

    public static function get_instance()
    {
        if (self::$instance === null) {
            $CI =& get_instance();
            self::$instance = $CI->input;
        }

        return self::$instance;
    }

    public static function __callStatic($method, $params)
    {
        $obj = self::get_instance();
        return call_user_func_array(array($obj, $method), $params);
    }
}
