<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="../img/sliders/logomini.png">
    <title>Modification du profil</title>

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
    <link href="../css/main.css" rel="stylesheet">
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
                <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
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
                </div>
            </div>
        </nav>
        </section>
            <?php
            $bdd = mysqli_connect('127.0.0.1','user','mypass','Extia_Coop');
            $res = mysqli_query($bdd, 'SELECT * FROM Utilisateur WHERE "'.$_SESSION['user'].'" = Login AND ID = '.$_SESSION['id'].'');
            $donnees = mysqli_fetch_assoc($res);
            $donnees['Nom'] = utf8_encode($donnees['Nom']);
            $donnees['Prenom'] = utf8_encode($donnees['Prenom']);
                        echo '<br><br><section id="team">
                                    <div class="container">
                                     <h2>Home Page</h2>
                                                <hr class="sep">
                                                <p>Profil</p>
                                                <div class="row wow fadeInUp" data-wow-delay=".3s">
                                                    <div class="col-md-4">
                                                        <div class="team">
                                                        <form method="post" enc="multipart/form-data">
                                                            <img class="img-responsive center-block" src="../upload/photo_cooptant/'.$donnees['Photo'].'" alt="1">
                                                            <p>Modifier la photo :<input type="file" name="Photo"></p>
                                                            <h4>Nom : <input type="text" value="'.$donnees['Nom'].'" name="Nom" required> Prénom : <input type="text" name="Prenom" value="'.$donnees['Prenom'].'" required></h4>
                                                            <p>Mail : <input type="email" value="'.$donnees['Mail'].'" name="Mail" required></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="team">
                                                            <h3><div class="form-group">
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
                                                             </div></h3>
                                                            <h3>Login : <input type="text" name="Login" value="'.$donnees['Login'].'" required></h3>
                                                            <h3>Mot de Passe : <input type="password" name="Mdp" value="'.$donnees['Mdp'].'" required></h3>
                                                            <h3>Confirmation : <input type="password" name="Mdp2" required></h3>
                                                            <br><br><br>';
                            ?>
                            <?php                                
                            if (isset($_POST['submit']))
                              {
                                echo"<script type='text/javascript'>document.location.replace('Accueil_Coopt.php');</script>";
                              }
                              else if (isset($_POST['submit']))
                              {
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
                                if (!empty($_FILES['Photo']['name']) && isset($_FILES['Photo']['name']))
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
                                           echo $Nomphoto;
                                           echo $_FILES['Photo']['name'];
                                        }
                                    if ($taille_max < $taille)
                                        {
                                            echo "Votre photo est trop volumineuse.<br>";
                                            $Nomphoto = null;
                                        }
                                    else if (mysqli_query($bdd, 'SELECT Login FROM Utilisateur WHERE Login = "'.$login.'" AND ID != "'.$_SESSION['id'].'"') == false && $mdp == $mdp2)
                                        {
                                            $Nomphoto = preg_replace('/([^.a-z0-9]+)/i', '-', $Nomphoto);
                                            move_uploaded_file($_FILES['Photo']['tmp_name'],"../upload/photo_cooptant/".$Nomphoto);
                                        }
                                }
                                if (isset($nom) && !empty($nom) && isset($prenom) && !empty($prenom) 
                                && !empty($mail) && isset($mail) && isset($RH) && !empty($RH) && isset($mdp) 
                                && !empty($mdp) && isset($login) && !empty($login) 
                                && isset($mdp2) && !empty($mdp2))
                                    {
                                        $conflog = mysqli_query($bdd, 'SELECT Login FROM Utilisateur WHERE Login = "'.$login.'" AND ID != '.$_SESSION['id'].'');
                                        $confmail = mysqli_query($bdd, 'SELECT Mail FROM Utilisateur WHERE Mail = "'.$mail.'" AND ID != '.$_SESSION['id'].'');
                                            if ($conflog != false && mysqli_num_rows($conflog) == 0 && $confmail != false && mysqli_num_rows($confmail) == 0)
                                                {
                                                    if ($mdp === $mdp2)
                                                        {
                                                            $query = 'UPDATE `Utilisateur`
                                                                      SET Photo="'.$Nomphoto.'", Nom="'.$nom.'", Prenom="'.$prenom.'", Mail="'.$mail.'", RH="'.$RH.'", Login="'.$login.'", Mdp="'.$mdp.'", Date_Modification='.date('Ymd').'
                                                                      WHERE ID = '.$_SESSION['id'].'';
                                                            mysqli_query($bdd, $query);
                                                            $_SESSION['user'] = $login;
                                                            $_SESSION['Prenom'] = $prenom;
                                                            $_SESSION['Nom'] = $nom;
                                                            $_SESSION['Mail'] = $mail;
                                                            $_SESSION['RH'] = $RH;
                                                            echo "Votre profil a bien été modifié :D</br>";
                                                            echo "<script type='text/javascript'>setTimeout(function(){document.location.replace('Accueil_Coopt.php');}, 2000);</script>";
                                                        }
                                                    else
                                                        {
                                                            echo "Les 2 mots de passes ne sont pas identiques ! :(";
                                                        }
                                                }
                                            else
                                                {
                                                    echo "Le login et/ou l'email saisi sont indisponibles :(";
                                                }
                                    }
                                else if (empty($nom) || empty($prenom) || empty($mail) || empty($RH) || empty($mdp2) || empty($login) || empty($mdp))
                                    {
                                        echo "Attention tous les champs sont obligatoires ! ;)";
                                    }
                                else
                                    echo 'Les informations fournies ne vous permettent pas de modifier votre profil.';
                              }
                     ?>
                                                            <input type="submit" value="Modifier le profil" name="submit"></form>
                                                            <a href="Accueil_Coopt.php"><button>Annuler</button></a>
                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                              </section><br><br><br><br><br>
                    
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