<?php


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class DashboardController extends BaseController{

    function __construct() {
        parent::__construct();
        Session::start();
        $session = Session::get('loggedIn');
        if($session == FALSE)
        {
            Session::destroy();
            header('Location:'.BASE_URL.'login');
            exit;
        }
    }
    
    public function loadPage()
    {
        $this->view = new ViewController();
        $this->view->render("dashboard");
    }
    
    public function logOut()
    {
         Session::destroy();
         header('Location:'.BASE_URL.'login');
    }

}
?>


