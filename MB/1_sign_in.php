<?php
session_start();
?>
<?php $_SESSION["username"]="";   ?>


<!DOCTYPE html>
<html>

    <head>
        <title>Movie-ticket-booking/sign in</title>
        <link rel="stylesheet" type="text/css" href="css/3_signupsignin.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cuprum" rel="stylesheet">
    </head>

    <body style="background-color:#F9F3F2;">

        
        <div id="mid" >
		
        <center>
            <p style="font-family: 'Roboto Slab', serif;font-size:30px;">
            Log In
            </p>
            
            <form action="4_sign_in_verify.php" method="POST">
                <table  id="table"  cellpadding="10" cellspacing="10">
                    <tr></tr>
                    <tr></tr>
                    <tr>
                        <th>Username:</th>
                        <th><input type="text" name="user" placeholder="Username" style="height:.8cm;"></th>
                    </tr>
                    <tr></tr>
                    <tr>
                        <th>Password:</th>
                        <th><input type="password" name="pass" placeholder="Type in your password" style="height:.8cm;"></th>
                    </tr>
                    <tr></tr>				
                    <tr>
                        <th></th>
                        <th><input type="submit" name="login" value="Login" id="btn"></th>
                    </tr>
                    <tr></tr>
                    <tr></tr>
                </table>
            </form>

        </center>
        </div>
        
    </div>
    </body>
</html>