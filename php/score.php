<?php
require_once('connect.php');
$pdo =pdo_connect();
$sql = $pdo->prepare('SELECT pseudo, MAX(score) AS must FROM casse_brique GROUP BY pseudo ORDER BY must DESC LIMIT 5');
$sql->execute();
$score = $sql->fetchAll(\PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>

<head>
    <title>casse brique</title>
    <link rel="stylesheet" href="../css/wanted.css" />
    <meta charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>


</head>

<body>


    <div class="d-flex justify-content-center">

        <button class="btn bouton"><a href="../index.php">Jeux</a></button>

        <h1>One-Piece</h1>

        <button class="btn bouton"><a href="php/score.php">Scores</a></button>

    </div>

    <div class="container-fluid d-flex justify-content-center">
        <div class=" row">
            <?php foreach($score as $casse_brique) :?>
            <div class=" col-md-12 col-lg-4 d-flex justify-content-center">
                <div class="pseudo2">
                    <p class="name"><?=$casse_brique['pseudo']?></p>

                    <p><?=$casse_brique['must']?></p>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
</script>

</html>