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
    if(isset($_POST['idsubmit']))
    {

        $id=$_POST['id'];
        $sql="DELETE FROM `booking` WHERE `booking`.`booking_id` = '$id' ";

        if(mysqli_query($conn,$sql))
        {
            // echo "Success!";
?>      
            <script language="javascript">
                alert("Seats canceled Successfully!");
            </script>
<?php
        }
        else
        {
            // echo "Error: ".$sql."<br>".$conn->connect_error;
?>

            <script language="javascript">
                alert("cancel Failed!");
            </script>
<?php
        }
        $conn->close();
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
        
    </head>
    
    <body style="background-color:black;">
       
        <div class="outer-left">
            <div class="inner-left">
                <ul >
                    <li ><a href="6_welcome.php">Home</a></li>
                     <li ><a href="9_nowshowing-all.php">Now Showing</a></li>
                     <li ><a class="active" href="cancel.php">Cancel booking</a></li>
                     <li><a href="contact.php">About Us</a></li>
                     <p style="float:right; margin-top: -13px;color: white;">
                        <?php echo $_SESSION["username"]; ?>  |   
                        <a href="index.php" style="text-decoration:none;color: #fff8f4;padding: 5px 7px;border-radius: 5%;background-color: darkred;">Logout</a>
                    
                    </p>
                    </ul>
            </div>
            
        </div>

        <div class="outer-right">
            <div class="inner-right">
                <center>
                    
                    <form action="cancel.php" method="post">
                      
                        <hr>
                        <label for="id" style="color: whitesmoke;">Booking ID: </label>
                        <input type="text" name="id" placeholder="enter valid id" style="height:21px; border-radius: 8px;">
                        
                        
                        <br><br>
                        <button type="submit" value="submit" name="idsubmit" class="submitbtn">DELETE BOOKING</button>
                      </form>
                      

                </center>
            </div>
        </div>

    </body>
</html>

