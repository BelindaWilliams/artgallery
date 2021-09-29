<?php
//require_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="reset" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <title>Add Artwork | artGallery</title>
</head>

<body>
<nav class="nav-bar">
    <h1>artGALLERY</h1>
</nav>

<header>
    <h2>ADD ARTWORKS</h2>
</header>

<main>

    <?php
    require_once('form.php');
    ?>

</main>

<footer class="footer">
    <p>&#169; artGallery 2021</p>
</footer>

</body>

</html>