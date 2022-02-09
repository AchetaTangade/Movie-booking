<?php
session_start();
?>
<?php $_SESSION["username"]="";   ?>

<!DOCTYPE html>
<html>
<head>
	<title>Movie-ticket-booking/sign-up</title>
	<link rel="stylesheet" type="text/css" href="css/3_signupsignin.css">
	<link href="https://fonts.googleapis.com/css?family=Cuprum" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

</head>
<body style="background-color:#F9F3F2;">
	
	<div id="mid" >
		<center>
            <p style="font-family: 'Roboto Slab', serif;font-size:30px;">Create an account</p>
			
            <form action="5_signupverification.php" method="POST">
				<table id="table" cellpadding="8" cellspacing="10">
					<tr>
                        <th>First name:</th>
                        <th><input type="text" name="fname" style="height:.8cm;width:6cm;"></th>
					</tr>
					
                    <tr>
                        <th>Last name:</th>
                        <th><input type="text" name="lname" style="height:.8cm;width:6cm;"></th>
					</tr>
                    
                    <tr>
                        <th>User name:</th>
                        <th><input type="text" name="uname" style="height:.8cm;width:6cm;"></th>
					</tr>
                    <tr>
                        <th>Email ID:</th>
                        <th><input type="text" name="emailid" style="height:.8cm;width:6cm;"></th>
					</tr>
					<tr>
                        <th>Phone Number:</th>
                        <th><input type="text" name="phno" style="height:.8cm;width:6cm;"></th>
					</tr>
                    <tr>
                        <th>Gender:</th>
                        <th><input type="radio" name="gender" value="M">Male 
                        <input type="radio" name="gender" value="F">Female</th>
					</tr>
                    <tr>
                        <th>Date of Birth</th>
                        <td><select name="Year">
                                <option value="0" selected="1">Year</option>
                                <option>1975</option>
                                <option>1976</option>
                                <option>1977</option>
                                <option>1978</option>
                                <option>1979</option>
                                <option>1980</option>
                                <option>1981</option>
                                <option>1982</option>
                                <option>1983</option>
                                <option>1984</option>
                                <option>1985</option>
                                <option>1986</option>
                                <option>1987</option>
                                <option>1988</option>
                                <option>1989</option>
                                <option>1990</option>
                                <option>1991</option>
                                <option>1992</option>
                                <option>1993</option>
                                <option>1994</option>
                                <option>1995</option>
                                <option>1996</option>
                                <option>1997</option>
                                <option>1998</option>
                                <option>1999</option>
                                <option>2000</option>
                                <option>2001</option>
                                <option>2002</option>
                            </select>
                            <select name="Month">
                                <option value="0" selected="1">Month</option>
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
                                <option>11</option>
                                <option>12</option>
                            </select>
                            <select name="Day">
                                <option value="0" selected="1">Day</option>
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
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option> 
                                <option>21</option> 
                                <option>22</option> 
                                <option>23</option> 
                                <option>24</option> 
                                <option>25</option> 
                                <option>26</option> 
                                <option>27</option> 
                                <option>28</option> 
                                <option>29</option> 
                                <option>30</option> 
                                <option>31</option> 
                            </select>
                        </td>
                    </tr>
                    <tr>
					<th>Password:</th>
					<th><input type="password" placeholder="Minimum 8 characters" name="pass1" style="height:.8cm;width:6cm;"></th>
					</tr>
					<tr>
					<th>Retype Password:</th>
					<th><input type="password" placeholder="Minimum 8 characters" name="pass2" style="height:.8cm;width:6cm;"></th>
					</tr>
                    <tr>
					
                    <tr>
					<th></th>
					<th><input type="submit" name="signup" value="Submit" id="btn"></th>
                    </tr>
				</table>
			<form>
		</center>

	</div>
    
</body>
</html>