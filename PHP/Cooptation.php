<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="img/sliders/logomini.png">
    <title>Cooptation</title>

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
    <link href="../css/cooptation.css" rel="stylesheet">
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
    <?php
    $bdd = mysqli_connect('127.0.0.1','user','mypass','Extia_Coop');
    $resultat = mysqli_query($bdd,'SELECT * FROM Coopte WHERE "'.$_SESSION['id'].'" = ID_Cooptant');
    ?>
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
                            <li><a href="ADMIN_listRH.php" class="page-scroll">Liste RH</a></li>
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
            </br><h2>Coopté</h2>
            <hr class="sep">
            <div class="services-box">
                <div class="row wow fadeInUp" data-wow-delay=".3s">
                    <?php
                    echo '<div class="col-md-18">
                        <div class="media-left"></div>
                            <div class="table-responsive">
                            <table class="table-responsive">
                                <tr>
                                    <th>Photo</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Origine</th>
                                    <th>Metier</th>
                                    <th>Statut</th>
                                    <th>CV</th>
                                </tr>';
                                if (mysqli_num_rows($resultat) == 0)
                                {
                                    echo "<tr><h3>Vous n'avez aucune cooptation<h3><tr>";
                                }
                                while ($donnees = mysqli_fetch_assoc($resultat))
                                {
                                echo '<tr>
                                    <th><img class="img-responsive center-block" src="../upload/photo_coopte/'.$donnees['Photo'].'" alt="1" width="130px" height="130px"></th>
                                    <th>'.$donnees['Nom'].'</th>
                                    <th>'.$donnees['Prenom'].'</th>
                                    <th>'.$donnees['Origine'].'</th>
                                    <th>'.$donnees['Metier'].'</th>
                                    <th>'.$donnees['Statut'].'</th>
                                    <th>
                                        <a href="#oModal" onclick="myFunction()"><input type="submit" /></a>
                                        
                                    </th>
                                    </tr>';
                                }
                                ?>
                            </table>
                        </div>
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
    
    <div id="oModal" class="oModal">
                                          <div>
                                            <header>
                                              <a href="#fermer" title="Fermer la fenêtre" class="droite">X</a>
                                             </header>
                                             <section id="lol">
                                                 <div class="example2">
    <iframe src="../upload/cv_coopte/pdf-test.pdf" width="570" height="600" align="middle"></iframe>
</div>
                                               
                                             </section>
                                             
                                          </div>
                                        </div>
                                         
    
</body>

</html>