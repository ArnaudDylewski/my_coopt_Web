<?php
$action = $_GET['action'];

if($action == "accepter")

{

$id = $_GET['id'];

$quete2 = mysql_query("SELECT * FROM validation WHERE id='$id'");

$connexion = mysql_fetch_array($quete2);

$pseudo = $connexion['pseudo'];

$passe = $connexion['passe'];

$email = $connexion['email'];

mysql_query("INSERT INTO connexion VALUES('$id', '$pseudo', '$passe', '$email')");

mysql_query("DELETE FROM validation WHERE id='$id'");

?>