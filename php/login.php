<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];

if($username&&$password)
{
	$connect=mysql_connect("localhost","root","tailored") or die("could not connect to DataBase");
	mysql_select_db("login") or die("clouldnt connect to database");
	$query=mysql_query("SELECT * FROM users WHERE username='$username' ");
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while ($row=mysql_fetch_assoc($query)) {
			$dbusername=$row['username'];
			$dbpassword=$row['password'];
	
		}
		if($username==$dbusername&&$password==$dbpassword)
		{
			echo "Welcome to Home page...";
			echo "<p>";
			echo "Login Sucessfully.<p><a href='membersarea.php'> Click here to enter the member area</a>";
			$_SESSION['username']=$dbusername;

		}
		else
			echo "Incorrect Password";
	}
	else
		echo "That username doednt exists";

}
else
die("please enter username and password");


?>