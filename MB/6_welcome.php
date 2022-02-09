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
<?php
    $cus=$_SESSION["username"];
   
    $query="SELECT * FROM customer where username='$cus'";
    $result=mysqli_query($conn,$query);
    if(!$result){
        die("Query Failed!!!". mysqli_error($conn));
    }
    if(empty($result))
        echo "Problem";
    $row=mysqli_fetch_assoc($result);
    $_SESSION["cusid"]=$row['customer_id'];
?>



<?php if(isset($_SESSION["username"]) && isset($_SESSION["cusid"] ) ):?>
    


<!DOCTYPE html>
<html>
    <head>
        <title>Movie-ticket-booking/Welcome</title>
        <style type="text/css">
            @font-face {
                font-family: Font;
                src: url(Mywriting.ttf);
            }
        </style>
        <link rel="stylesheet" type="text/css" href="css/afterlogin.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">        
    </head>
    
    <body style="background-color:black;">
        
        
        
        
        <div class="outer-left">
            <div class="inner-left">
                <ul>
                    <li><a class="active" href="6_welcome.php">Home</a></li>
                    <li><a href="9_nowshowing-all.php">Now Showing</a></li>
                    <li><a href="cancel.php">Cancel booking</a></li>
                    <li><a href="contact.php">About Us</a></li>
                    
                    <p style="float:right; margin-top: -13px;color: white;">
                        <?php echo $_SESSION["username"]; ?>  |   
                        <a href="index.php" style="text-decoration:none;color: #fff8f4;padding: 5px 7px;border-radius: 5%;background-color: darkred;">Logout</a>
                    
                    </p>

                    <!-- <p style="float:right; margin-top: -13px;color: white;">
                         
                        <a href="update_profile.php" style="text-decoration:none;color: 
                             #fff8f4;padding: 5px 7px;border-radius: 5%;background-color: darkred;" title="Update profile"><?php echo $_SESSION["username"]; ?>
                        </a> 
                        |
                        <a href="index.php" style="text-decoration:none;color: 
                            #fff8f4;padding: 5px 7px;border-radius: 5%;background-color: darkred;">Logout
                        </a>
                    
                    </p> -->

                     
                </ul>
            </div>
            
        </div>
        
        
        <div class="outer-right" style="display: flex; flex-wrap: wrap;" >
            
            <div  > 
                
                <iframe width="385" height="296" src="https://www.youtube.com/embed/x3oMm5JGXZM"  frameborder="0"  allowfullscreen style="padding: 35px;"></iframe>
            </div>
            <hr style="height: 284px;
            margin-top: 38px;">
            <div  > 
                <iframe width="385" height="296" src="https://www.youtube.com/embed/Q1NKMPhP8PY"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="padding: 35px;"></iframe>
            </div>
            <hr style="height: 284px;
            margin-top: 38px;">
            <div  > 
                <iframe width="385" height="296" src="https://www.youtube.com/embed/L94o_eim518"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="padding: 35px;"></iframe>
            </div>
            <!-- <hr style="height: 284px;
            margin-top: 38px;"> -->
            
            <div  >
            
                <iframe width="385" height="296" src="https://www.youtube.com/embed/K8ngHnShirw"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="padding: 35px;"></iframe>
            </div> 
            <hr style="height: 284px;
            margin-top: 38px;">
            <div >
                <iframe width="385" height="296" src="https://www.youtube.com/embed/eqLjNBM7FTM"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="padding: 35px;"></iframe>
            </div>  
            <hr style="height: 284px;
            margin-top: 38px;">
            <div>
                <iframe width="385" height="296" src="https://www.youtube.com/embed/0TE83vJDvy4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="padding: 35px;"></iframe>

            </div> 
            <!-- <hr style="height: 284px;
            margin-top: 38px;"> -->
            <div>
                <iframe width="385" height="296" src="https://www.youtube.com/embed/QHdkC6Kn0Io" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="padding: 35px;"></iframe>
            </div>
            <hr style="height: 284px;
            margin-top: 38px;">
            <div>
                <iframe width="385" height="296" src="https://www.youtube.com/embed/HDg3YtIrtrY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="padding: 35px;"></iframe>
            </div>
            <hr style="height: 284px;
            margin-top: 38px;">
            <div>
                <iframe width="385" height="296" src="https://www.youtube.com/embed/tUQNlFDDN9U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="padding: 35px;"></iframe>
            </div>
            <!-- <hr style="height: 284px;
            margin-top: 38px;"> -->
                
        </div>
        
    </body>
    
</html>
<?php endif; ?>
<?php  if($_SESSION["username"]==""){
    header('Location:index.php');
}    ?>
