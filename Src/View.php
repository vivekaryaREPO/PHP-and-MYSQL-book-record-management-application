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
<title>View List of Books</title>
</head>
<body>
<h1>Books available</h1>
<table border="1">
<tr>
<th>Number</th>
<th>Book Title</th>
<th>Book Price</th>
<th>Book Author</th>
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
</tr>
<?php
}
?>
<a href="Home.php">Go To Home</a>
</table>
</body>
</html>