<?php
//Connexion
           $bdd = mysqli_connect("localhost", "root", "helloworld77", "EliqCig_chaboc_t");
           $login = mysqli_real_escape_string($bdd, $_POST['Login']);
           $mdp = mysqli_real_escape_string($bdd, $_POST['Mdp']);
           $mdp = addcslashes($mdp, '%_');
           $query = 'SELECT Login, Mdp, Role FROM Utilisateur WHERE Pseudo = "'.$login.'" AND Mdp = "'.$mdp.'"';
           if (isset($_POST['Login']) && isset($_POST['Mdp']))
             {
               $sqlq = mysqli_query($bdd, $query);
               var_dump($sqlq);
               if (mysqli_query($bdd, $query) != false && mysqli_num_rows($sqlq) == 1)
                 {
                   session_start();
                   $_SESSION['user'] = $_POST['Prenom'];
                   $_SESSION['Role'] = "";
                   echo "Bonjour ".$_POST['Login']." vous etes connectes.";
                 }
               else
                   echo "Vos identifiants sont incorrectes.";
             }
            if (!isset($_SESSION['user']) && empty($_SESSION['user']))
            {
              echo "<form action=\"untitled.php\" method=\"post\">
                    <input type=\"text\" placeholder=\"Login\" name=\"Login\" required>
                    <br>
                    <input type=\"password\" placeholder=\"Password\" name=\"Mdp\" required>
                    <br>
                    <input id =\"connect\" type=\"submit\" value=\"Se connecter\"/>
                    </form>";
            }
            else
            {
              echo "</br><a id=\"connect\" href=\"html/html/logout.php\">Se deconnecter</a>";
            }
?>