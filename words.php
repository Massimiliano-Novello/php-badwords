<?php
$paragraph = $_GET['text'];
$words = $_GET['word'];
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
    <h1>Ciao PHP</h1>
    <p><?php echo $paragraph; ?></p>
    <p><?php
    $text_replace = str_replace($words, '***', $paragraph);
    echo $text_replace; 
    ?></p>
</body>
</html>