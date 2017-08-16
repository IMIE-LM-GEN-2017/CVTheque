<?php

require_once('../includes/dbconnect.php');
require_once('../includes/fonction.php');

?>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="../index.php">CV'Theque</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><p class="navbar-text">Connecter avec <?php echo $_SESSION['usr_name']; ?></p></li>
				<li><a href="logout.php">Se déconnectez</a></li>
				<?php } else { ?>
				<li><a href="login.php">Se connecter</a></li>
				<li><a href="register.php">S'enregistrer</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>
