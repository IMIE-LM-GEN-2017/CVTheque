<?php
// Connexion à la base de données
// Définition titre pag
$titrepage="Login";

// Headers html; <head> + titres
include ('navbar.php');
include ('header.php');
?>
<div class="container">


    <div class="onl_login">
        <h3 class="onl_authTitle" data-toggle="tooltip" data-placement="bottom" title="Recommended: Lumen Theme">Se connecter ou <a href="#">S'enregistrer</a></h3>
		<div class="row onl_row-sm-offset-3 onl_socialButtons">
          <div class="col-xs-2 col-sm-2">
            <a href="#" class="btn btn-lg btn-block onl_btn-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
              <i class="fa fa-facebook fa-2x"></i>
              <span class="hidden-xs"></span>
            </a>
          </div>
          <div class="col-xs-2 col-sm-2">
            <a href="#" class="btn btn-lg btn-block onl_btn-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
              <i class="fa fa-twitter fa-2x"></i>
              <span class="hidden-xs"></span>
            </a>
          </div>
          <div class="col-xs-2 col-sm-2">
            <a href="#" class="btn btn-lg btn-block onl_btn-google-plus" data-toggle="tooltip" data-placement="top" title="Google Plus">
              <i class="fa fa-google-plus fa-2x"></i>
              <span class="hidden-xs"></span>
            </a>
          </div>
    </div><br>


		<div class="row onl_row-sm-offset-3 onl_loginOr">
			<div class="col-xs-12 col-sm-6">
				<hr class="onl_hrOr">
				<span class="onl_spanOr">Ou</span>
			</div>
		</div>

		<div class="row onl_row-sm-offset-3">
			<div class="col-xs-12 col-sm-6">
			    <form class="onl_loginForm" action="" autocomplete="off" method="POST">
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" class="form-control" name="Nom d'utilisateur" placeholder="Nom d'utilisateur">
					</div>
					<span class="help-block"></span>

					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
						<input  type="password" class="form-control" name="Mot de Passe" placeholder="Mot de Passe">
					</div>
					<button class="btn btn-lg btn-primary btn-block" type="submit"><i class="fa fa-sign-in"></i> Se connecter</button>
				</form>
			</div>
    	</div>
		<div class="row onl_row-sm-offset-3">
			<div class="col-xs-12 col-sm-3">
				<label class="checkbox">
					<input type="checkbox" value="remember-me">Se souvenir de moi
				</label>
			</div>
			<div class="col-xs-12 col-sm-3">
				<p class="onl_forgotPwd">
					<a href="#">Mot de Passe Oublié?</a>
				</p>
			</div>
		</div>
	</div>



        </div>
        <script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
