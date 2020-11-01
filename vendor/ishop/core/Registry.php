<?php


namespace ishop;


class Registry
{
    use TSingletone;

    protected static $properties = [];

    /**
     * @return array
     */
    public static function getProperties()
    {
        return self::$properties;
    }

    /**
     * @return array
     */
    public function getProperty($name)
    {
        if(isset(self::$properties[$name])) {
            return self::$properties[$name];
        }
        return null;
    }

    /**
     * @param array $properties
     */
    public function setProperty($name, $value)
    {
        self::$properties[$name] = $value;
    }

}