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

<!--Main database section:-->
<main class="main">

    <?php
        $allart = fetchDb($db);
        echo formatAll($allart);
    ?>

</main>

<!--Footer:-->
<footer class="footer">
    <p>&copy artGallery 2021</p>
</footer>

</body>
</html>
