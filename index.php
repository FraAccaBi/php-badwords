<?php 
$paragraph = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident impedit, quas maxime illum in molestias at voluptatem quidem reiciendis odio autem numquam vero, quisquam excepturi nisi fuga ipsam est facere.';
$badWord = $_GET['badWord'];
$new_paragraph = str_replace($badWord, '***', $paragraph)
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
    <p>
        <?php $_GET['badWord']; echo $new_paragraph ?>
    </p>
</body>
</html>