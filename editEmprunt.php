<?php
include 'db.php';
$q = $connexion->query("SELECT * FROM emprunt WHERE code='" . $_GET["id"] . "'");

while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
    $nom = $row['nom'];
    $description = $row['description'];
}

if (isset($_POST['update'])) {

    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $r = "UPDATE emprunt SET nom='$nom',description='$description' WHERE code= '" . $_GET["id"] . "'";
    $connexion->exec($r);

    if ($r) {
        $success = "Emprunt modifié avec succès...";
        header('Location: liste.emprunt.php?success=1');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Emprunt</title>
</head>

<body>
    <?php include 'navbar.php' ?>

    <?php if (isset($_GET['success']) && $_GET['success'] == 1) { ?>
        <div class='alert alert-success corner-radius container'>
            <p>Emprunt ajouté avec succés</p>
        </div>
    <?php unset($_GET['success']);
    } ?>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header bg-success text-white">
                Gestion Emprunt
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Nom:</label>
                        <input type="text" name="nom" id="" class="form-control" value="<?php echo $nom; ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Description:</label>
                        <input type="text" name="description" id="" class="form-control" value="<?php echo $description; ?>">
                    </div>

                    <input type="submit" class="btn btn-primary" value="Enregistrer" name="update">
                </form>
            </div>
        </div>
    </div>

</body>

</html>