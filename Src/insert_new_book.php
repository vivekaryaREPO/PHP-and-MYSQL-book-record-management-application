<?php
$b_title=$_POST['title'];
$b_price=$_POST['price'];
$b_author=$_POST['author'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM');
$q="insert into Book_Record_Management (Book_Title,Book_Price,Book_author) values('$b_title',$b_price,'$b_author')";
$final_result=mysqli_query($con,$q);
mysqli_close($con);
?>
<!doctype html>
<html>
<head>
<title>Insert Record UI</title>
</head>
<body>
<h1>BOOK RECORD MANAGEMENT</h1>
<p>
<?php
   if ($final_result==1)
	echo "The book is successfully inserted";
   else
	echo "Sorry!! there was an error registering this book";
?>
</p>
<h4>To insert another book,</h4> <a href="insertion.php">Click here</a>

<a href="Home.phpl">Go To Home</a>
</body>
</html>