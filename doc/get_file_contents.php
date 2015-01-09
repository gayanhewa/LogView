<?php
try {
    if (isset($_REQUEST["filename"])) {

        // Path
        $path = __DIR__ . "/logs/";
        $log = new Magelk\LogView();
        $log->setPath($path);

        return json_encode([
            'error'=> false,
            'message'=> $log->getContent($_REQUEST["filename"])
        ]);
    }
}catch (Magelk\Exceptions\InvalidPathException $e) {
    return json_encode([
       'error' => true,
        'message' => 'Invalid Path'
    ]);
}catch (Exception $e){
    return json_encode([
        'error' => true,
        'message' => "Something Went Wrong"
    ]);
}