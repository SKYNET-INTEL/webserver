<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="SKYNET";

$conn=mysqli_connect($server_name,$emailadress,$password,$database_name);
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	
	 $email = $_POST['emailadress'];
	 $phone = $_POST['password'];

	 $sql_query = "INSERT INTO entry_details (emailaddress, password)
	 VALUES ('$email','$password')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>