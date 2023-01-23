<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1;

$note = $db->query('select * from note where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);


    view("LinkPage/notes/show.learn.php", [
     'heading' => 'Note',
     'note' => $note
     ]);