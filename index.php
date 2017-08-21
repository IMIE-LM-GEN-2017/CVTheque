<?php
session_start();
//include_once 'config/dbconnect.php';
require_once 'includes/dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>CV'Théque</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">CV'Theque</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><p class="navbar-text">Connecter avec <?php echo $_SESSION['usr_name']; ?></p></li>
				<li><a href="page/logout.php">Se déconnectez</a></li>
				<?php } else { ?>
				<li><a href="page/login.php">Se connecter</a></li>
				<li><a href="page/register.php">S'enregistrer</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>

<div class="head-bg">
  <div class="head-bg-img"></div>
  <div class="head-bg-content">
    <div
    class="col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4 col-xs-offset-4 col-xs-6">
      <input class="form-control" type="text" placeholder="Recherche de cv">
      <br>
      <div><button type="submit" class="btn btn-primary">Soumettre</button></div>
    </div>
    </div>
  </div>
</div>

																		<!-- A MODIFIER -->

<footer id="footer-Section">
  <div class="footer-top-layout">
    <div class="container">
      <div class="row">
        <div class="OurBlog">
          <h4>VOTRE ÉCOLE INFORMATIQUE AU MANS</h4>
          <p>FORMEZ-VOUS AU CŒUR DE LA FILIÈRE NUMÉRIQUE</p>
          <div class="post-blog-date"></div>
        </div>
        <div class="col-lg-8 col-lg-offset-2">
          <div class="col-sm-4">
            <div class="footer-col-item">
            	<img id="logoimie" src="img/imie.jpg" alt="LogoImie">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="footer-col-item">
              <h4>Nous Contacter</h4>
              <div class="item-contact">
								<a href="tel:02 43 75 82 23"><span class="link-id">Tel</span>:<span>02 43 75 82 23</span></a>
								<a href="fax : 02 28 20 03 05"><span class="link-id">Fax</span>:<span>02 28 20 03 05</span></a>
								<a href="mailto:contact-lemans@imie.fr"><span class="link-id">Email</span>:<span>contact-lemans@imie.fr</span></a>
							</div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="footer-col-item">
              <h4>Notre Adresse</h4>
								<p>IMIE Le Mans<br>
								Centre d’affaires Novaxis<br>
								75 bd Marie et Alexandre Oyon<br>
								(3 étage)<br>
								72100 LE MANS </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom-layout">

    <div class="copyright-tag">Copyright © </div>
  </div>
</footer>








    <script
    src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script
    src="js/bootstrap.min.js"></script>
  </body>
</html>
