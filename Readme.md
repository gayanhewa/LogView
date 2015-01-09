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

How to use the Examples
-----------------------

Clone the Repository

~~~
    git clone https://github.com/gayanhewa/LogView.git
~~~

Navigate to the doc directory

~~~
    cd LogView/doc 
~~~

Run the PHP Server

~~~
    php -S localhost:8080
~~~

Point your browser to http://localhost:8080 and test the code. You can add more files to doc/logs folder for testing.

 - Released under [MIT license](License.md).
