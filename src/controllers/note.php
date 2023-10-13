<?php

    $config = require('config.php');
    $db = new Database($config['database']);

    $note = $db->query('SELECT * FROM notes WHERE id = ?', [$_GET['id']])->findOrFail();

    $currentUserId = 1;

    authorize($note['user_id'] == $currentUserId);

    require 'src/views/note.view.php';

    