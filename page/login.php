<?php
session_start();

if(isset($_SESSION['usr_id'])!="") {
	header("Location: ../index.php");
}

include_once '../config/dbconnect.php';

//check if form is submitted
if (isset($_POST['login'])) {

	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$result = mysqli_query($con, "SELECT * FROM users WHERE email = '" . $email. "' and password = '" . md5($password) . "'");

	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['usr_id'] = $row['id'];
		$_SESSION['usr_name'] = $row['name'];
		header("Location: ../index.php");
	} else {
		$errormsg = "Mot de Passe ou E-mail Incorrect!!!";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>

<?php include('navbar.php'); ?>
<?php include('header.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
				<fieldset>
					<legend>Se Connecter</legend>

					<div class="form-group">
						<label for="name">Email</label>
						<input type="text" name="email" placeholder="Votre Email" required class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">Mot De Passe</label>
						<input type="password" name="password" placeholder="Mot De Passe" required class="form-control" />
					</div>

					<div class="form-group">
						<input type="submit" name="Connexion" value="Connexion" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
		Nouvelle utilisateur? <a href="register.php">Enregistrer Vous Ici</a>
		</div>
	</div>
</div>
</body>
</html>
