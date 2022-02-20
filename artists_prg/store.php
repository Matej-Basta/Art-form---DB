<?php

require_once "../database/DB_functions.php";
require_once "Artist.php";

//preparing the data

$artist = new Artist;

//hydrating the object with the data from the post

$artist->hydrateFromRequest();

//connecting to DB

$success = connect("localhost", "art", "root", "");

//storing the data

$query = "
    INSERT
    INTO `artists`
    (`name`, `birth`, `death`, `bio`, `country`, `movement`, `picture_url`)
    VALUES
    (?, ?, ?, ?, ?, ?, ?)
";

insert($query, ["{$artist->name}", "{$artist->birth}", "{$artist->death}", "{$artist->bio}", "{$artist->country}", "{$artist->movement}", "{$artist->picture_url}"]);

//redirecting

header("Location: form.php");

