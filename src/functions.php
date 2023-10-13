<?php

function authorize($condition, $status = Response::FORBIDDEN) {
    if (!$condition) {
        http_response_code($status);
        echo 'Unauthorized';
        die();
    }
}