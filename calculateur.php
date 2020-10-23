<?php

if (isset($_GET['multi1'])){
    $mtp1 = $_GET['multi1'];
    $mtp2 = $_GET['multi2'];

    if (isset($mtp1, $mtp2)){
        $result = ($mtp1 * $mtp2);
    } else {
        echo "Le calcul n'est pas possible";
    }

    if ($result === 0){
        $result = "";
    }
}

?>

<!DOCTYPE html>
<html lang="FR-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calcul</title>
</head>

<body>
<div class="container mt-5">
    <div class="card border-0 rounded-lg">
        <div class="card-body bg-light shadow-lg rounded-lg">
            <h1> <?= $result; ?></h1>
            <form method="GET" action="calculateur.php" >
                <select class="custom-select" name="multi1">
                    <?php
                    $i = -1;
                    while ($i < 10) :
                        echo $i++;
                        ?>
                        <option><?= $i?></option>

                    <?php endwhile; ?>
                </select>
                <p>X</p>
                <select class="custom-select" name="multi2">
                    <?php
                    $i = -1;
                    while ($i < 10) :
                        echo $i++;
                        ?>
                        <option><?= $i ?></option>

                    <?php endwhile; ?>
                </select>
                <input class="btn btn-primary" type="submit">
            </form>
        </div>
    </div>
</div>

<br

</body>

</html>