<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$notes = $db->query('select * from note where user_id = 1')->get();

view("LinkPage/notes/index.learn.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);