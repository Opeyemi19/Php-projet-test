<?php 

	session_start(); //Permet d' integrer des var Globals($_SESSION, etc )

	$username = "";
	$email  = "";
	$errors = array();
	

	// Connexion à la base de donnée
	$db = mysqli_connect('localhost', 'root', '', 'registration');
	
	//Si le Button de register est cliqué 
	if (isset($_POST['register'])) {
		$username = mysql_real_escape_string($_POST['username']);
		$email = mysql_real_escape_string($_POST['email']);
		$password_1 = mysql_real_escape_string($_POST['password_1']);
		$password_2 = mysql_real_escape_string($_POST['password_2']);
	
	//Assurer vous que les champs sont rempplis correctement
	if (empty($username)) {
	 	array_push($errors, "Username is required"); // Ajoute error aux errors de l' array
	 } 
	 if (empty($email)) {
	 	array_push($errors, "Email is required"); // Ajoute error aux errors de l' array
	 }
	 if (empty($password_1)) {
	 	array_push($errors, "Password is required"); // Ajoute error aux errors de l' array
	 }
	 if ($password_1 != $password_2) {
	 	array_push($errors, "The two password do not match"); // Ajoute error aux errors de l' array
	 }

	 // S' il y a pas d' Erreur, sauvegarder l' utilisateur dans la base de Donnée

	 if (count($errors) == 0) {
	 	$password = md5($password_1); //Permet de Crypter le password stocké dans la base de Donnée
	 	$sql = "INSERT INTO users (username, email, password) 
	 				VALUES ('$username', '$email', '$password')";
	 	mysql_query($db, $sql);

	 	$_SESSION['username'] = $username;
	 	$_SESSION['success'] = "You are now logged in";
	 	header('location: index.php'); // Permet de Ramener à la page d'acceuil
	 }


	}
 ?>
