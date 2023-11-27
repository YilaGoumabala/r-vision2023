<?php
if (isset($_POST['save'])) {
    include 'db.php';

    $nom = $_POST['nom'];
    $description = $_POST['description'];

    $r = "INSERT INTO emprunt (nom,description) 
        values ('$nom','$description')";
    $connexion->exec($r);

    $location = $_SERVER['HTTP_REFERER'];
    if ($r) {
        $success = "emprunt  avec succès...";
        header('Location:liste.emprunt.php?success=1');
    }
}
