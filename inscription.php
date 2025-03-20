<?php
        if(isset($_POST['lastname'])) {
        echo 'Merci pour votre inscription Mr ' . $_POST['lastname'] ;
        echo 'ID de la reservation : #' . rand(1000000, 9999999);
    }
?>