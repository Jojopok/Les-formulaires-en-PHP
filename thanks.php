<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST['user_name'];
    $prenom = $_POST['prenom'];
    $phone = $_POST['phone'];
    $sujet = $_POST['sujet'];
    $user_email = $_POST['user_email'];
    $user_message = $_POST['user_message'];

    if (
        empty($user_name) || empty($prenom) || empty($phone) ||
        empty($sujet) || empty($user_email) || empty($user_message) ||
        !isset($user_name) || !isset($prenom) || !isset($phone) ||
        !isset($sujet) || !isset($user_email) || !isset($user_message)
    ) {
        $message = "Il manque des information !";
    } else {
        if (!filter_var($user_email)) {
            $message = "L'adresse e-mail n'est pas au format attendu.";
        } else {
            $message = "Merci $prenom $user_name de nous avoir contacté à propos de $sujet. Un de nos conseillers vous contactera soit à l’adresse $user_email ou par téléphone au $phone dans les plus brefs délais pour traiter votre demande : $user_message";
        }
    }
} else {
    $message = "Il manque des information !";
}

echo $message;
?>