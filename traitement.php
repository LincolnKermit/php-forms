<?php
if (isset($_POST['lastname']) && isset($_POST['firstname'])) {
    echo 'Merci pour votre inscription Mr ' . htmlspecialchars($_POST['lastname']) . ' ' . htmlspecialchars($_POST['firstname']) . '<br>';
    echo 'ID de la réservation : #' . rand(1000000, 9999999);
} else {
    echo 'Veuillez remplir tous les champs obligatoires.';
}
?>
