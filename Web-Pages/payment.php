<?php session_start();
if(!isset($_SESSION["userName"]))
{
	header('Location:loginpg.php');
}
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PAYMENT-DRESS WORLD</title>
<link rel="stylesheet" type="text/css" href="CSS/paymentStyle.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<header><img src="Images/logo.png" alt="" class="logo">
	<nav>
		<ul class="nav-area">
		<li><a href ="Home.html">HOME</a></li>
		<li><a href="Men.php">MEN</a></li>
		<li><a href="Women.php">WOMEN</a></li>
		<li><a href="review.php">REVIEW</a></li>
		<div class="dropdown"><li><a href="#about"><i class="fa fa-user" style="font-size:36px"></i></a>
		<div class="dropdown-content">
		  <a href="loginpg.php">Login</a>
		  <a href="myprofile.php">My Profile</a>
		  <a href="myOrder.php">My Orders</a>
		  <a href="viewReview.php">All Reviews</a>
		  <a href="logoutsession.php">Logout</a>
    	</div></li> </div>
		<li><a href="cart.php"><i class="fa fa-shopping-bag" style="font-size:36px;"></i></a></li>
		</ul>
	  </nav>
	</header>  
<div class="titlecontainer">
  <p>PAYMENT DETAILS</p>
		</div><br><br>
<form action="" method="post"><div class="container">
        <div class="info">
          <p>
              <label for="paymentMethod">Card Type</label>
            </p>
            <p>&nbsp;</p><p>&nbsp;</p>
            <p>
              <select name="paymentMethod">
                <option>Visa</option>
                <option>MasterCard</option>
                <option>American Express</option>
              </select>
            </p>
            <p>&nbsp;</p>

          <label for="nameonCard">Name on Card</label>
              <input type="text" name="txtnameonCard" id="txtnameonCard" required>

            <p>&nbsp;</p>
			
		  <label for="cardNumber">Credit Card Number</label>
              <input type="text" name="txtcardNumber" id="txtcardNumber" maxlength="16" required>

            <p>&nbsp;</p>

          <label for="cardholderName">Cardholder Name</label>
              <input type="text" name="txtcardholderName" id="txtcardholderName" required>

            <p>&nbsp;</p>

          <label for="txtcvv">CVV</label>
          <input type="text" name="txtcvv" id="txtcvv" maxlength="3" required>

            <p>&nbsp;</p>

          <label for="cardDate">Expiration Date</label>
              <input type="month" name="daymonth" id="daymonth" required>

           <p>&nbsp;</p>
          <input type="submit" name="btnsubmit" id="btnsubmit" value="Confirm & Pay" />
        </div>
  <div class="description">
			<img src="Images/hannah-morgan-ycVFts5Ma4s-unsplash.jpg">
        </div>
    </div>
	</form>
</body>
	<?php
	   if(isset($_POST["btnsubmit"]))
	   {
		   $cardType=$_POST["paymentMethod"];
		   $nameoncard=$_POST["txtnameonCard"];
		   $cardnumber=$_POST["txtcardNumber"];
		   $holderName=$_POST["txtcardholderName"];
		   $cvv=$_POST["txtcvv"];
		   $exdate=date('Y-m', strtotime($_POST["daymonth"]));
		   $date=date('Y-m-d');
		   $con=mysqli_connect("localhost","root","","dressworld");
		   
		   if(!$con)
			{
				die("Cannot connnect to the DB server");	
			}
		   
					
			$sql="INSERT INTO `payment` (`cardNum`, `email`, `nameonCard`, `cardType`, `cardholder`, `cvv`, `exdate`, `Payment date`) VALUES ('".$cardnumber."', '".$_SESSION["userName"]."', '".$nameoncard."', '".$cardType."', '".$holderName."', '".$cvv."', '".$exdate."', '".$date."');";
			mysqli_query($con,$sql);

		   $sql_insert="INSERT INTO `order` (`proName`) SELECT `proName` FROM `cart` WHERE `email`='".$_SESSION["userName"]."'";
		   mysqli_query($con,$sql_insert);
		   
		   $sql_del="DELETE FROM `cart` WHERE `email`='".$_SESSION["userName"]."'";
		   mysqli_query($con,$sql_del);
		   header('Location:order.php');
					
	   }
	?>
</html>
