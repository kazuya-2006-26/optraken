<?php
    $dir = __DIR__ . '/../public/verhalen';
    $files = array_diff(
        scandir($dir),

        array('.', '..')
    );
    header('Content-Type: application/json');
    echo json_encode($files);
?>