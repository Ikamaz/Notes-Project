<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Note';

$note = $db->query('SELECT * FROM notes WHERE id = ?');
$note->execute([$_GET['id']]);
$note = $note->fetch();

require "views/note.view.php";