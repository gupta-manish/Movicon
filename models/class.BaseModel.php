<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class BaseModel 
{

    function __construct() 
    {
        $this->db = new DatabaseController();
    }

    protected function encrypt($str)
    {
        /* 
         * change this function for
         * better encryption
         */ 
        
        return md5($str);
    }
}

?>
