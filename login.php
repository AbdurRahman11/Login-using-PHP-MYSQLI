<!DOCTYPE html>
<html>
<head>
<title> Login Page</title>

<link rel = "stylesheet"
   type = "text/css"
   href = "mystyle.css" />
   <link href="https://fonts.googleapis.com/css?family=Poiret+One|Fjalla+One" rel="stylesheet">
</head>
<body>
<h1>LOGIN PAGE </h1>
	<div class="container-fluid" id="frm">
	
	
		<form action="test.php" method="POST">
			<p>
				<label>User Name :</label>
				<input type="text" class="txarea" id="name" name="user" />
			</p>
			<p>
				<label>Password  :  </label>
				<input type="password" class="txarea" id="pass" name="pass" />
			</p>
			<p>
				<input type="submit" id="btn" name="submit" value="Login" />
			</p>
		</form>
	</div>
</body>
</html>