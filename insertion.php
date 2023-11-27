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
        <div class='alert alert-success corner-radius container mt-3'>
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
                <form action="adherant.php" method="post">
                    <div class="form-group">
                        <label for="">Nom:</label>
                        <input type="text" name="nom" id="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Prenom:</label>
                        <input type="text" name="prenom" id="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Genre:</label>
                        <select name="genre" id="" class="form-control">
                            <option value="masculin">Masculin</option>
                            <option value="feminin">Feminin</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Date Naissance:</label>
                        <input type="date" name="datenaiss" id="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Cotisation:</label>
                        <input type="number" name="cotisation" id="" class="form-control">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Enregistrer" name="save">
                </form>
            </div>
        </div>
    </div>

</body>

</html>