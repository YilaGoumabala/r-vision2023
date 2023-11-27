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

    <?php if (isset($_GET['delete']) && $_GET['delete'] == 1) { ?>
        <div class='alert alert-danger corner-radius container mt-4'>
            <p>Adherant supprimé avec succés</p>
        </div>
    <?php unset($_GET['delete']);
    } ?>

    <?php if (isset($_GET['success']) && $_GET['success'] == 1) { ?>
        <div class='alert alert-success corner-radius container mt-4'>
            <p>Adherant modifié avec succés</p>
        </div>
    <?php unset($_GET['success']);
    } ?>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header bg-success text-white">
                Liste Adherant
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Nom:</th>
                        <th>Prénom</th>
                        <th>Genre</th>
                        <th>Date de Naissance</th>
                        <th>Cotisation</th>
                        <td>Action</td>
                    </tr>
                    <tr>
                        <?php
                        include 'db.php';
                        $stmt = $connexion->query("SELECT * FROM adherant");

                        while ($row = $stmt->fetch()) { ?>

                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["nom"]; ?></td>
                        <td><?php echo $row["prenom"]; ?></td>
                        <td><?php echo $row["genre"]; ?></td>
                        <td><?php echo $row["datenaiss"]; ?></td>
                        <td><?php echo $row["cotisation"]; ?></td>
                        <td><a class="btn btn-warning" href="editAdherant.php?id=<?php echo $row['id']; ?>">
                                Modifier</a></td>
                        <td><a class="btn btn-danger" href="deleteAdherant.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Vous êtes sur le point de supprimer , vous voulez vraiment supprimer');">Supprimer</a>
                        </td>

                    </tr>

                <?php
                        }

                ?>
                </tr>
                </table>
            </div>
        </div>
    </div>

</body>

</html>