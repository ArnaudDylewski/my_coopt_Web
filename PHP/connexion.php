<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="../img/sliders/logomini.png">
    <title>Connexion</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- Bootstrap Css -->
    <link href="../bootstrap-assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/sliders/logomini.png">
    <!-- Style -->
    <link href="../plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="../plugins/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="../plugins/Lightbox/dist/css/lightbox.css" rel="stylesheet">
    <link href="../plugins/Icons/et-line-font/style.css" rel="stylesheet">
    <link href="../plugins/animate.css/animate.css" rel="stylesheet">
    <link href="../css/connexion.css" rel="stylesheet">
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
            
        </style>
            <div class="item">
                <div class="caption">
                    <div id="lol" class="col-md-6 col-md-offset-3 wow fadeInUp" data-wow-delay=".3s">
            <div id="contact">
                <h2>Connexion</h2>
                        <hr class="sep">
                        <?php
                           $bdd = mysqli_connect("127.0.0.1", "user", "mypass", "Extia_Coop");
                           $login = mysqli_real_escape_string($bdd, $_POST['Login']);
                           $mdp = mysqli_real_escape_string($bdd, $_POST['Mdp']);
                           $mdp = addcslashes($mdp, '%_');
                           $query = 'SELECT * FROM Utilisateur WHERE Login = "'.$login.'" AND Mdp = "'.$mdp.'"';
                           if (isset($_POST['Login']) && isset($_POST['Mdp']))
                             {
                               $sqlq = mysqli_query($bdd, $query);
                               
                               if (mysqli_query($bdd, $query) != false && mysqli_num_rows($sqlq) == 1)
                                 {
                                   session_start();
                                   $donnees = mysqli_fetch_assoc($sqlq);
                                   $_SESSION['user'] = $_POST['Login'];
                                   $_SESSION['id'] = $donnees['ID'];
                                   $_SESSION['Prenom'] = $donnees['Prenom'];
                                   $_SESSION['Nom'] = $donnees['Nom'];
                                   $_SESSION['Mail'] = $donnees['Mail'];
                                   $_SESSION['RH'] = $donnees['RH'];
                                   $_SESSION['Agence'] = $donnees['Agence'];
                                   $_SESSION['Role'] = $donnees['Role'];
                                   echo "Bonjour ".$_POST['Login']." vous êtes connectés.";
                                   echo "<script type='text/javascript'>setTimeout(function(){document.location.replace('Accueil_Coopt.php');}, 2000);</script>";
                                 }
                               else
                                   echo "Vos identifiants sont incorrectes.";
                             }
                            if (!isset($_SESSION['user']) && empty($_SESSION['user']))
                            {
                              echo '<form action="connexion.php" method="post">
                                    <div id="co">
                                    <div class="form-group">
                                    <input type="text" placeholder="Login" class="form-control" name="Login" required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="Mdp" required>
                                    </div>
                                    <br>
                                    </div>
                                    <input class="btn-block" id ="connect" type="submit" value="Se connecter"/>
                                    </form>';
                            }
                            else
                            {
                              echo '</br><a id="connect" href="logout.php">Se deconnecter</a>';
                            }
                        ?>
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