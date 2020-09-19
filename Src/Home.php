<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location:http://localhost:2233/BRM/login.html');
}
?>

<!doctype html>
<html>
<head>
<title>Home Page</title>
</head>
<body>
<h1>Welcome to Book Record Management Web Application Mr. <?php echo $_SESSION['username']; ?> </h1>
<br/>
<a href="Logout.php">Logout</a>
<br/>
<br/>
<a href="insertion.php">Insert new book</a>
<a href="View.php">View available books</a>
<a href="Delete.php">Delete a boo record</a>
<a href="Update.php">Update book information</a>
</body>
</html>
