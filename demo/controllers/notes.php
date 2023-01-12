<?php

$config = require('config.php');
require 'database.php';


$db = new Database($config['database']);

$heading = 'My Notes';

$notes = $db->query('select * from note where user_id = 1')->get();

require "LinkPage/notes.learn.php";