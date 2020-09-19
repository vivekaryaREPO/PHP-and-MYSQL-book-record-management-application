<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm');
$size=sizeof($_POST);
$j=1;
for($i=1;$i<=$size;$i++,$j++)
{
	$index="b".$j;
  if(isset($_POST[$index]))
  {
	  $book_ids[$i]=$_POST[$index];
  }
  else
  {
	  $i--;
  }
  if($i>$size)
  {
	  break;
  }
 
}
$siz=sizeof($book_ids);
for($k=1;$k<=$siz;$k++)
{
	$q="Delete from book_record_management where Book_id=".$book_ids[$k];
	mysqli_query($con,$q);
}
mysqli_close($con);
?>
<!doctype html>
<html>
<head>
<title>Deleted result</title>
</head>
<body>
<h1><?php echo $siz; ?> Book deleted</h1>
<br/>
<a href="Home.php">Go To Home</a>
<a href="Delete.php">Back to Delete</a>
</body>
</html>