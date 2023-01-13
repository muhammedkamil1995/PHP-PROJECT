<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$notes = $db->query('select * from note where user_id = 1')->get();

view("LinkPage/notes/index.learn.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);