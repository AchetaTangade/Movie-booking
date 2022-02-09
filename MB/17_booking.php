<?php
session_start();
?>

<?php  
    $_SESSION["movie_name"]=$_POST['book'];
    $_SESSION["movie_id"]=$_POST['id'];
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
    if( isset($_SESSION["username"]) && isset($_SESSION["movie_name"]) ):
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Movie-ticket-booking/booking</title>
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
        <link rel="stylesheet" type="text/css" href="css/book.css">
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
        <div class="outer-right">
            <hr>
            <center>
                <div class="container" style="background-color: darkslategray;">
                    <div class="movie-title">
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
                        <div class="title" style="background-color: darkslategray;">
                            <p>
                                <?php   
                                    $row=mysqli_fetch_assoc($result);
                                    $_SESSION["movieid"]=$row["movie_id"];
                                    echo $movie."( ".$row['language']." )"
                                ?>
                            </p>
                        </div>
                    </div>    
                    <?php
                        $query2="Select c.cinema_name,c.address from movie m,screens s, cinema c where m.movie_id=s.movie_id 
                        and s.cinema_id=c.cinema_id and m.movie_name='$movie'";
                        $res=mysqli_query($conn,$query2);
                        if(!$res)
                            die("Query Failed!!!". mysqli_error($conn));
                        if(empty($result))
                            echo "Problem";
                    ?>   
                    <div class="cinema-list" >
                        <div style=" display: flex; flex-direction: column;">
                            
                            <?php while($r=mysqli_fetch_assoc($res)): ?>
                                <br><br>
                                <div class="hov" style="background-color: antiquewhite; margin-top: -45px; margin-left: -31px;">
                                    <a href="19_progress.php?cine=<?php echo $r['cinema_name'];  ?>">
                                        <p class="display-cinema-name" >
                                            <?php echo $r['cinema_name'] ;  ?>
                                        </p>  
                                    </a>        
                                        <p class="display-cinema-address" style="color: black;" >
                                            <?php echo $r['address']; ?> 
                                        </p>
                                </div> 
                                <br>       
                            <?php endwhile; ?>

                        </div>
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