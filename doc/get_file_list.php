<?php

$log = new \Magelk\LogView();
$path = __DIR__."/logs";
$log->setPath($path);
$f = [];
foreach( $log->getFiles() as $file ) {
    $f[] = $file->getFilename();
}
return json_encode($f);