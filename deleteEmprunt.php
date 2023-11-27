<?php

include 'db.php';

$r = "DELETE FROM emprunt WHERE code = '" . $_GET["id"] . "'";
$connexion->query($r);
echo $r;
if ($r) {
    $location = $_SERVER['HTTP_REFERER'];
    header('Location:liste.emprunt.php?delete=1');
}
