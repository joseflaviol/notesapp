<?php

    $uri = parse_url($_SERVER["REQUEST_URI"])['path'];

    $routes = [
        '/'      => 'src/controllers/index.php',
        '/notes' => 'src/controllers/notes.php',
        '/note'  => 'src/controllers/note.php'
    ];

    function routeToController($uri, $routes) {
        if (array_key_exists($uri, $routes)) {
            require $routes[$uri];
        } else {
            http_response_code(404);
    
            echo "Not found.";
    
            die();
        }
    }

    routeToController($uri, $routes);

    