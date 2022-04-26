<?php session_start();
$itemID=$_GET["id"];

				 	 
				 
$con=mysqli_connect("localhost","root","","dressworld");
		   
if(!$con)
{
	die("Cannot connnect to the DB server");	
}
				 
				 
$sql="DELETE FROM `cart` WHERE `cartID`='".$itemID."'";
				 
if(mysqli_query($con,$sql))
{
	echo "Product Deleted";
}
else
{
	echo "Something went wrong";	 
}
header('Location:cart.php');
?>