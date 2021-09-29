<?php
require_once('includes/db.php');
require_once('includes/functions.php');

$valid = true;

if (!$valid) {
    header('Location: addartwork.php');
}

$artAdded = addNewArt($db, $_POST);

if ($artAdded) {
    header('Location: index.php');
} else {
    header('Location: addartwork.php');
}