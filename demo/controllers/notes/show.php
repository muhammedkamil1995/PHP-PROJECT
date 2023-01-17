<?php

use core\Database;

// $config = require base_path('../../config.php');
$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 1;

$note = $db->query('select * from note where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);


    view("LinkPage/notes/show.learn.php", [
     'heading' => 'Note',
     'note' => $note
     ]);
