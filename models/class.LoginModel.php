<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class LoginModel extends MainModel{

    function __construct() {
        parent::__construct();
    }

    public function run()
    {
        $sth = $this->db->prepare("SELECT * 
                                    FROM users
                                    WHERE emailId = :emailId AND pass = :pass");
        
        $sth->execute(array(':emailId'=>$_POST['emailId'],':pass'=>$this->encrypt($_POST['pass'])));
        
        if($sth->rowCount()==1)
        {
            Session::start();
            Session::set('loggedIn',TRUE);
            header('Location:'.URL.'dashboard');
        }
        else 
        {
            Session::destroy();
            header('Location:'.URL.'login');
        }
    }
    
    private function encrypt($str)
    {
        /* 
         * change this function for
         * better encryption
         */ 
        
        return md5($str);
    }
    
}

?>
