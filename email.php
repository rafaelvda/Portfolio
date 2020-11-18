<?php
if (isset($_POST['message'])) {
    $position_arobase = strpos($_POST['email'], '@');
    if ($position_arobase === false)
        echo '<p>Votre email doit comporter un arobase.</p>';
    else {
        $retour = mail('raf.videiramico@gmail.com', 'Contact Portfolio', $_POST['message'], 'From: ' . $_POST['email']);
        /*if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
        else
            echo '<p>Erreur.</p>';*/
    }
}
