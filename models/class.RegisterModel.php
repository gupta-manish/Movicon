<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class RegisterModel extends BaseModel{

    function __construct() {
        parent::__construct();
    }

    public function run()
    {
        $sth = $this->db->prepare("SELECT * 
                                    FROM users
                                    WHERE emailId = :emailId");
        
        $sth->execute(array(':emailId'=>$_POST['emailId']));
        
        if($sth->rowCount()==1)
        {
            header("Location:".BASE_URL."error");
        }
        else 
        {
            $sth = $this->db->prepare("INSERT INTO users
                     VALUES ('',:emailId,:pass,:firstName,:lastName)");
             $sth->execute(array(':emailId'=>$_POST['emailId'],
                 ':pass'=>$this->encrypt($_POST['pass']),
                 ':firstName'=>$_POST['firstName'],
                 ':lastName'=>$_POST['lastName']));
        }
    }
    
    
}

?>
