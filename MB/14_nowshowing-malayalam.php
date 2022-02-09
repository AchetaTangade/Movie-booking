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

    $query="SELECT * FROM `movie` WHERE language='malayalam'";
    $result=mysqli_query($conn,$query);
    if(!$result){
        die("Query Failed!!!". mysqli_error($conn));
    }
    if(empty($result))
        echo "Problem";

?>





<?php if($_SESSION["username"]):?>
<!DOCTYPE html>
<html>
    <head>
        <title>Movie-ticket-booking/movies</title>
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
        <link rel="stylesheet" type="text/css" href="css/sample.css">
    </head>
    
    <body style="background-color:black;">
        
        
        <div class="outer-left">
            <div class="inner-left">
                <ul >
                    <li ><a href="6_welcome.php">Home</a></li>
                     <li ><a class="active" href="9_nowshowing-all.php">Now Showing</a></li>
                     <li ><a href="cancel.php">Cancel booking</a></li>
                     <li><a href="contact.php">About Us</a></li>
                     <p style="float:right; margin-top: -13px;color: white;">
                        <?php echo $_SESSION["username"]; ?>  |   
                        <a href="index.php" style="text-decoration:none;color: #fff8f4;padding: 5px 7px;border-radius: 5%;background-color: darkred;">Logout</a>
                    
                    </p>         
                </ul>
            </div>
            
        </div>
        
        <div class="outer-right">
            
            
               
                
            <div class="list" style="width:100%"; >
                <ul style="float:left; background-color:black; color:white; text-align:center;">
                    
                    <li>
                        <a href="9_nowshowing-all.php"  style="background-color:darkslategray; color:antiquewhite; width:4cm;border-top-left-radius: 10px;
                                border-bottom-left-radius: 10px;">All</a>
                    </li>
                    <li><a href="12_nowshowing-hindi.php" style="background-color:darkslategray; color:antiquewhite;width:4cm;">Hindi</a></li>
                    <li><a href="13_nowshowing-kannada.php"  style="background-color:darkslategray;color:antiquewhite; width:4cm;">Kannada</a></li>
                    <li><a href="14_nowshowing-malayalam.php" class="active" style="background-color:darkslategray;color:#ffb500; width:4cm;">Malayalam</a></li>
                    <li><a href="15_nowshowing-tamil.php" style="background-color:darkslategray; color:antiquewhite;width:4cm;">Tamil</a></li>
                    <li><a href="16_nowshowing-telugu.php" style="background-color:darkslategray; color:antiquewhite;width:4cm;border-bottom-right-radius: 10px;
                            border-top-right-radius: 10px;">Telugu</a></li>
                </ul>
            </div>    
                
           
            <?php while($row=mysqli_fetch_assoc($result)): ?>    
             <div class="moviedisplay" style="border:3px solid black;position:relative;">   
                <?php 
                $image="movielist/".$row['image'] ;
                $mov=$row['movie_name'];
                $id=$row['movie_id'];
                ?>
                    
                    <div class="movieinfo">
                        <b id="1" style="font-size:22px;"> <?php        echo $row['movie_name']."(".$row['language'].")" ?></b>
                        <p class="display">
                            <span>Release Date : </span><?php        echo $row['release_date'] ?><br/>
                            <span>Genre : </span><?php        echo $row['genre'] ?><br/>
                            <span>Runtime : </span><?php        echo $row['runtime'] ?><br/>
                            <span>Director : </span><?php        echo $row['director'] ?><br/>
                            <span>Cast : </span><?php        echo $row['cast1']." ".$row['cast2']." ".$row['cast3'] ?><br/>
                            <span>Plot/Summary : </span><?php        echo $row['plot_summary'] ?><br/>
                        </p>
                        
                        
                        
                        <form action="17_booking.php" method="POST">
                            <center><input type="submit"  class="book-button" value="Book" name="book" >
                            <input type="hidden" name="book" value="<?php echo $mov ?>">
                             <input type="hidden" name="id" value="<?php echo $id ?>"></center>
                        </form>
                    </div>
                    <div class="moviepic">  
                        <center>
                            <img  src="<?php echo $image ?> " />   
                        </center>
                    </div>
                    
            </div>    
                
                <?php endwhile; ?>
               
        </div>
    </body>
</html>
<?php endif; ?>
<?php  if($_SESSION["username"]==""){
    header('Location:index.php');
}    ?>
