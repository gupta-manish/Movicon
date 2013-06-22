<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class BaseController {

    function __construct() 
    {
        
    }

    function loadModel($name)
    {
        $filename = 'models/class.'.ucfirst($name).'Model.php';
        if(file_exists($filename))
        {
            require $filename;
            $modelname = ucfirst($name).'Model';
            
            $this->model = new $modelname();
        }
    }
    
}

?>
