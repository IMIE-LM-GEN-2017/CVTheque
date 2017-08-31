<?php
session_start();
//include_once 'config/dbconnect.php';
require_once '../includes/dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>CV'Théque</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
</head>
<body>

  <nav class="navbar navbar-default" role="navigation">
  	<div class="container-fluid">
  		<div class="navbar-header">
  			<a class="navbar-brand" href="../index.php">CV'Theque</a>
  		</div>
      <div class="col-lg-offset-4 col-md-offset-4  col-sm-offset-4  col-xs-offset-4 ">
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
          <button type="submit" class="btn btn-default">Soumettre</button>
        </form>
      </div>
  		<div class="collapse navbar-collapse" id="navbar1"></div>
  	</div>
  </nav>


	<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>



</html>
