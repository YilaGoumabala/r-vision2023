<?php

include 'db.php';

$r = "DELETE FROM adherant WHERE id = '" . $_GET["id"] . "'";
$connexion->query($r);
echo $r;
if ($r) {
    $location = $_SERVER['HTTP_REFERER'];
    header('Location:liste_adherant.php?delete=1');
}
