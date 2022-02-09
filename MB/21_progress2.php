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
    if(isset($_POST['select'] ))
    {
        $_SESSION["showid"]=$_POST['hide'];
        $_SESSION["date"]=$_POST['Day'];
        
        $_SESSION["noseats"]=$_POST['numberofseats'];
        
        $a=$_SESSION["showid"];
        $b=$_SESSION["date"];
        $c=$_SESSION["noseats"];
        $d=$_SESSION["cusid"];
        $e=$_SESSION["cinemaid"];
        $current1=$b;
        $current2=date("m");
        $current3=date("Y");                                                               
        
        $date=$current3."-".$current2."-".$b;
        
        $f=$_SESSION["movie_id"];
        
        $query="INSERT INTO `booking` (`booking_id`, `show_id`, `customer_id`, `noofseats`, `bookingtime`, `cinema_id`, `date`, `movie_id`) 
                        VALUES (NULL, '$a', '$d', '$c', CURRENT_TIMESTAMP, '$e', '$date', '$f');";

                        $result=mysqli_query($conn,$query);
                        if(!$result){
                            die("Query Failed!!!". mysqli_error($conn));
                        }
        $booking_id=mysqli_insert_id($conn);
    }
    
?>
<?php if( isset($_SESSION["username"]) && isset($_SESSION["movie_name"]) && isset($_SESSION["cinema"]) && isset($_SESSION["cinemaid"]) ):?>
<!DOCTYPE html>
<html>
    <head>
        <title>Movie-ticket-booking</title>
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
        <link rel="stylesheet" type="text/css" href="css/last.css">
    </head>
    <body style="background-color:#999999;">
       
        
        <?php  $var3=$_SESSION["cinemaid"]; 
                
        ?>
<center>        
        <div class="outer-right">
            <div class="container">
                
                    <div class="movie-title" style="text-align:left">
                        <?php
                            $movie=$_SESSION['movie_name'];
                            $query="SELECT * FROM movie where movie_name='$movie'";
                            $result=mysqli_query($conn,$query);
                            if(!$result){
                                die("Query Failed!!!". mysqli_error($conn));
                            }
                            if(empty($result))
                                echo "Problem";
                            
                        ?>
                        <div class="title">
                            <p>
                                <?php   
                                    $row=mysqli_fetch_assoc($result);
                                    echo $movie."( ".$row['language']." )"
                                ?>
                            </p>
                        </div>    
                    </div>
                    <div class="cinema">
                        <p >
                            <?php 
                                $query2="Select * from cinema where cinema_id='$var3'";
                                $result1=mysqli_query($conn,$query2);
                                if(!$result1){
                                    die("Query Failed!!!". mysqli_error($conn));
                                }
                                if(empty($result1))
                                    echo "Problem";
                                
                                $row1=mysqli_fetch_assoc($result1);
                                $abd=$row1['cinema_name'];
                                        
                                        echo "Cinema: ".$abd; 
                            ?><span style="float:right;padding:5px;"> Date: <?php  echo $date; ?></span>
                        </p>  
                    </div>  
                    <div class="display">
                        Username: <?php
                            echo $_SESSION['username'];?>
                        <?php
                            $s=$_SESSION["showid"];
                            $q="select t.time_cat,s.price 
                                from time t, show_det s 
                                where s.time_id=t.time_id 
                                and s.show_id= $s";
                            $r=mysqli_query($conn,$q);
                            if(!$r){
                                    die("Query Failed!!!". mysqli_error($conn));
                            }
                            if(empty($r))
                                echo "Problem";
                        ?>
                        <?php $rr=mysqli_fetch_assoc($r);
                              $msd=$rr['time_cat'];?>
                        
                        

                        <span style="float:right">
                            
                            Booking ID: <?php echo $booking_id;?>
                            <br><br>
                            Show timings: <?php echo $msd; ?>
                        </span>
                        
                        <?php $vk=$rr['price'] ?>
                        <p>Number of Seats= <?php echo $c; ?>  </p>
                        <span ><center> Total amount Payable =<?php echo $vk*$c; ?> </center> </span>
                        <center>
                        
                        
                        <button name="pay" style=" width:5cm; height:1cm;font-family: 'Roboto Slab', serif;font-weight: bold;
                                               font-size: 18px; background-color:#FB1F05; margin-bottom:5px;position:relative;margin-top:20px;color:white;" 
                                                onclick="myFunction()">Print this page</button><center>
                        <form method="POST">
                            <input type="hidden" name="Payout" value="confirm">
                        
                        </form>
                            <script>
                            function myFunction() {
                                window.print();
                            }
                            
                            </script>
                            
                    </div>
                   
                   
                        </center>


                    
            </div>
        </div>
    </body>
</html>  
<?php endif; ?>                           
 