<!doctype html>
<html>
<head>
<title>Inserting a new record</title>
</head>
<body>
<h1>BOOK RECORD MANAGEMENT</h1>
<form action="insert_new_book.php" method="post">
<table>
<tr>
<td><b>Book Title:</b> <input type="text" name="title" required /></td>
</tr>
<tr>
<td><b>Book Price:</b> <input type="text" name="price" required /></td>
</tr>
<tr>
<td><b>Book Author:</b> <input type="text" name="author" required /></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="insert" /></td>
</tr>
<a href="Home.php">Go To Home</a>

</table>
</form>
</body>
</html>
