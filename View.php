<!DOCTYPE html>
<html>
<head>
	<title> New User</title>
</head>
<body>
<?php echo $test; ?>
<form method="POST" action="http://localhost/selfstudy/fatpipe/index.php?c=controller&m=create">
<lable> Name: </lable>
<input type="text" name="name">
<br><br>
<lable> Email: </lable>
<input type="text" name="email">
<br><br>
<lable> Phone: </lable>
<input type="text" name="phone">
<br><br>
<input type="submit" name="createuser">
</form>
</body>
</html>