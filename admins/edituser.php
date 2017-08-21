<?php
include '../page/navbar.php';
include '../page/header.php';
 ?>
 <div class="container">
   <div class="col-sm-6 col-md-3">
     <div class="thumbnail">
       <img src="../img/avatar1.jpg" alt="...">
       <div class="caption">
         <center><h4>Jean Francois</h4></center>
         <p>Inscrit depuis : 21/08/2017</p>
       <center><p><a href="#" class="btn btn-primary" role="button">Plus d'infos</a> <a href="#" class="btn btn-default" role="button">CV's</a></p></center>
       </div>
     </div>
   </div>
   <div class="col-sm-12 col-md-9">
               <div class="panel panel-default">
                   <div class="panel-heading">
                       Modification d'informations
                   </div>
                   <div class="panel-body">
                       <div class="row">
                           <div class="col-lg-12">
                               <form role="form">
                                   <div class="form-group">
                                       <label>Nom</label>
                                       <input class="form-control">
                                   </div>
                                   <div class="form-group">
                                       <label>Prénom</label>
                                       <input class="form-control">
                                   </div>
                                   <div class="form-group">
                                       <label>Adresse E-mail</label>
                                       <input class="form-control">
                                   </div>

                                   <div class="form-group">
                                       <label>Numéro de téléphone</label>
                                       <input class="form-control ">
                                   </div>
                                   <div class="form-group">
                                       <label>Upload un avatar</label>
                                       <input type="file">
                                   </div>
                                   <div class="form-group">
                                       <label>Biographie</label>
                                       <textarea class="form-control" rows="3"></textarea>
                                   </div>
                                   <div class="form-group">
                                       <label>Disponibilité</label>
                                       <div class="checkbox">
                                           <label>
                                               <input type="checkbox" value="">Disponible
                                           </label>
                                       </div>
                                       <div class="checkbox">
                                           <label>
                                               <input type="checkbox" value="">Indisponible
                                           </label>
                                       </div>
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
                                       <label>Disponibilités</label>
                                       <label class="radio-inline">
                                           <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Disponible
                                       </label>
                                       <label class="radio-inline">
                                           <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">Indisponible
                                       </label>
                                   </div>
                                   <button type="submit" class="btn btn-default label-success">Modifier</button>
                                   <button type="reset" class="btn btn-default label-warning">Reset les information</button>
                                   <button type="button" class="btn btn-default label-danger"><span class="glyphicon glyphicon-trash"></span>Supprimer ce compte</button>
                               </form>
                           </div>
                           <!-- /.col-lg-6 (nested) -->
                   </div>
                   <!-- /.panel-body -->
               </div>
               <!-- /.panel -->
           </div>
           <!-- /.col-lg-12 -->
       </div>
       <!-- /.row -->
       </div>
     </div>
   </div>
  </div>
