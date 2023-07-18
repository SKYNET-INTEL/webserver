<?php
$server_name='localhost';
$username='root';
$password='';
$database_name='SKYNET';

$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}


if(isset($_POST['login']))
{	
	
	 $email = $_POST['email'];
	 $password = $_POST['password'];

	 $sql_query = "SELECT *FROM login where email = '$email' and password = 'password'";

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