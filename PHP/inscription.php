<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="../img/sliders/logomini.png">
    <title>Inscription</title>

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
    <!--<link href="css/main.css" rel="stylesheet">-->
    <link href="../css/inscription.css" rel="stylesheet">
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
                <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                    <div class="col-md-8 col-xs-12 nav-wrap">
                        <ul class="nav navbar-nav">
                            <li><a href="connexion.php" class="page-scroll">Connexion</a></li>
                            <li><a href="inscription.php" class="page-scroll">Inscription</a></li>
                            <li><a href="https://intra.extia.fr/login/" class="page-scroll">Intra</a></li>
                        </ul>
                    </div>
                    <div class="social-media hidden-sm hidden-xs">
                        <ul class="nav navbar-nav">
                            <li><a href="https://fr-fr.facebook.com/talentextia/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/extia_conseil"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/extia">in</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div id="owl-hero" class="owl-carousel owl-theme">
                <div class="item" >
                <div class="caption">
                    <div id="lol" class="col-md-6 col-md-offset-3 wow fadeInUp" data-wow-delay=".3s">
            <div id="contact">
               
                <h2>Inscription</h2>
                        <hr class="sep">
            <form method="post" enctype="multipart/form-data" action="#oModal" >
                
                    <div class="col-lg-6">
                   <div class="form-group">
                       <label for="Nom"><strong>Nom :</strong></label>
                     <input type="text" class="form-control" id="Nom" placeholder="Nom" name="Nom" required>
                 </div>
                  <div class="form-group">
                      <label for="Prenom"><strong>Prenom :</strong></label>
                     <input type="text" class="form-control" id="Prenom" placeholder="Prénom" name="Prenom" required>
                 </div>
                     <div class="form-group">
                      <label for="Mdp2"><strong>Confirmation mot de passe :</strong></label>
                     <input type="password" class="form-control" id="Mdp" placeholder="Confirmation Mot de passe" name="Mdp2" required>
                 </div>
                 </div>
                 <div class="col-lg-6">
                    <div class="form-group">
                       <label for="Email"><strong>Email :</strong></label>
                      <input type="email" class="form-control" id="Email" placeholder="Email" name="Mail" required>
                   </div>
                    <div class="form-group">
                       <label for="Login"><strong>Login :</strong></label>
                      <input type="text" class="form-control" id="Login" placeholder="Login" name="Login" required>
                   </div>
                   <div class="form-group">
                      <label for="Mdp"><strong>Mot de passe :</strong></label>
                     <input type="password" class="form-control" id="Mdp" placeholder="Mot de passe" name="Mdp" required>
                 </div>
                  
                 </div>
                 <div class="form-group">
                      <label for="RH"><strong>Responsable R.H. :</strong></label>
                     <select name="RH" class="form-control" id="RH">
                         <option>CCH</option>
                         <option>ACH</option>
                         <option>ACI</option>
                         <option>CIC</option>
                         <option>LCU</option>
                         <option>CRO</option>
                         <option>PDE</option>
                         <option>EMI</option>
                         <option>MAD</option>
                         <option>JGO</option>
                         <option>CAG</option>
                         <option>AKL</option>
                         <option>CKU</option>
                         <option>CLE</option>
                         <option>AUL</option>
                         <option>CMA</option>
                         <option>LPI</option>
                         <option>LPO</option>
                         <option>PSC</option>
                         <option>JSI</option>
                         <option>MTH</option>
                         <option>ETO</option>
                         <option>LUR</option>
                     </select>
                 </div>
                 <div class="form-group">
                    <label for="Photo"><strong>Inserer votre photo :</strong>
                      <input type="file" name="Photo"></label>
                   </div>
                 <?php
                        //Inscription
                        $bdd = mysqli_connect('127.0.0.1','user','mypass','Extia_Coop');
                        
                        //On assigne des variables à chaques données pour les traiter
                        $nom = $_POST['Nom'];
                        $prenom = $_POST['Prenom'];
                        $mail = $_POST['Mail'];
                        $RH = $_POST['RH'];
                        $mdp = $_POST['Mdp'];
                        $mdp2 = $_POST['Mdp2'];
                        $login = $_POST['Login'];
                        
                        //On se protège ensuite des injections SQL
                        $nom = mysqli_real_escape_string($bdd, $nom);
                        $prenom = mysqli_real_escape_string($bdd, $prenom);
                        $mail = mysqli_real_escape_string($bdd, $mail);
                        $RH = mysqli_real_escape_string($bdd, $RH);
                        $mdp = mysqli_real_escape_string($bdd, $mdp);
                        $mdp2 = mysqli_real_escape_string($bdd, $mdp2);
                        $login = mysqli_real_escape_string($bdd, $login);
                        
                        $nom = addcslashes($nom, '%_');
                        $prenom = addcslashes($prenom, '%_');
                        $mail = addcslashes($mail, '%');
                        $RH = addcslashes($RH, '%_');
                        $mdp = addcslashes($mdp, '%_');
                        $mdp2 = addcslashes($mdp2, '%_');
                        $login = addcslashes($login, '%');
                        
                        //upload de la photo
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
                                       echo "Le fichier n'a pas l'extension attendue.<br>";
                                       $Nomphoto = null;
                                    }
                                if ($taille_max < $taille)
                                    {
                                        echo "Votre photo est trop volumineuse.<br>";
                                        $Nomphoto = null;
                                    }
                                else if (mysqli_query($bdd, 'SELECT Login FROM Utilisateur WHERE Login = "'.$login.'"') != false && $mdp == $mdp2 
                                        && mysqli_query($bdd, 'SELECT Login FROM Utilisateur WHERE Mail = "'.$mail.'"') != false)
                                    {
                                        $Nomphoto = preg_replace('/([^.a-z0-9]+)/i', '-', $Nomphoto);
                                        move_uploaded_file($_FILES['Photo']['tmp_name'],"../upload/photo_cooptant/".$Nomphoto);
                                    }
                              }
                              else
                                $Nomphoto = "photoprofil.jpg";
                        }
                        //Traitement des donnees pour l'inscription
                        if (isset($nom) && !empty($nom) && isset($prenom) && !empty($prenom) 
                        && !empty($mail) && isset($mail) && isset($RH) && !empty($RH) && isset($mdp) 
                        && !empty($mdp)&& isset($mdp2) && !empty($mdp2) && isset($Nomphoto)
                        && !empty($Nomphoto))
                            {
                                $conflog = mysqli_query($bdd, 'SELECT Login FROM Utilisateur WHERE Login = "'.$login.'"');
                                $confmail = mysqli_query($bdd, 'SELECT Mail FROM Utilisateur WHERE Mail = "'.$mail.'"');
                                    if ($conflog != false && mysqli_num_rows($conflog) == 0 && $confmail != false && mysqli_num_rows($confmail) == 0)
                                        {
                                            if ($mdp === $mdp2)
                                                {
                                                    $query = 'INSERT INTO `Utilisateur` (`Photo`,`Nom`,`Prenom`,`Mail`,`RH`,`Login`,`Mdp`,`Role`,`Date_Creation`,`Date_Modification`)
                                                    VALUES ("'.$Nomphoto.'","'.$nom.'","'.$prenom.'","'.$mail.'","'.$RH.'","'.$login.'","'.$mdp.'",1,'.date("YmdHis").','.date("YmdHis").')';
                                                    mysqli_query($bdd, $query);
                                                    echo "Vous êtes bien inscrit :D</br>";
                                                    echo "<script type='text/javascript'>setTimeout(function(){document.location.replace('connexion.php');}, 2000);</script>";
                                                }
                                            else
                                                {
                                                    echo '<div id="oModal" class="oModal">
                                                    <div>
                                                        <header>
                                                          <a href="#fermer" title="Fermer la fenêtre" class="droite">X</a>
                                                         </header>
                                                         <section>
                                                          <p>Les 2 mots de passes ne sont pas identiques !</p>
                                                         <section>
                                                         
                                                      </div>
                                                    </div>
                                                    ';
                                                }
                                        }
                                    else
                                        {
                                            echo ' <div id="oModal" class="oModal">
                                                    <div>
                                                        <header>
                                                          <a href="#fermer" title="Fermer la fenêtre" class="droite">X</a>
                                                         </header>
                                                         <section>
                                                          <p>Le login et/ou l\'email existe(nt) déjà :(</p>
                                                         <section>
        
                                                      </div>
                                                    </div>';
                                        }
                            }
                        else if (empty($nom) || empty($prenom) || empty($mail)
                        || empty($RH) || empty($mdp2) || empty($login) || empty($mdp) || empty($Nomphoto))
                            {
                                echo "Attention tous les champs sont obligatoires ! ;)";
                            }
                        else
                            echo '
                            <div id="oModal" class="oModal">
                                                    <div>
                                                        <header>
                                                          <a href="#fermer" title="Fermer la fenêtre" class="droite">X</a>
                                                         </header>
                                                         <section>
                                                          <p>Les informations fournies ne vous permettent pas de vous inscrire.</p>
                                                         <section>
                                                         <footer class="cf">
                                                         </footer>
                                                      </div>
                                                    </div>';
                    ?>
                    <input type="submit" name="submit" class="btn-block" value="S'inscrire"/>
                    <br/>
                   
                    </div>
                    <!--<a href="#" class="btn-block">Confirmez</a>-->
               </form>
           </div>
           
                </div>
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