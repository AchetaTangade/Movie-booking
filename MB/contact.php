<?php
session_start();
?>

<?php 
    ini_set('max_execution_time', 300);
    $host="localhost";
    $dbuser="root";
    $password="";
    $dbname="movies";
    $conn=mysqli_connect($host,$dbuser,$password,$dbname);
    if(mysqli_connect_errno())
    {
        die("Connecttion Failed!! Check Whether apache is turned ON!!" . mysqli_connect_error());
    }
    else{
       //echo "connected";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Movie-ticket-booking/cancel booking</title>
        <style type="text/css">
            @font-face {
                font-family: Font;
                src: url(Mywriting.ttf);
            }
        </style>

        
        
        <link rel="stylesheet" type="text/css" href="css/afterlogin.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Prociono|Ubuntu" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/contact.css"> 
    </head>
    
    <body style="background-color:black">
    <div class="outer-left">
            <div class="inner-left">
                <ul>
                    <li><a  href="6_welcome.php">Home</a></li>
                    <li><a href="9_nowshowing-all.php">Now Showing</a></li>
                    <li><a href="cancel.php">Cancel booking</a></li>
                    <li><a class="active" href="contact.php">About Us</a></li>
                    
                    
                    <p style="float:right; margin-top: -13px;color: white;">
                        <?php echo $_SESSION["username"]; ?>  |   
                        <a href="index.php" style="text-decoration:none;color: #fff8f4;padding: 5px 7px;border-radius: 5%;background-color: darkred;">Logout</a>
                    
                    </p>
                </ul>
            </div>
            
        </div>
        

    <div class="outer-right" style="background-color:black;">
    <hr>
        <p class="queries">For any Queries, you can contact</p><br>
        
        

        <address class="phone">
            <p>Contact no.:</p>
            <a href="tel:9916220135">9916220135</a>
        </address>
        <br>
        <address class="mail">
            <p>Email ID:</p>
             <a href="mailto:achetatangade22@gmail.com" target="_blank">ach@gmail.com</a> 
        </address

    </div>
        </body>
</html>