<?php
session_start();
/* Remplacer votre_adresse@mail.net par votre adresse mail
   Remplacer www.votre_domaine.net par votre nom de domaine */

$adresse = "christelle.webdev@gmail.com";
$site = "www.if3projets.net/wad15/christelle";
$nom = $_POST['nom'];
$societe = $_POST['societe'];
$email = $_POST['mail'];
$message = $_POST['message'];

$TO = $adresse;
$head = "From: ".$adresse."\n";
$head .= "X-Sender: <".$adresse.">\n";
$head .= "X-Mailer: PHP\n";
$head .= "Return-Path: <".$adresse.">\n";
$head .= "Content-Type: text/plain; charset=iso-8859-1\n";
$sujet = "Formulaire de contact Site CV";
$informations = "
Nom: ".$_POST['nom']." \r\n
Société: ".$_POST['societe']." \r\n
Email: ".$_POST['mail']."\r\n
Message: ".$_POST['message']." \r\n
";


$res = mail($TO, $sujet ,$informations, $head);
$_SESSION['resultat'] = $res;

if ($res == true)
{
	$_SESSION['mail'] = true;
	Header("Location: http://".$site."/index.php#sect-Contact");
}

else{
	$_SESSION['mail'] = false;
	Header("Location: http://".$site."/index.php#sect-Contact" );
}

?>



