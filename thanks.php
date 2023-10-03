<?php


$user_name = $_POST['user_name'];
$prenom = $_POST['prenom'];
$phone = $_POST['phone'];
$sujet = $_POST['sujet'];
$user_email = $_POST['user_email'];
$user_message = $_POST['user_message'];

$message = "Merci $prenom $user_name de nous avoir contacté à propos de $sujet.

Un de nos conseillers vous contactera soit à l’adresse $user_email ou par téléphone au $phone dans les plus brefs délais pour traiter votre demande :

$user_message";

echo $message;

?>