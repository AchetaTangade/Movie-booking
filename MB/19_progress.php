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
    $_SESSION["cinema"]=$_GET["cine"]; 
    $c= $_SESSION["cinema"];
    $query="SELECT * FROM cinema where cinema_name='$c'";
    $result=mysqli_query($conn,$query);
    if(!$result){
        die("Query Failed!!!". mysqli_error($conn));
    }
    if(empty($result))
         echo "Problem";
    $row=mysqli_fetch_assoc($result);
    $_SESSION["cinemaid"]=$row['cinema_id'];
 ?>



<?php if( isset($_SESSION["username"]) && isset($_SESSION["movie_name"]) && isset($_SESSION["cinema"]) && isset($_SESSION["cinemaid"]) ):?>
<!DOCTYPE html>
<html>
    <head>
        <title>Movie-ticket-booking/progress</title>
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
        <link rel="stylesheet" type="text/css" href="css/cus.css">
        <!--<link rel="stylesheet" type="text/css" href="19_progress.css">-->
    </head>
    
    <body style="background-color:black;">
       
        <div class="outer-left">
            <div class="inner-left">
                <ul >
                    <li ><a href="6_welcome.php">Home</a></li>
                     <li ><a href="9_nowshowing-all.php">Now Showing</a></li>
                     <li ><a href="cancel.php">Cancel booking</a></li>
                     <li><a href="contact.php">About Us</a></li>
                     <p style="float:right; margin-top: -13px;color: white;">
                        <?php echo $_SESSION["username"]; ?>  |   
                        <a href="index.php" style="text-decoration:none;color: #fff8f4;padding: 5px 7px;border-radius: 5%;background-color: darkred;">Logout</a>
                    
                    </p>                
                </ul>
            </div>
            
        </div>
        <?php
            $var1=$_SESSION['movie_name'];
            $var2=$_SESSION['cinema'];
            $var3=$_SESSION["cinemaid"];
            $var4=$_SESSION['movie_id'];
        ?>
        <div class="outer-right">
            <center>
                <div class="container">
                    <div class="movie-title" style="text-align:left; background-color:cadetblue;">
                        
                        <?php
                            $movie=$_SESSION['movie_name'];
                            $query="SELECT * FROM movie where movie_name='$movie'";
                            $result=mysqli_query($conn,$query);
                            if(!$result){
                                die("Query Failed!!!". mysqli_error($conn));
                            }
                            if(empty($result))
                                echo "Problem";
                            
                            $query2="Select * from cinema where cinema_name='$var2'";
                            $result1=mysqli_query($conn,$query2);
                            if(!$result1){
                                die("Query Failed!!!". mysqli_error($conn));
                            }
                            if(empty($result1))
                                echo "Problem";
                        ?>
                        <div class="title" style="background-color:cadetblue;">
                            <p>
                                <?php   
                                    $row=mysqli_fetch_assoc($result);
                                    echo $movie."( ".$row['language']." )"
                                ?>
                            </p>
                        </div>    
                    </div>
                    <div class="cinema" style="color:cadetblue">
                        <p >
                            <?php 
                                        $row1=mysqli_fetch_assoc($result1);
                                        echo "Cinema: ".$row1['cinema_name']; 
                            ?>
                        </p>  
                    </div>
                    <?php
                            $query1="  SELECT s.show_id,t.time_cat, s.price 
                            from show_det s,screens ss, movie m, time t, cinema c 
                            where s.screen_id=ss.screen_id and c.cinema_id=ss.cinema_id and m.movie_name='$var1' 
                            and c.cinema_name='$var2' and c.cinema_id='$var3' and m.movie_id='$var4' and m.movie_id=ss.movie_id and s.time_id=t.time_id";
                            
                            $result=mysqli_query($conn,$query1);
                            if(!$result)
                                die("Query Failed!!!". mysqli_error($conn));
                    ?>
                    <div class="time">
                        
                        <center>
                            <h3>Select Time </h3>
                            <table cellpadding="10" cellspacing="10">
                                <form action="21_progress2.php" method="POST">
                                    
                                    <?php while($row=mysqli_fetch_assoc($result) ): ?>
                                    
                                        <?php  $temp=$row['time_cat']; ?>
                                        <tr>
                                            <p>
                                                <input type="radio" name="time" value= "<?php echo $temp ?>">
                                                <label> 
                                                    <?php echo $temp;  ?>
                                                </label><span>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo  "   Rs.". $row['price'];?></span> 
                                            </p>

                                        </tr>
                                        <input type="hidden" name="hide" value="<?php echo $row['show_id']  ?>">
                                    
                                        <?php echo "<br />" ; ?>
                                    <?php endwhile; ?>
                                    
                                    <h3>Select Date </h3>
                                    <?php  
                                        $currentd=date("d"); //01 to 31
                                        $currentm=date("m"); //A numeric representation of a month (from 01 to 12)
                                        $currenty=date("Y"); //Y=four digit representation of year
                                    ?>
                                    <select name="Day">
                                        <option value="0" selected="1">Day</option>
                                        <option value="<?php echo $currentd  ;?>" ><label><?php echo $currentd;?></label></option>
                                        <option value="<?php echo $currentd+1;?>" ><label><?php echo $currentd+1;?></label></option>
                                        <option value="<?php echo $currentd+2;?>" ><label><?php echo $currentd+2;?></label></option>
                                        <option value="<?php echo $currentd+3;?>" ><label><?php echo $currentd+3;?></label></option>
                                        <option value="<?php echo $currentd+4;?>" ><label><?php echo $currentd+4;?></label></option>
                                    </select>&nbsp;&nbsp;&nbsp;
                                    <select name="numberofseats">
                                            <option value="0" selected="1">Number Of Seats</option>
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                            <option>06</option>
                                            <option>07</option>
                                            <option>08</option>
                                            <option>09</option>
                                            <option>10</option>
                                    </select>
                                    <br />
                                    
                                    <input class="book-button" type="submit" name="select" value="Continue">
                                </form>
                            </table>
                        </center>
                    </div>
                </div>
            </center>
        </div>
        
       
    </body>
</html>
 <?php endif; ?>       
 <?php  if($_SESSION["username"]==""){
    header('Location:index.php');
}    