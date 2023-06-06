<?php
$text = $_GET['text'];
$word = $_GET['word'];
$censored = '***';
$newText = str_replace($word, $censored, $text);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Parola:</h2>
    <?php
    echo $text;
    ?>
    <h2>Lunghezza parola:</h2>
    <?php
    echo strlen($text);
    ?>
    <h2>Parola censurata:</h2>
    <?php
    echo $newText
    ?>
</body>

</html>