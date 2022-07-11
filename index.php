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
    <link rel="stylesheet" href="style.css" />
    <meta charset="utf-8" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js" integrity="sha512-UXumZrZNiOwnTcZSHLOfcTs0aos2MzBWHXOHOuB0J/R44QB0dwY5JgfbvljXcklVf65Gc4El6RjZ+lnwd2az2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Tapestry&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ruslan+Display&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>

    <h1>Casse-Poutine</h1>

<section>
    <div id='container'>
        <div class="row">
            <canvas id="canvasElem" width="1000" height="490">
                HTML5 not supported !
            </canvas>
        </div>
    </div>
</section>


    <div id="visible2" class="center">
        <form class="center" method="GET">
            <p class="center">Entrer votre pseudo après la partie puis valider pour enregistrer votre score</p>
            <input type="text" id="pseudo" placeholder="Ton Pseudo" name="pseudo" value=""  required="required">
            <input id="submit2" type="submit" value="Valider">

        </form>
    </div>



    <div id="divmusic">
        <object type="audio/mpeg" width="1" height="1" data="sound/loose.mp3">
            <param name="filename" value="monmp3.mp3" />
            <param name="autostart" value="false" />
            <param name="loop" value="false" />
        </object>
    </div>
    <div id="divmusic2">
        <object type="audio/mpeg" width="1" height="1" data="sound/win.mp3">
            <param name="filename" value="monmp.mp3" />
            <param name="autostart" value="false" />
            <param name="loop" value="false" />
        </object>
    </div>
</body>


<table id="visible">
    <tbody class="vis">
        <tr>
            <td>Pseudo</td>
            <td>Score</td>
        </tr>
        <?php foreach($score as $casse_brique) :?>

        <tr>
            <td><?=$casse_brique['pseudo']?></td>
            <td><?=$casse_brique['must']?></td>

        </tr>
        <?php endforeach ?>
    </tbody>
</table>




<div id="envoi"></div>
<div id="rejouer"></div>
<div id="score"></div>





<script src="ajax.js"></script>
<script src="barre.js"></script>
<script src="brick.js"></script>
<script src="bonus.js"></script>
<script src='script.js'></script>

</html>