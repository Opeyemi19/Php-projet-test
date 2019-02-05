<?php include ('server.php'); ?>
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
    	<h2>Register</h2>
    </div>

    <form method="post" action="register.php">	
        
        <!-- Affiche l' Erreur ici lors de la validation -->
            <?php include('errors.php'); ?>

    	<div class="input-group">
    		<label>Username</label>
    		<input type="text" name="username" value="<?php echo $username ?>">
    	</div>
    	<div class="input-group">
    		<label>Email</label>
    		<input type="email" name="email" value="<?php echo $email ?>">
    	</div>
    	<div class="input-group">
    		<label>Password</label>
    		<input type="password" name="password_1">
    	</div>
    	<div class="input-group">
    		<label>Confirm Password</label>
    		<input type="password" name="password_2">
    	</div>
    	<div class="input-group">
    		<button type="submit" name="register" class="bouton">Register</button>
    	</div>
    	<p>
    		Already a member? <a href="login.php" class="cheq">Se Connecter Ici</a>
    	</p>
    </form>
</body>
</html>