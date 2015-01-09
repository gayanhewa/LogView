[![Build Status](https://travis-ci.org/gayanhewa/LogView.svg?branch=master)](https://travis-ci.org/gayanhewa/LogView)

LogView
========

Simple PHP Library that lets you load your log files for viewing.

Useage :

~~~
        // Path to log files
        $path = __DIR__ . "/logs/";
        
        //Initialize the class
        $log = new Magelk\LogView();
        
        // Set Path
        $log->setPath($path);
        
        // Get file contents
        // $filename can be sent as a Request parameter 
        $contents = $log->getContent($filename);
~~~

Release under [MIT license](License.md).
