<?php
include 'db.php';
$q = $connexion->query("SELECT * FROM adherant WHERE id='" . $_GET["id"] . "'");

while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
    $nom = $row['nom'];
    $prenom = $row['prenom'];
    $genre = $row['genre'];
    $datenaiss = $row['datenaiss'];
    $cotisation = $row['cotisation'];
}

if (isset($_POST['update'])) {

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $genre = $_POST['genre'];
    $datenaiss = $_POST['datenaiss'];
    $cotisation = $_POST['cotisation'];



    $r = "UPDATE adherant SET nom='$nom',prenom='$prenom',genre='$genre',datenaiss='$datenaiss',cotisation='$cotisation' WHERE id= '" . $_GET["id"] . "'";
    $connexion->exec($r);

    if ($r) {
        $success = "Adherant modifié avec succès...";
        header('Location: liste_adherant.php?success=1');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Adherant</title>
</head>

<body>
    <?php include 'navbar.php' ?>

    <?php if (isset($_GET['success']) && $_GET['success'] == 1) { ?>
        <div class='alert alert-success corner-radius container'>
            <p>Adherant ajouté avec succés</p>
        </div>
    <?php unset($_GET['success']);
    } ?>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header bg-success text-white">
                Gestion Adherant
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Nom:</label>
                        <input type="text" name="nom" id="" class="form-control" value="<?php echo $nom; ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Prenom:</label>
                        <input type="text" name="prenom" id="" class="form-control" value="<?php echo $prenom; ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Genre:</label>
                        <select name="genre" id="" class="form-control" value="<?php echo $genre; ?>">
                            <option value="masculin">Masculin</option>
                            <option value="feminin">Feminin</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Date Naissance:</label>
                        <input type="date" name="datenaiss" id="" class="form-control" value="<?php echo $datenaiss; ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Cotisation:</label>
                        <input type="number" name="cotisation" id="" class="form-control" value="<?php echo $cotisation; ?>">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Enregistrer" name="update">
                </form>
            </div>
        </div>
    </div>

</body>

</html>