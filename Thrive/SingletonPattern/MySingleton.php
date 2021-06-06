<?php namespace Thrive\SingletonPattern;



class MySingleton
{

    private static $instance;

    private function __construct()
    {
        // Do not expose a public constructor
    }  


    /**
     * Create a New Instance if none currently exist. 
     * Once created, or If exist, then it shall 
     * be returned to the calling object.
     */
    public static function ThereCanOnlyBeOne()
    {
        // there can only be one
        if (!isset(self::$instance)) {
            self::$instance = new static;
        }
        
        return self::$instance;
    }
    
}