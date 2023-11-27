<?php
if (isset($_POST['save'])) {
    include 'db.php';

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $genre = $_POST['genre'];
    $datenaiss = $_POST['datenaiss'];
    $cotisation = $_POST['cotisation'];

    $r = "INSERT INTO adherant (nom,prenom,genre,datenaiss,cotisation) 
        values ('$nom','$prenom','$genre','$datenaiss','$cotisation')";
    $connexion->exec($r);

    $location = $_SERVER['HTTP_REFERER'];
    if ($r) {
        $success = "Adherant ajouté avec succès...";
        header('Location:insertion.php?success=1');
    }
}
