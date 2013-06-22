<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class HomeController extends BaseController
{

    function __construct() 
    {
        parent::__construct();
    }
    
     public function loadPage()
    {
        $this->view = new ViewController();
        $this->view->msg = "this is home";
        $this->view->render('home');
    }

    

}

?>
