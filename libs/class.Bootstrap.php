<?php

class Bootstrap 
{

    function __construct() 
    {
        $url = $this->getUrl();
        
        $url = explode('/', $url);
        
        if(strcmp($url[0],'index') == 0)
        {
            $url[0] = 'home';
        }
        
        $this->bootErrorController();
        
        $con_path = $this->getControllerPath($url);
        
        if(file_exists($con_path))
        {
            require $con_path;
            $con_name = $this->getControllerName($url);
        }
        else
        {
            $this->giveError();
            return;
        }
        
        $con = new $con_name();
        
        $con->loadModel($url[0]);
        
        if(isset($url[1]))
        {
            $con_func = $url[1];
        }
        
        if(isset($url[2]))
        {
            $con_func_var = $url[2];
        }
            
        if(isset($url[2]))
        {
            if(method_exists($con,$con_func))
            {
                $con->$con_func($con_func_var);
            }
            else
            {
                $this->giveError();echo 44;
                return;
            }
        }
        else
        {
            if(isset($url[1]))
            {
                if(method_exists($con,$con_func))
                {
                    $con->$con_func();
                }
                else
                {
                    $this->giveError();
                    return;
                }
            }  
        }
        
        $con->loadPage();
      
    }
    
    private function getControllerPath($url)
    {
        $path = 'controllers/class.'.ucfirst($url[0]).'Controller.php';
        
        return $path;
    }
    
    private function getControllerName($url)
    {
        $class = ucfirst($url[0]).'Controller';
        return $class;
    }
    
    private function getUrl()
    {
        if(isset($_GET['url']))
        {
            $url = rtrim($_GET['url'],'/');
            return $url;
        }
        else
        {
            $url = 'index';
            return $url;
        }
        
    }
    
    private function bootErrorController()
    {
        require 'controllers/class.ErrorController.php';
        $this->error = new ErrorController();
    }

    private function giveError()
    {
        $this->error->loadErrorPage();
    }
}
?>
