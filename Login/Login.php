<?php
?><!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div class="container">
		<h1 class="text-center">DEMO Financial Online System Login</h1>
		<?php if(empty($_POST['username']) || empty($_POST['password'])) { ?>
		<form method="POST">
			<input type="text" name="username" placeholder="username" class="form-control" required>
			<input type="password" name="password" placeholder="password" class="form-control" required>
			<input type="submit" class="btn btn-default btn-block" value="Login">
		</form>
		<?php } else {

		    //echo $_POST['username']."<br>";
		    //echo $_POST['password']."<br>";

			if($_POST['username'] == "demo" && $_POST['password'] == "demo7864")
			{
			    header("Location: https://lucid-dijkstra.74-208-106-87.plesk.page/Menu/Menu.html");

			}else
			{
			    echo '<div class="alert alert-danger text-center">Login failed: Invalid Username or Password ..</div>';
			}
		}
		?>
	</div>
</body>
</html>
