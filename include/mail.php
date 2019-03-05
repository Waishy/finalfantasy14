<?php

    $destinataire = 'drunkenchocobmoogle@gmail.com';

    $expediteur = $_POST['mail'];

    $objet = 'Candidature';

    $headers = 'MIME-Version: 1.0 . "\n"; // Version MIME';
    $headers .= 'content-type: text/html; charset=ISO-8859-1 . "\n"; // l\'en-tête Content-type pour le format HTML';

    $message = '
    
    Bonjour je me nomme '.$_POST['Pseudo'].'!
    Je suis sur le monde '.$_POST['Monde'].'!
    J\'ai '.$_POST['age'].'! et je souhaite rejoindre votre CL car je cherche à '.$_POST['activite'].'!
    Je joue '.$_POST['classe'].'! et j\'aime la '.$_POST['biere'].'!

    Voici une petite présentation : 
    '.$_POST['presentation'].'!

    A très bientôt !
    
    ';

    if(mail($destinataire, $objet, $message, $headers)){
        echo '<script language="javascript">alert("Votre message à bien été envoyé");</script>';
    }
    else{
        echo '<script language="javascript">alert("Votre message n\'a pas été envoyé");</script>';
    }
    header('location: ../contact.php');
    ?>