<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="reset" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Add Artwork | artGallery</title>
</head>

<body>
<nav class="nav-bar">
    <h1>artGALLERY</h1>
</nav>

<header>
    <h2>ADD ARTWORKS</h2>
</header>

<form action="index.php" method="post">
    <button class="back" title="Back">
        <i class="fas fa-chevron-circle-left"></i>
    </button>
</form>

<main class="form">

    <?php
    require_once('form.php');
    ?>

</main>

<footer class="footer bottom">
    <p>&#169; artGallery 2021</p>
</footer>

</body>

</html>