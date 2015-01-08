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

    }

    protected function _after()
    {
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
    }
}
