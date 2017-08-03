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
				<li><a href="../page/logout.php">Se déconnectez</a></li>
				<?php } else { ?>
				<li><a href="../page/login.php">Se connecter</a></li>
				<li><a href="../page/register.php">S'enregistrer</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>
<div class="row">
		<div class="col-lg-3">
			<ul class="nav navbar-top-links navbar-left">
				<div class="navbar-default sidebar" role="navigation">
						<div class="sidebar-nav navbar-collapse">
								<ul class="nav" id="side-menu">
										<li class="sidebar-search">
												<div class="input-group custom-search-form">
														<input type="text" class="form-control" placeholder="Rechercher ...">
														</span>
												</div>
										</li>
										<li>
												<a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
										</li>

										<li>
												<a href="tables.php"><i class="fa fa-table fa-fw"></i> Inscrit</a>
										</li>
										<li>
												<a href="forms.php"><i class="fa fa-edit fa-fw"></i> Formulaire Recu</a>
										</li>
										<li>
												<a href="cv.php"><i class="fa fa-wrench fa-fw"></i> Base de CV<span class="fa arrow"></span></a>
										</li>
								</ul>
						</div>
					</ul>
			</div>
		</div>
	</div>
</nav>
