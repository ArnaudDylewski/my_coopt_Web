<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="../img/sliders/logomini.png">
    <title>Cooptant</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- Bootstrap Css -->
    <link href="../bootstrap-assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style -->
    <link href="../plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="../plugins/owl-carousel/owl.theme.css" rel="stylesheet">
    <!--<link href="plugins/owl-carousel/owl.transitions.css" rel="stylesheet">-->
    <link href="../plugins/Lightbox/dist/css/lightbox.css" rel="stylesheet">
    <link href="../plugins/Icons/et-line-font/style.css" rel="stylesheet">
    <link href="../plugins/animate.css/animate.css" rel="stylesheet">
    <link href="../css/cooptations123.css" rel="stylesheet">
    <!-- Icons Font -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Preloader
	============================================= -->
    <div class="preloader"><i class="fa fa-circle-o-notch fa-spin fa-2x"></i></div>
    <!-- Header
	============================================= -->
    <section class="main-header">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="Accueil_Coopt.php"><img src="../img/logo/logo.png" class="img-responsive" alt="logo"></a>
                </div>
                <?php
                if ($_SESSION['Role'] == 1){
                echo '<div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                    <div class="col-md-8 col-xs-12 nav-wrap">
                        <ul class="nav navbar-nav">
                            <li><a href="Accueil_Coopt.php" class="page-scroll">Home</a></li>
                            <li><a href="Coopter.php" class="page-scroll">Coopter</a></li>
                            <li><a href="Cooptation.php" class="page-scroll">Cooptation</a></li>
                            <li><a href="https://intra.extia.fr/login/" class="page-scroll">Intra</a></li>
                            <li><a href="logout.php" class="page-scroll">Deco</a></li>
                        </ul>
                    </div>
                    <div class="social-media hidden-sm hidden-xs">
                        <ul class="nav navbar-nav">
                            <li><a href="https://www.facebook.com/talentextia"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/extia_conseil"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/extia">in</a></li>
                        </ul>
                    </div>
                </div>';
                    
                }
                else if ($_SESSION['Role'] == 2){
                    echo '<div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                    <div class="col-md-8 col-xs-12 nav-wrap">
                        <ul class="nav navbar-nav">
                            <li><a href="Accueil_Coopt.php" class="page-scroll">Home</a></li>
                            <li><a href="Coopter.php" class="page-scroll">Coopter</a></li>
                            <li><a href="Cooptation.php" class="page-scroll">Cooptation</a></li>
                            <li><a href="testRH.php" class="page-scroll">Cooptant</a></li>
                            <li><a href="https://intra.extia.fr/login/" class="page-scroll">Intra</a></li>
                            <li><a href="logout.php" class="page-scroll">Deco</a></li>
                        </ul>
                    </div>
                    <div class="social-media hidden-sm hidden-xs">
                        <ul class="nav navbar-nav">
                            <li><a href="https://www.facebook.com/talentextia"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/extia_conseil"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/extia">in</a></li>
                        </ul>
                    </div>
                </div>';
                }
                else if ($_SESSION['Role'] == 3){
                    echo '<div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                    <div class="col-md-8 col-xs-12 nav-wrap">
                        <ul class="nav navbar-nav">
                            <li><a href="Accueil_Coopt.php" class="page-scroll">Home</a></li>
                            <li><a href="ADMIN_AjoutRH.php" class="page-scroll">Ajout RH</a></li>
                            <li><a href="Statistique.php" class="page-scroll">Statistique</a></li>
                            <li><a href="https://intra.extia.fr/login/" class="page-scroll">Intra</a></li>
                            <li><a href="logout.php" class="page-scroll">Deco</a></li>
                        </ul>
                    </div>
                    <div class="social-media hidden-sm hidden-xs">
                        <ul class="nav navbar-nav">
                            <li><a href="https://www.facebook.com/talentextia"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/extia_conseil"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/extia">in</a></li>
                        </ul>
                    </div>
                </div>';
                }?>
            </div>
        </nav>
    </section>
    <!-- Services
	============================================= -->

<section id="services">
        <div class="container">
            </br><h2>Suivis des cooptations de mes consultants</h2>
            <hr class="sep">
            <div class="services-box">
                <div class="row wow fadeInUp" data-wow-delay=".3s">
                   
                        
                   
     
<div class="col-md-30">
   

                    <!--<div class="table-responsive">-->
                    <!--        <table id="table1" class="table-responsive">-->
                    <!--            <tr>-->
                    <!--                <td>Nom</td>-->
                    <!--                <td>Prenom</td>-->
                    <!--                <td>Metier</td>-->
                    <!--                <td>Nombre de cooptation</td>-->
                    <!--                <td>Points gagnés</td>-->
                    <!--                <td>Statuts</td>-->
                    <!--            </tr>-->
                    <!--            </table>-->
<div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <?php
    $bdd = mysqli_connect('127.0.0.1','user','mypass','Extia_Coop');
    $resultat = mysqli_query($bdd,'SELECT Photo, Nom , Prenom , Mail , ID , Agence FROM Utilisateur WHERE RH = "'.$_SESSION['user'].'"');
    while ($donnees = mysqli_fetch_assoc($resultat))
        {
            $resultat_coopt = mysqli_query($bdd,'SELECT Photo, ID ,Nom , Prenom , Origine , Statut, Pourquoi , Metier FROM Coopte WHERE ID_Cooptant = '.$donnees['ID'].'');
            echo '
                        <div class="panel-heading">      
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$col.' ">
                                <h4 class="panel-title">
                                    <div class="table-responsive">
                                        <table class="table-responsive">
                                        <thead>
                                            <th>Photo</th>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>E-mail</th>
                                        </thead>
                                            <tbody>
                                                    <th><img width="75px" height="85px" src="../upload/photo_cooptant/'.$donnees['Photo'].'"></th>
                                                    <th>'.utf8_encode($donnees['Nom']).'</th>
                                                    <th>'.utf8_encode($donnees['Prenom']).'</th>
                                                    <th>'.utf8_encode($donnees['Mail']).'</th>
                                                    <th>'.utf8_encode($donnees['Agence']).'</th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </h4>
                            </a>      
                        </div>
                        <div id="collapse'.$col.'" class="panel-collapse collapse">
                        ';
            while ($donnees_coopt = mysqli_fetch_assoc($resultat_coopt))
            {
            echo '<div class="table-responsive">
                <table class="table-responsive">
                    <thead>
                        <tr>
                        <th>Photo</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Statut</th>
                        <th>Statut Actuel</th>
                        <th>Pourquoi</th>
                        <th>Ecole/Société</th>
                        <th>Metier</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img width="50px" height="50px" src="../upload/photo_coopte/'. $donnees_coopt['Photo'] .'"</td>
                            <td>'.utf8_encode($donnees_coopt['Nom']).'</td>
                            <td>'.utf8_encode($donnees_coopt['Prenom']).'</td>
                            <td>
                                <form method="post" action="#oModal">
                                <select name="statut">
                                    <option id="CV NOK">CV NOK</option>
                                    <option id="CV OK">CV OK</option>
                                    <option id="EC1">EC1</option>
                                    <option id="EC2">EC2</option>
                                    <option id="EP">EP</option>
                                    <option id="ED">ED</option>
                                    <option id="Embauche">Embauche</option>
                                    <option id="Entree">Entree</option>
                                    <option id="Validation">Validation de periode d\'essai</option>
                                </select>
                            </td>
                            <td>'.utf8_encode($donnees_coopt['Statut']).'</td>
                            <td>'.utf8_encode($donnees_coopt['Pourquoi']).'</td>
                            <td>'.utf8_encode($donnees_coopt['Origine']).'</td>
                            <td>'.utf8_encode($donnees_coopt['Metier']).'</td>
                            <td>
                                <select name="poste">
                                    <option id="SI">SI</option>
                                    <option id="TELCO">TELCO</option>
                                    <option id="WEB">WEB</option>
                                    <option id="INDUS">INDUS</option>
                                    <option id="BFA">BFA</option>
                                    <option id="SUPPORT">SUPPORT</option>
                                </select>
                            </td>
                            <td><input type="submit" name="submit" value="Changer"></input></td>
                                </form>
                        </tr>
                    </tbody>
                </table>
                </form>
            </div>';
            }
    echo '</div>
';
$col++;
}
             if (isset($_POST['submit']))
             {
                 echo $_POST['poste'];
                 echo $_POST['statut'];
                 echo $_SESSION['id'];
                 $query = mysqli_query($bdd,'UPDATE Coopte SET Metier="'.$_POST['poste'].'", Statut="'.$_POST['statut'].'"');
             }
?>
                    </div>
                    
                </div>
            </div>
        </div>
        <div id="oModal" class="oModal">
  <div>
    <header>
      <a href="#fermer" title="Fermer la fenêtre" class="droite">X</a>
       <h2>Confirmation d'envoi du Mail:</h2>
     </header>
     
         <?php
         if ($_POST['statut'] == "CV NOK")
         {
             $resultat = mysqli_query($bdd,'SELECT Photo, Nom , Prenom , Mail , ID , Agence FROM Utilisateur WHERE RH = "'.$_SESSION['user'].'"');
        while ($donnees = mysqli_fetch_assoc($resultat))
            {
                $resultat_coopt = mysqli_query($bdd,'SELECT Photo, ID ,Nom , Prenom , Origine , Pourquoi , Metier FROM Coopte WHERE ID_Cooptant = '.$donnees['ID'].'');
                while ($donnees_coopt = mysqli_fetch_assoc($resultat_coopt))
                {
                echo'<div class="form-group">
                      <label for="Email"><strong>Email :</strong></label>
                      <form method="post" action="testRH.php">
                      <input type="Email" class="form-control" id="Email" placeholder="Email" name="Mail1" value="'.$donnees['Mail'].'" required>
                  </div>
                  <div class="form-group">
                        <textarea class="form-control" rows="10" placeholder="Message" name="Mail">Keep on trying, '.$donnees_coopt['Prenom'].' ne correspond pas tout à fait à nos métiers. Ne perds pas espoir ce sera pour une prochaine fois</textarea>
                    </div>
                    <input type="submit" name="SEND" value="Send" />
                    </form>';
                    if (isset($_POST['SEND']))
                        {
                            $to = $donnees['Mail'];
                            $subject = "Changement de statut";
                            $message = $_POST['Mail'];
                            mail ($to, $subject, $message);
                        }
     echo'<section>
     
      <a href="testRH.php" class="btn droite" title="Fermer la fenêtre">Fermer</a>';
                }
            }
         }
     ?>
  </div>
</div>
    </section>
    <!-- Footer
	============================================= -->
    <footer>
        <div class="container">
            <h1>EXTIA</h1>
            <div class="social">
                <a href="https://fr-fr.facebook.com/talentextia/"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/extia_conseil"><i class="fa fa-twitter"></i></a>
                <a href="https://www.linkedin.com/company/extia">IN</a>
            </div>
            <h6>&copy; 2015 Extia.Developement By EtnaDev</h6>
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap-assets/js/bootstrap.min.js"></script>
    <script src="../js/custom.js"></script>
    <!-- JS PLUGINS -->
    
    <script src="../plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="../js/jquery.easing.min.js"></script>
    <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="../plugins/countTo/jquery.countTo.js"></script>
    <script src="../plugins/inview/jquery.inview.min.js"></script>
    <script src="../plugins/Lightbox/dist/js/lightbox.min.js"></script>
    <script src="../plugins/WOW/dist/wow.min.js"></script>
    <!-- GOOGLE MAP -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
</body>
 
</html>