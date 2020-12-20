<?php 

class App{

    public static $registry = [];

    public static function bind($key,$value)
    {
        return static::$registry[$key] = $value;
    }

    public static function get($key)
    {

        if(! array_key_exists($key,static::$registry))
        {
            throw new Exception ("This {$key} is bound in container");
        }
        return static::$registry[$key];
    }

}