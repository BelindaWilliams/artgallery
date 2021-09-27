<!DOCTYPE html>
<html>
<head>
    <link rel="reset" href="normalize.css">
    <link rel="stylesheet" href="CSS/mystyles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>artGallery</title>
</head>

<body>
<nav class="nav-bar">
    <p>Nav bar</p>
</nav>

<header class="jumbotron">
    <p>Jumbotron</p>
</header>

<main class="main">

<?php

$db = new PDO('mysql:host=db; dbname=project02', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT `artist`, `title` , `medium` , `size` FROM `artcollection`;");

$query->execute();

$artcollection = $query->fetchAll();

echo '<h2>ARTWORKS</h2>';
echo '<ul>';
foreach($artcollection as $artitem) {
    echo '<li>';
    echo $artitem['artist'] . '<br>' . $artitem['title'] . '<br>' . $artitem['medium'] . '<br>' . $artitem['size'] . '<br><br>';
}
echo '</ul>';

?>

	</main>

	<footer class="footer">
	  <p>&copy artGallery 2021</p>
	</footer>
	
</body>
</html>