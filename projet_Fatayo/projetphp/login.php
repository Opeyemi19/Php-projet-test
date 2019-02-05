<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Projet Login</title>
	<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
    	<h2>Login</h2>
    </div>

    <form method="post" action="login.php">	
    	<div class="input-group">
    		<label>Username</label>
    		<input type="text" name="Username">
    	</div>
    	<div class="input-group">
    		<label>Password</label>
    		<input type="password" name="password_1">
    	</div>
    	<div class="input-group">
    		<button type="submit" name="login" class="bouton">Login</button>
    	</div>
    	<p>
    		Already a member? <a href="register.php" class="cheq">Se Déconnecter Ici</a>
    	</p>
    </form>
</body>
</html>