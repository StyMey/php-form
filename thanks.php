<?php
if ($erreur = false);
    echo 'Merci ' . $_POST['user_firstname'] . ' ' . $_POST['user_name'] . ' ' . 'de nous avoir contacté à propos de ' . $_POST['Langages'] . '<br>' . 'Un de nos conseillers vous contactera soit à l\'adresse' . ' ' . $_POST['user_email'] . ' ' . 'ou par téléphone au ' . $_POST['phone_number'] . ' ' . 'dans les plus brefs délais pour traiter votre demande' . '<br>' . $_POST['user_message'];

if ($erreur = true);
    echo 'Tous les champs ne sont pas rempli';