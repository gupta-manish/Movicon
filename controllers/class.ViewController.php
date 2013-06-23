<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class ViewController 
{

    function __construct() 
    {
    }
    
    public function render($name)
    {
        require '/views/header.php';
        require '/views/'.$name.'/index.php';
        require '/views/footer.php';
    }
    
}

?>
