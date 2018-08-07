<!doctype html>
<html>
	<head>
		<link type = "text/css" rel = "stylesheet" href = "login_page_style.css">
        <meta charset = "UTF-8">
	</head>
	<body>
		<div id = "login_area">
			<form method = "POST">
				Username:
				<input type = "text" name = "username">
				<br>
				Password:
				<input type = "Password" name = "password">
				<button type = "submit"><h1>Login</h1></button>
			</form>
			<?php
				
				echo $_POST['username'];
			?>
		</div>
	</body>
</html>