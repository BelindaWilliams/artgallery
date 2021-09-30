<?php

function fetchDb(PDO $db): array
{
    $query = $db->prepare(
        "SELECT `artist`, `title` , `medium` , `size` , `image` 
        FROM `artcollection`
        ORDER BY `artist`;"
    );
    $query->execute();
    return $query->fetchAll();
}

function formatAll(array $artcollection): string
{
    $str = '<ul>';
    foreach($artcollection as $artitem) {
        $str .= '<li>';
        $str .= '<img src="';
        $path = getImagePath($artitem['image']);
        $str .= ($path . '" alt="' . $artitem['title'] . '">');
        $str .= '<p class="artist">' . $artitem['artist'] . '</p>';
        $str .= '<p class="title">' . $artitem['title'] . '</p>';
        $str .= '<p class="medium">' . $artitem['medium'] . '</p>';
        $str .= '<p class="size">' . $artitem['size'] . '</p>';
        $str .= '</li>';
    }
    $str .= '</ul>';
    return $str;
}

function getImagePath(string $imagePath): string
{
    $path ='';
    $imageStartsWith = substr($imagePath, 0, strlen('http'));
    if (!$imageStartsWith) {
        $path = 'https://via.placeholder.com/350/150';
    } elseif ($imageStartsWith === 'http') {
        $path = $imagePath;
    } else {
        $path = 'images/' . $imagePath;
    }
    return $path;
}

function addNewArt(PDO $db, array $newArt): bool
{
    $query = $db->prepare('INSERT INTO `artcollection`'
        . ' (`artist`, `title`, `medium`, `size`, `image`)'
        . ' VALUES (:artist, :title, :medium, :size, :image);'
    );

	return $query->execute($newArt);
}