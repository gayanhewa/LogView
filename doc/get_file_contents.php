<?php
require_once '../vendor/autoload.php';

try {

    if (isset($_REQUEST["filename"])) {

        // Path
        $path = __DIR__ . "/logs/";
        $log = new Magelk\LogView();
        $log->setPath($path);
        $content = "Empty File.";
        foreach($log->getFiles() as $file) {
            if ($file->getFilename() == $_REQUEST["filename"]) {
                $content = $log->getContent($file);
            }
        }

        echo json_encode([
            'error'=> false,
            'message'=> $content
        ]);
    }
}catch (Magelk\Exceptions\InvalidPathException $e) {
    echo json_encode([
       'error' => true,
        'message' => 'Invalid Path'
    ]);
}catch (Exception $e){
    return json_encode([
        'error' => true,
        'message' => "Something Went Wrong"
    ]);
}