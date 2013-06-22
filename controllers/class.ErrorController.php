<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class ErrorController extends BaseController{

    function __construct() 
    {
        parent::__construct();
    }
    
    public function loadErrorPage()
    {
        $this->view = new ViewController();
        $this->view->msg = "This page doesn't exist";
        $this->view->render('error');
    }

}

?>
