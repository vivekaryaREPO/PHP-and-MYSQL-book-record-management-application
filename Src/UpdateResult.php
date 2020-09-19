<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm');
$size=sizeof($_POST);
$size=$size/4;
echo $size;
for($i=1;$i<=$size;$i++)
{
	$for_id="Id".$i;	
	$for_Title="Title".$i;
	$for_Price="Price".$i;
	$for_Author="Name".$i;
	$q="update book_record_management set Book_Title='$_POST[$for_Title]',Book_Price='$_POST[$for_Price]',Book_author='$_POST[$for_Author]',
	     where Book_id='$_POST[$for_id]'";
	
    mysqli_query($con,$q);
}   
?>
<!doctype html>
<html>
<head>
<title>Upadating result</title>
</head>
<body>
<h1>Record updated</h1>
<br/>
<a href="Home.php">Go To Home</a>
<a href="Update.php">Update more</a>
</body>
</html>
