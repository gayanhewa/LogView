<?php

$log = new \Magelk\LogView();
$f = [];
foreach( $log->getFiles() as $file ) {
    $f[] = $file->getFilename();
}
return json_encode($f);