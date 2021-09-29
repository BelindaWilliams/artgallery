<?php
require_once 'includes/db.php';
require_once 'includes/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="reset" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>artGallery</title>
</head>

<body>

<!--Navigation bar with App Name:-->
<nav class="nav-bar">
    <h1>artGallery</h1>
</nav>

<!--Page header:-->
<header class="header">
    <h2>ARTWORKS</h2>
</header>

<!--Link to 'Add Artwork' page:-->
<form action="addartwork.php">
    <button class="add-art">
        <i class="fas fa-plus-circle"></i>
    </button>
</form>

<!--Main database section:-->
<main class="main">

    <?php
    $allart = fetchDb($db);
    echo formatAll($allart);
    ?>

</main>

<!--Back to top button:-->
<form action="#top">
    <button class="top-btn">
        <i class="fas fa-chevron-circle-up"></i>
    </button>
</form>

<!--Footer:-->
<footer class="footer">
    <p>&#169; artGallery 2021</p>
</footer>

</body>
</html>