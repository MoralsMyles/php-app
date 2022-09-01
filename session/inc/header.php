<?php 

if(!isset($title)) {
    $title = '';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> - Crono App</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <h1>CronoApp - <?= $title ?></h1>
        <ul>
            <li><a href="../login.php">Login</a></li>
            <li><a href="./more.php">More</a></li>
            <li><a href="./view-files.php">View Files</a></li>
        </ul>
    </header>

</body>
</html>