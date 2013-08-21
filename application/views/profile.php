<!DOCTYPE HTML>
<html lang="en-US">
<head>
	  <?php include("application/templates/header.php"); 
  include("assets/js/JS.js");
    // include("applications/templates/footer.php");?>
	<title>User Dashboard</title>
</head>
<body>
	<h1>You have logged in!</h1>
	<!-- display here the user information -->
	<p>First name: <?php echo $user['first_name'] ?></p>
	<p>Last name: <?php echo $user['last_name'] ?></p>
	<p>Email: <?php echo $user['email'] ?></p>
	<p>Password: <?php echo $user['password'] ?></p>
	<p>Created Date and Time: <?php echo $user['created_at'] ?></p>
	
	<!-- logout button -->
	<form action="/user/logout">
		<input type="submit" value="Logoff">
	</form>
</body>
</html>