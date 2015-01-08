<?php

use Magelk\LogView as LogView;

class LogViewTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected $log;

    protected function _before()
    {
        $this->log = new LogView();
        // Set path as the current directory
        $this->log->setPath(__DIR__);

        $f = fopen(__DIR__.'/test.txt', 'a+');
        $file = new \Illuminate\Filesystem\Filesystem();
        $file->put(__DIR__.'/test.txt', 'test log line');

    }

    protected function _after()
    {
        $file = new \Illuminate\Filesystem\Filesystem();
        $file->delete(array(__DIR__.'/test.txt'));
    }

    // Is path set
    public function testPath()
    {
        $this->assertNotEmpty($this->log->getPath(), "Path can't be empty.");
    }

    /**
     * @expectedException \Magelk\Exceptions\InvalidPathException
     */
    public function testPathNotExists()
    {
        $this->log->setPath('');
        $this->log->getFiles();
        $this->_before();
    }

    // Is files collection
    public function testHasFiles()
    {
        $this->assertTrue(($this->log->getFiles() instanceof Traversable), "Is a files collection.");
        foreach($this->log->getFiles() as $fileObject) {
            if ($fileObject->getFileName() == 'test.txt') {
                $this->assertTrue($fileObject->getContents() == 'test log line');
            }
        }

    }
}
