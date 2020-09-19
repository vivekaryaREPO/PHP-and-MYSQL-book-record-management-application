<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm');
$q="select * from book_record_management";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!doctype html>
<html>
<head>
<title>Deletion</title>
</head>
<body>
<h1>Delete a book </h1>
<form action="DeleteResult.php" method="POST">
<table border="1">
<tr>
<th>Number</th>
<th>Book title</th>
<th>Book price</th>
<th>Book author</th>
<th>Check to delete</th>
</tr>
<?php
for($i=1;$i<=$num;$i++)
{
	$record=mysqli_fetch_array($result);
 ?>
<tr>
<td><?php echo $record['Book_id']; ?></td>
<td><?php echo $record['Book_Title']; ?></td>
<td><?php echo $record['Book_Price']; ?></td>
<td><?php echo $record['Book_author']; ?></td>
<td><input type="checkbox" value="<?php echo $record['Book_id']; ?>" name="b<?php echo $i ?>" /></td>
</tr>
<?php
}
?>
</table>
<input type="submit" value="Delete" />
</form>
</body>
</html>