<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class RegisterController extends BaseController{

    function __construct() {
        parent::__construct();
        
    }
    
    public function loadPage()
    {
        
        $this->view->msg = "This is the Register Page";
        $this->view->render("register");
    }

    public function enter()
    {
        $this->model->run();
    }
}
?>


