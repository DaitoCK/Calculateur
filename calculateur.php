<?php

if (isset($_GET['multi1'])){
    $mtp1 = $_GET['multi1'];
    $mtp2 = $_GET['multi2'];

    $result = ($mtp1 * $mtp2);


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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
          crossorigin="anonymous">
    <title>Calcul</title>
</head>

<body>
<div class="container mt-5">
    <div class="card border-0 rounded-lg">
        <div class="card-body bg-light shadow-lg rounded-lg">
            <?php if(isset($result)):?>
                <h1><?= $result ?></h1>
            <?php endif; ?>
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