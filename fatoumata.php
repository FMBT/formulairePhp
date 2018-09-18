<?php 
echo $_POST['sexe']."<br>";
echo $_POST['prenom']."<br>";
echo $_POST['nom']."<br>";
echo $_POST['email']."<br>";
echo $_POST['sport']."<br>";

$message=$_POST['sexe'].$_POST['nom'].$_POST['prenom'].$_POST['email'].$_POST['presentation'];
$mailler='fatoumata.t@codeur.online';
$object="message";
$entete="Content-type:text/html;charset=iso-8859-1";

	if (mail($mailler,$object,$message,$entete))
	 {
		echo "<h1> vous allez recevoir un mail de confirmation </h1>";
	}

?>