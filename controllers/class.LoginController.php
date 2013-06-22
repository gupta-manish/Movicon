

<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class LoginController extends BaseController{

    function __construct() {
        parent::__construct();
        
    }
    
    public function loadPage()
    {
        $this->view = new ViewController();
        $this->view->msg = "This is the Login Page";
        $this->view->render("login");
    }

    public function enter()
    {
        $this->model->run();
    }
}
?>


