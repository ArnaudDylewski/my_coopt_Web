<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <title>Coopter</title>
    <link rel="shortcut icon" href="../img/sliders/logomini.png">
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
    <link href="../plugins/Lightbox/dist/css/lightbox.css" rel="stylesheet">
    <link href="../plugins/Icons/et-line-font/style.css" rel="stylesheet">
    <link href="../plugins/animate.css/animate.css" rel="stylesheet">
    <link href="../css/coopter.css" rel="stylesheet">
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
                     <a class="navbar-brand" href="Accueil.php"><img src="../img/logo/logo.png" class="img-responsive" alt="logo"></a>
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
        <div id="owl-hero" class="owl-carousel owl-theme">
            
        </style>
            <div class="item">
                <div class="caption">
                    <div id="lol" class="col-md-6 col-md-offset-3 wow fadeInUp" data-wow-delay=".3s">
            <div id="contact">
                <h2>Cooptez !</h2>
                        <hr class="sep">
            <form method="post" enctype="multipart/form-data" action="#oModal" >
                    <div>
                        <div class="col-lg-6">
                   <div class="form-group">
                       <label for="Nom"><strong>Nom :</strong></label>
                     <input type="text" class="form-control" id="Nom" placeholder="Nom" name="Nom" required>
                 </div>
                 </div>
                 <div class="col-lg-6">
                 <div class="form-group">
                      <label for="Prenom"><strong>Prenom :</strong></label>
                     <input type="text" class="form-control" id="Prenom" placeholder="Prenom" name="Prenom" required>
                 </div>
                 </div>
                 <div class="form-group">
                       <label for="Pourquoi"><strong>Pourquoi recommander cette personne ?</strong></label>
                     <input type="text" class="form-control" id="Pourquoi" placeholder="Pourquoi ?" name="Pourquoi" required>
                   </div>
                 <div>
                     <div class="form-group">
                      <label for="Poste"><strong>Metier/Poste</strong></label>
                     <input type="text" class="form-control" id="Poste" placeholder="Poste" name="Poste" required>
                 </div>
                  <div class="form-group">
                      <label for="Societe"><strong>Quelle est sa société d'origine ou son ecole d'origine (jeune diplomé) ?</strong></label>
                     <input type="text" class="form-control" id="Societe" placeholder="Societe ou Ecole" name="Societe" required>
                 </div>
                 <div class="col-lg-6">
                     <div class="form-group">
                    <label for="Photo"><strong>Met sa photo :</strong>
                      <input type="file" name="Photo"></label>
                   </div>
                   </div>
                   <div class="col-lg-6">
                   <div class="form-group">
                    <label for="Cv"><strong>Met son CV :</strong>
                      <input type="file" name="Cv" required></label>
                   </div>
                 </div>
                 </div>
                 <?php
                        //Cooptation
                        $bdd = mysqli_connect('127.0.0.1','user','mypass','Extia_Coop');
                                //Upload de la photo
                                if (isset($_POST['submit']))
                                {
                                if (isset($_FILES['Photo']['name']) && !empty($_FILES['Photo']['name']))
                                  {
                                    $Nomphoto = mysqli_real_escape_string($bdd, $_FILES['Photo']['name']);
                                    $Nomphoto = date("YmdHis").$Nomphoto;
                                    $Nom = addcslashes($Nomphoto, '%_');
                                    $taille_max = 2097152;
                                    $taille = filesize($_FILES['Photo']['tmp_name']);
                                    $extensions = array('.jpg', '.jpeg', '.png');
                                    $extensionok = strrchr($Nomphoto, '.');
                                    if (!in_array($extensionok, $extensions))
                                        {
                                           echo "La photo n'a pas l'extension attendue.</br>";
                                           $Nomphoto = null;
                                        }
                                    else if ($taille_max < $taille)
                                        {
                                            echo "Votre photo est trop volumineuse.</br>";
                                            $Nomphoto = null;
                                        }
                                    else
                                        {
                                            $Nomphoto = preg_replace('/([^.a-z0-9]+)/i', '-', $Nomphoto);
                                            move_uploaded_file($_FILES['Photo']['tmp_name'],"../upload/photo_coopte/".$Nomphoto);
                                        }
                                  }
                                else
                                  $Nomphoto = "photoprofil.jpg";
                                //Upload du CV
                                
                                $Nomphoto1 = mysqli_real_escape_string($bdd, $_FILES['Cv']['name']);
                                $Nomphoto1 =  date("YmdHis").$Nomphoto1;
                                $Nom1 = addcslashes($Nomphoto1, '%_');
                                $taille_max1 = 2097152;
                                $taille1 = filesize($_FILES['Cv']['tmp_name']);
                                $extensions1 = array('.jpg', '.pdf', '.png');
                                $extensionok1 = strrchr($Nomphoto1, '.');
                                if (!in_array($extensionok1, $extensions1))
                                    {
                                       echo "Le CV n'a pas l'extension attendue.</br>";
                                       $Nomphoto1 = null;
                                    }
                                else if ($taille_max1 < $taille1)
                                    {
                                        echo "Votre CV est trop volumineux.</br>";
                                        $Nomphoto1 = null;
                                    }
                                else
                                    {
                                        $Nomphoto1 = preg_replace('/([^.a-z0-9]+)/i', '-', $Nomphoto1);
                                        move_uploaded_file($_FILES['Cv']['tmp_name'],"../upload/cv_coopte/".$Nomphoto1);
                                    }
                            }
                        //On assigne des variables à chaques données pour les traiter
                        $nom = $_POST['Nom'];
                        $prenom = $_POST['Prenom'];
                        $poste = $_POST['Poste'];
                        $pourquoi = $_POST['Pourquoi'];
                        $societe = $_POST['Societe'];

                        //On se protège ensuite des injections SQL
                        $nom = mysqli_real_escape_string($bdd, $nom);
                        $prenom = mysqli_real_escape_string($bdd, $prenom);
                        $poste = mysqli_real_escape_string($bdd, $poste);
                        $pourquoi = mysqli_real_escape_string($bdd, $pourquoi);
                        $societe = mysqli_real_escape_string($bdd, $societe);
                        
                        $nom = addcslashes($nom, '%_');
                        $prenom = addcslashes($prenom, '%_');
                        $poste = addcslashes($poste, '%_');
                        $pourquoi = addcslashes($pourquoi, '%_');
                        $societe = addcslashes($societe, '%');
                        
                        if (isset($nom) && !empty($nom) && isset($prenom) && !empty($prenom) && !empty($poste) 
                        && isset($poste) && isset($pourquoi) && !empty($pourquoi) 
                        && isset($societe) && !empty($societe) && isset($Nomphoto)
                        && !empty($Nomphoto) && isset($Nomphoto1) && !empty($Nomphoto1))
                            {   
                                $query = 'INSERT INTO `Coopte` (`Photo`,`CV`,`Nom`,`Prenom`,`Origine`,`Pourquoi`,`Metier`,`Statut`,`RH`,`ID_Cooptant`,`Date_Creation`,`Date_Modification`)
                                VALUES ("'.$Nomphoto.'","'.$Nomphoto1.'","'.$nom.'","'.$prenom.'","'.$societe.'","'.$pourquoi.'","'.$poste.'","En attente","'.$_SESSION['RH'].'","'.$_SESSION['id'].'",'.date('Ymd').','.date('Ymd').')';
                                mysqli_query($bdd, $query);
                                echo '<div id="oModal" class="oModal">
                                                    <div>
                                                        <header>
                                                          <a href="#fermer" title="Fermer la fenêtre" class="droite">X</a>
                                                         </header>
                                                         <section>
                                                          <p>Votre demande de cooptation a bien été prise en compte.</p>
                                                         <section>
                                                         
                                                      </div>
                                                    </div>';
                            }
                        else if (empty($nom) || empty($prenom) || empty($mail) || empty($agence) 
                        || empty($RH) || empty($mdp2) || empty($login) || empty($mdp) || empty($Nomphoto))
                            {
                                echo '<div id="oModal" class="oModal">
                                                    <div>
                                                        <header>
                                                          <a href="#fermer" title="Fermer la fenêtre" class="droite">X</a>
                                                         </header>
                                                         <section>
                                                          <p>Attention tous les champs sont obligatoires !</p>
                                                         <section>
                                                         
                                                      </div>
                                                    </div>
';
                            }
                        else
                            echo '<div id="oModal" class="oModal">
                                                    <div>
                                                        <header>
                                                          <a href="#fermer" title="Fermer la fenêtre" class="droite">X</a>
                                                         </header>
                                                         <section>
                                                          <p>Les informations fournies ne permettent pas la cooptation.</p>
                                                         <section>
                                                         
                                                      </div>
                                                    </div>';
                    ?>
                    <input type="submit" name="submit" class="btn-block" value="Coopter"/>
               </form>
           </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
    <div class="container">
            <h1>Extia</h1>
            <div class="social">
                <a href="https://fr-fr.facebook.com/talentextia/"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/extia_conseil"><i class="fa fa-twitter"></i></a>
                <a href="https://www.linkedin.com/company/extia">IN</a>
            </div>
            <h6>&copy; 2015 Extia Cooptation By Etna</h6>
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