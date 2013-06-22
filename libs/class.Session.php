<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Session {

    public static function get($key){
        if(isset($_SESSION[$key]))
        return $_SESSION[$key];
    }
    
    public static function set($key,$value)
    {
        $_SESSION[$key] = $value;
    }
    
    public static function start()
    {
        session_start();
    }
    
    public static function destroy()
    {
        session_destroy();
    }
}

?>
