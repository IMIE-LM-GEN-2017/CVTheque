<?php

include('navbar.php');
include('header.php');

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

	//name can contain only alpha characters and space
	if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
		$error = true;
		$name_error = "Name must contain only alphabets and space";
	}
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$error = true;
		$email_error = "Entrez s'il vous plaît un email valide";
	}
	if(strlen($password) < 6) {
		$error = true;
		$password_error = "Votre Mot de Passe doit contenir 6 caractères minimum";
	}
	if($password != $cpassword) {
		$error = true;
		$cpassword_error = "Votre mot de passe ne correspond pas avec le précedent";
	}
	if (!$error) {
		if(mysqli_query($con, "INSERT INTO users(name,email,password) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "')")) {
			$successmsg = "Votre inscription est validée! <a href='login.php'>Clicker ici pour vous connecter</a>";
		} else {
			$errormsg = "Une erreur est survenu lors de l'inscription .... S'il vous plait réessayez plus tard!";
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Registration Script</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
				<fieldset>
					<legend>S'enregistrer</legend>

					<div class="form-group">
						<label for="name">Nom</label>
						<input type="text" name="name" placeholder="Entrez Votre Nom" required value="<?php if($error) echo $name; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
					</div>

					<div class="form-group">
						<label for="name">Email</label>
						<input type="text" name="email" placeholder="Email" required value="<?php if($error) echo $email; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
					</div>

					<div class="form-group">
						<label for="name">Mot de Passe</label>
						<input type="password" name="password" placeholder="Mot de Passe" required class="form-control" />
						<span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
					</div>

					<div class="form-group">
						<label for="name">Confirmer Mot de Passe</label>
						<input type="password" name="cpassword" placeholder="Confirmer Mot de Passe" required class="form-control" />
						<span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
					</div>

					<div class="form-group">
						<input type="submit" name="signup" value="S'enregistrer" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
		Déjà enregistrer ? <a href="login.php">Connecter vous ici</a>
		</div>
	</div>
</div>
</body>
</html>
