<?php

session_start ();
	// recuper email et password dans des variables
setcookie('cookie_name', 'tuMEvois', (time() + 3600));

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE email LIKE '$email'";

$db = new PDO('mysql:host=localhost;dbname=bananastore', 'root', 'troiswa');

$statement = $db->prepare($sql);
$statement->execute();
$user = $statement->fetch();

if ($user == null) {
	echo "L'utilisateur $email n'existe pas";

} else {

	if ($password == $user['password']) {
		echo "Bonjour {$user['firstname']} {$user['lastname']}";
		header("Location: page_membre.php");

	} else {
		echo "le mot de passe est incorrect";
	}

}







