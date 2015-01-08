<?php namespace Magelk\Contracts;

use Symfony\Component\Finder\SplFileInfo;

interface LogViewInterface {

    /**
     * @param $path
     * @return mixed
     */
    public function setPath($path);

    /**
     * @return mixed
     */
    public function getPath();

    /**
     * @return array
     */
    public function getFiles();

    /**
     * @param $filename
     * @return mixed
     */
    public function getContent(SplFileInfo $filename);

}