<?php

$db = new PDO('mysql:host=db; dbname=project02', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);