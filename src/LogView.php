<?php namespace Magelk;

use Magelk\Contracts\LogViewInterface;
use Magelk\Exceptions\InvalidPathException;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

class LogView implements LogViewInterface {

    protected $path;

    protected $files;

    /**
     * @param $path
     * @return mixed
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return array Of SplFileInfo objects
     * @throws InvalidPathException
     */
    public function getFiles()
    {
        if ( $this->getPath() == '' || $this->getPath() == NULL) {
            throw new InvalidPathException();
        }

        $finder = new Finder();

        $files = $finder->depth('== 0')->ignoreVCS(true)->files()->in($this->getPath());

        return $files;
    }

    /**
     * @param $filename SplfileInfo
     * @return mixed
     */
    public function getContent(SplFileInfo $filename)
    {
        return $filename->getContents();
    }


}