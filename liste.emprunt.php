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

    <?php if (isset($_GET['delete']) && $_GET['delete'] == 1) { ?>
        <div class='alert alert-danger corner-radius container mt-4'>
            <p>emprunt supprimé avec succés</p>
        </div>
    <?php unset($_GET['delete']);
    } ?>

    <?php if (isset($_GET['success']) && $_GET['success'] == 1) { ?>
        <div class='alert alert-success corner-radius container mt-4'>
            <p>emprunt modifié avec succés</p>
        </div>
    <?php unset($_GET['success']);
    } ?>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header bg-success text-white">
                Liste emprunt
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>Nom</th>
                        <th>description</th>
                        <td>Action</td>
                    </tr>
                    <tr>
                        <?php
                        include 'db.php';
                        $stmt = $connexion->query("SELECT * FROM emprunt");
                        while ($row = $stmt->fetch()) { ?>
                    <tr>
                        <td><?php echo $row["nom"]; ?></td>
                        <td><?php echo $row["description"]; ?></td>
                        <td><a class="btn btn-warning" href="editEmprunt.php?id=<?php echo $row['code']; ?>">
                                Modifier</a>
                            <a class="btn btn-danger" href="deleteEmprunt.php?id=<?php echo $row['code']; ?>" onclick="return confirm('Vous êtes sur le point de supprimer , vous voulez vraiment supprimer');">Supprimer</a>
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