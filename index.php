<?php
session_start();
include_once 'config/dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>CV'Théque</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>
<div class="">

</div>
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
          <h4>Our Blog</h4>
          <p>BCM wins mandate for Avendus Wealth Management portal revamp</p>
          <div class="post-blog-date">20th Oct 2016</div>
        </div>
        <div class=" col-lg-8 col-lg-offset-2">
          <div class="col-sm-4">
            <div class="footer-col-item">
              <h4>Go Travel Cloud</h4>
              <address>
              501,507 your company address<br>
              400015 Maharashtra, UK
              </address>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="footer-col-item">
              <h4>Contact</h4>
              <div class="item-contact"> <a href="tel:630-885-9200"><span class="link-id">P</span>:<span>630-885-9200</span></a> <a href="tel:630-839.2006"><span class="link-id">F</span>:<span>630-839.2006</span></a> <a href="mailto:info@brandcatmedia.com"><span class="link-id">E</span>:<span>info@brandcatmedia.com</span></a> </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="footer-col-item">
              <h4>Sign up for Newsletter</h4>
              <form class="signUpNewsletter" action="" method="get">
                <input name="" class="gt-email form-control" placeholder="You@youremail.com" type="text">
                <input name="" class="btn-go" value="Go" type="button">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom-layout">
    <div class="socialMedia-footer"> <a href="#"><img src="img/socialMedia_01.png"></a> <a href="#"><img src="img/socialMedia_02.png"></a> <a href="#"><img src="img/socialMedia_03.png"></a> <a href="#"><img src="img/socialMedia_04.png"></a> <a href="#"><img src="img/socialMedia_05.png"></a> </div>
    <div class="copyright-tag">Copyright © 2017 company name. All Rights Reserved.</div>
  </div>
</footer>








    <script
    src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script
    src="js/bootstrap.min.js"></script>
  </body>
</html>
