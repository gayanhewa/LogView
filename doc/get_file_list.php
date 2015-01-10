<?php
require_once '../vendor/autoload.php';
try {
    $log = new Magelk\LogView();
    $path = __DIR__ . "/logs";

    $log->setPath($path);
    $f = [];

    foreach ($log->getFiles() as $file) {
        $f[] = $file->getFilename();
    }

    echo json_encode([
            'error' => false,
            'message' => $f
        ]);
}catch (\Magelk\Exceptions\InvalidPathException $e) {
    echo json_encode([
       'error' => false,
        'message' => 'No files'
    ]);
}