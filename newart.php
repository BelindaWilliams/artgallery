<?php
require_once('includes/db.php');
require_once('includes/functions.php');

$artAdded = addNewArt($db, $_POST);

if ($artAdded) {
    header('Location: index.php');
} else {
    header('Location: addartwork.php');
}