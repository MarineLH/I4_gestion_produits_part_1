<?php
    session_start();
    include 'connect.php';
    include 'fonctions.php';
    secu();
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion des produits</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="fonctions.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Gestion des produits</h1>
        
        <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th class="text-center">Num.</th>
                    <th>Libellé</th>
                    <th class="text-right">Prix</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM produits ORDER BY PRO_lib ASC";
                    $res = mysqli_query($link, $sql);
                    while ($produit = mysqli_fetch_assoc($res)) {
                        $prix = number_format($produit['PRO_prix'], 2, ',', ' ');
                        
                        echo '<tr onClick="goto(\'produit.php?id='.$produit['PRO_id'].'\')">';
                        echo "<td class=\"text-center\">".$produit['PRO_id']."</td>";
                        echo "<td>".$produit['PRO_lib']."</td>";
                        echo "<td class=\"text-right\">".$prix."&nbsp;€</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>

        <div class="form-group">
                <button type="button" class="btn btn-primary" onClick="goto('form_produit.php')">Ajouter un produit</button>
                <button type="button" class="btn btn-danger" onClick="goto('deco.php')">Se déconnecter</button>
        </div>

    </div>
</body>
</html>