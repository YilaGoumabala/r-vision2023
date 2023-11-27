<?php
if (isset($_POST['save'])) {
    include 'db.php';
    $id = $_POST['id'];
    $idEmprunt = $_POST['idEmprunt'];
    $idAdherant = $_POST['idAdherant'];
    $dateDebut = $_POST['dateDebut'];
    $dateFin = $_POST['dateFin'];


    $r = "INSERT INTO effectuer (idEmprunt,idAdherant,dateDebut,dateFin) 
        values ('$idEmprunt','$idAdherant','$dateDebut','$dateFin')";
    $connexion->exec($r);

    $location = $_SERVER['HTTP_REFERER'];
    if ($r) {
        header('Location:Frm_effectuer.php?success=1');
    }
}
