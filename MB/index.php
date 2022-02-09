<?php
session_start();
?>

<?php $_SESSION["username"]="";   ?>

<!DOCTYPE html>
<html>
<head>
    <title>movie booking</title>
	<link rel="stylesheet" type="text/css" href="css/index_stylehome.css">
	
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
	<link href="https://fonts.googleapis.com/css?family=Nova+Flat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cuprum" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Teko:wght@300&display=swap" rel="stylesheet">
    <style type="text/css">
            @font-face {
                font-family: Font;
                src: url(Mywriting.ttf);
            }
    </style> 

	
</head>
<body style="background-color:black">

	
	<div class="outer-left" style="color: thistle;">
		
		<div id="left">
			<p style=" 
			font-family: 'Teko', sans-serif;font-size: 49px;color:whitesmoke">Welcome to movie booking website.</p>
		</div>
		<p >
            
			<form action="https://www.google.co.in/search?q=" style="float: right; width: 25%; padding: 44px;">
                <input type="text" placeholder="Search Movies..."  name="q" value="" style="height:.6cm;width:6cm;"/>
                <input type="submit" value="Search" id="btn2" style="height:.8cm;" />
            </form>  
			
		<p/>
	</div>
	

	<div class="slider">
			
    </div>

	<div id="right">

		
		<div class="inner">

			<form action="1_sign_in.php" method="get">
				Already have an account?
				<br />
				<br />
				<input type="submit" name="Sign_in" value="Sign in" color="blue" id="btn"/>
			</form>

			<form action="2_sign_up.php" method="get">
				<br/>
				New user?<br/>
				Create a new account
				<br /><br />
				<input type="submit" name="Sign_up" value="Sign up" id="btn">
			</form>
		</div>

	</div>
</body>
</html>