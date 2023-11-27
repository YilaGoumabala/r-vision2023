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
        <div class='alert alert-success corner-radius container mt-3'>
            <p>Emprunt ajouté avec succés</p>
        </div>
    <?php unset($_GET['success']);
    } ?>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header bg-success text-white">
                Gestion Effectuer
            </div>
            <div class="card-body">
                <form action="effectuer.php" method="post">

                    <div class="form-group">
                        <label for="">Selectionner l'adherant</label>
                        <select name="idAdherant" id="" class="form-control">
                            <?php
                            include 'db.php';
                            $stmt = $connexion->query("SELECT * FROM adherant");
                            while ($row = $stmt->fetch()) { ?>
                                <option value="<?php echo $row["id"]; ?>">
                                    <?php echo $row['nom']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>



                    <div class="form-group">
                        <label for="">Selectionner l'Emprunt</label>
                        <select name="idEmprunt" id="" class="form-control">
                            <?php
                            include 'db.php';
                            $stmt = $connexion->query("SELECT * FROM emprunt");
                            while ($row = $stmt->fetch()) { ?>
                                <option value="<?php echo $row["code"]; ?>">
                                    <?php echo $row['nom']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Date début:</label>
                        <input type="date" name="dateDebut" id="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Date fin:</label>
                        <input type="date" name="dateFin" id="" class="form-control">
                    </div>

                    <input type="submit" class="btn btn-primary" value="Enregistrer" name="save">
                </form>
            </div>
        </div>
    </div>

</body>

</html>