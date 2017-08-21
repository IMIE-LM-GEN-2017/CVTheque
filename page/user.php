<!DOCTYPE html>
<?php include('header.php'); ?>
<html lang="fr">
<head>
  <title>CV'Theque</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
  <?php include('navbar.php'); ?>
  <!-- Header Plusieurs Pages -->

<div class="container text-left">
      <div class="row">
  </div>
      <div class="panel panel-default">

          <div class="panel-body">
              <ul class="nav nav-pills">
                  <li class="active"><a href="#home-pills" data-toggle="tab">Accueil</a>
                  </li>
                  <li><a href="#profile-pills" data-toggle="tab">Profile</a>
                  </li>
                  <li><a href="#messages-pills" data-toggle="tab">Mes CV</a>
                  </li>
                  <li><a href="#settings-pills" data-toggle="tab">Paramétres</a>
                  </li>
              </ul>
              <div class="tab-content">
                  <div class="tab-pane fade in active" id="home-pills">
                      <h4>Home Tab</h4>
                      <p>Bienvenue sur votre profile, n'hésitez pas a mettre a jour vos CV's et vos disponibilités constament.</p>
                  </div>
                  <div class="tab-pane fade" id="profile-pills">
                      <h4>Profile Tab</h4>
                      <p>
                        <div class="container text-left">
                          <div class="row">
                              <div class="col-lg-11">
                                  <div class="panel panel-yellow">
                                      <div class="panel-heading">
                                          Default Panel
                                      </div>
                                      <div class="panel-body">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                      </div>
                                      <div class="panel-footer">
                                          Panel Footer
                                      </div>
                                  </div>
                              </div>
                            </div>
                        </div>
                      </p>
                  </div>
                  <div class="tab-pane fade" id="messages-pills">
                      <h4>Lise des CV</h4>

                      </div>
                  <div class="tab-pane fade" id="settings-pills">
                      <h4>Paramétres</h4>
                      <p>  <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Basic Form Elements
                                    </div>
                                  <div class="container text-left">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                              <form role="form">
                                                      <div class="form-group">
                                                <form role="form">
                                                    <div class="form-group">
                                                        <fieldset disabled>
                                                            <div class="form-group">
                                                                <label for="disabledSelect">Nom Prénom</label>
                                                                <input class="form-control" id="disabledInput" type="text" placeholder="Nom Prénom" disabled>
                                                            </div>
                                                          </div>
                                                    <div class="form-group">
                                                        <label>E-mail</label>
                                                        <input class="form-control" placeholder="email@example.com">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Text Input with Placeholder</label>
                                                        <input class="form-control" placeholder="Enter text">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Avatar</label>
                                                        <input type="file">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Biographie</label>
                                                        <textarea class="form-control" rows="3"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Checkboxes</label>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" value="">Checkbox 1
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" value="">Checkbox 2
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" value="">Checkbox 3
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Inline Checkboxes</label>
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox">1
                                                        </label>
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox">2
                                                        </label>
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox">3
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Radio Buttons</label>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Radio 1
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio 2
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio 3
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Inline Radio Buttons</label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>1
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">2
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">3
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Selects</label>
                                                        <select class="form-control">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Multiple Selects</label>
                                                        <select multiple class="form-control">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                    <button type="submit" class="btn btn-default">Submit Button</button>
                                                    <button type="reset" class="btn btn-default">Reset Button</button>
                                                </form>
                                            </div>
                                        </div>
                                      </div>
                                    </p>
                  </div>
              </div>
          </div>
        </div>
      </div>
  </div>
  <!-- Header Plusieurs Pages -->
<div class="container text-center">
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well">
        <p><a href="#">Mon Profile</a></p>
        <img src="../img/avatar.png" class="img-circle" height="100" width="100" alt="Avatar">
        <br/>
      </div>
      <div class="well">
        <p> Nom </p>
        <p> Prénom </p>
        <p> Adresse e-mail </p>
        <p> Numéro de Téléphone </p>
      </div>

      <div class="well">
        <p><a href="#">Les interets</a></p>
        <p>
          <span class="label label-default">Test</span>
          <span class="label label-primary">Test 2</span>
        </p>
      </div>
      <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <p><strong>Qui regarde mon profil ?</strong></p>

      </div>
      <p><a href="#">Twitter</a></p>
      <p><a href="#">Github</a></p>
      <p><a href="#">LinkeDin</a></p>
    </div>
    <div class="col-sm-9">
      <div class="row">
        <div class="col-sm-11">
          <div class="panel panel-default text-left">
            <div class="panel-body">
              <p contenteditable="true">Status</p>
              <button type="button" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-ok"></span> Disponible
              </button>
              <button type="button" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-remove"></span> Non Disponible
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Test</p>
           <img src="../img/avatar.png" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-8">
          <div class="well">
            <p>Mon premier CV</p>
          <div class="">
            <img src="../img/avatar.png" class="img-circle" height="auto" width="auto" alt="Avatar">
          </div>
          </div>
        </div>
      </div>
    <div class="col-sm-11 well">
      <div class="thumbnail">
        <p>Les évenement a venir:</p>
        <img src="paris.jpg" alt="Paris" width="400" height="300">
        <p><strong>Paris</strong></p>
        <p>Jeudi 27 Juillet 2017</p>
        <button class="btn btn-primary">Info</button>
      </div>
    </div>
  </div>
</div>


</div>
<?php include('footer.php'); ?>

</body>
</html>
