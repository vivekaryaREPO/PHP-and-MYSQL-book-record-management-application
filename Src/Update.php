<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm');
$q="select * from book_record_management;";
$result=mysqli_query($con,$q);
$size=mysqli_num_rows($result);
mysqli_close($con);
?>
<!doctype html>
<html>
<head>
<title>Update Book Detail</title>
</head>
<body>
<h1>Update Details !</h1>
<form action="UpdateResult.php" method="post" >
<table border="1">
<tr>
<th>Book id</th>
<th>Book name</th>
<th>Price</th>
<th>Author</th>
</tr>
<?php
for($i=1;$i<=$size;$i++)
{
	$record=mysqli_fetch_array($result);
?>
<tr>
<td><input type="text" name="Id<?php echo $i ?>" readonly value="<?php echo $record['Book_id']; ?>" /></td>
<td><input type="text" name="Name<?php echo $i ?>" value="<?php echo $record['Book_Title']; ?>" /></td>
<td><input type="text" name="Price<?php echo $i ?>" value="<?php echo $record['Book_Price']; ?>" /></td>
<td><input type="text" name="Title<?php echo $i ?>" value="<?php echo $record['Book_author']; ?>" /></td>
</tr>
<?php
}
?>
</table>

<input type="submit" value="UPDATE">
</body>
</html>