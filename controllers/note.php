<?php

    $config = require('config.php');
    $db = new Database($config['database']);

    $heading = 'Note';
    $currentUserId = 1;

    $note = $db->query('select * from notes where id = :id', [
        'id' => $_GET['id']
    ])->findOrFail();

   

    if($note['user_id'] != 1){
        abort(Response::FORBIDDEN);
    }

    require "views/note.view.php";