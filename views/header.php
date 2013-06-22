<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <div id ="container" class ="container">
            <div class="width_100">
			
				<div class="top-main-content clearfix">
                    <h1>MVC</h1>
                    <a href="<?php echo BASE_URL; ?>index">Index</a>
                    <?php if(Session::get('loggedIn') == TRUE): ?>
                        <a href="<?php echo BASE_URL; ?>dashboard/logout">LogOut</a>
                    <?php else: ?>
                        <a href="<?php echo BASE_URL; ?>login">Login</a>
                    <?php endif; ?>
                    <hr>  			
                    
                </div>
				</div>
							
        
        