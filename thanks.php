<?php

echo 'Merci ' . $_POST['user_firstname'] . ' ' . $_POST['user_name'] . ' ' . 'de nous avoir contacté à propos de ' . $_POST['Languages'] . '<br>' . 'Un de nos conseillers vous contactera soit à l\'adresse' . ' ' . $_POST['user_email'] . ' ' . 'ou par téléphone au ' . $_POST['phone_number'] . ' ' . 'dans les plus brefs délais pour traiter votre demande' . '<br>' . $_POST['user_message'];