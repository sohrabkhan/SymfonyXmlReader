<?php
/**
 * Created by PhpStorm.
 * User: Sohrab Khan
 * Date: 09/01/2015
 * Time: 19:38
 */

namespace Squawka\MatchBundle\Entity;

/**
 * Entity representing the directory in which all the XML documents are
 *
 * Class Directory
 * @package Squawka\MatchBundle\Entity
 */
class Directory {
    const DIRECTORY_NAME = "data-feed";

    /**
     * The location of the directory excluding the name
     * @var string
     */
    private $path;

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }
}