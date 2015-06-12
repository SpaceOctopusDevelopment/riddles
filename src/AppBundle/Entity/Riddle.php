<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Riddle
 */
class Riddle
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $riddle;

    /**
     * @var string
     */
    private $answer;

    /**
     * @var string
     */
    private $false1;

    /**
     * @var string
     */
    private $false2;

    /**
     * @var string
     */
    private $false3;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Riddle
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set riddle
     *
     * @param string $riddle
     * @return Riddle
     */
    public function setRiddle($riddle)
    {
        $this->riddle = $riddle;

        return $this;
    }

    /**
     * Get riddle
     *
     * @return string 
     */
    public function getRiddle()
    {
        return $this->riddle;
    }

    /**
     * Set answer
     *
     * @param string $answer
     * @return Riddle
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return string 
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set false1
     *
     * @param string $false1
     * @return Riddle
     */
    public function setFalse1($false1)
    {
        $this->false1 = $false1;

        return $this;
    }

    /**
     * Get false1
     *
     * @return string 
     */
    public function getFalse1()
    {
        return $this->false1;
    }

    /**
     * Set false2
     *
     * @param string $false2
     * @return Riddle
     */
    public function setFalse2($false2)
    {
        $this->false2 = $false2;

        return $this;
    }

    /**
     * Get false2
     *
     * @return string 
     */
    public function getFalse2()
    {
        return $this->false2;
    }

    /**
     * Set false3
     *
     * @param string $false3
     * @return Riddle
     */
    public function setFalse3($false3)
    {
        $this->false3 = $false3;

        return $this;
    }

    /**
     * Get false3
     *
     * @return string 
     */
    public function getFalse3()
    {
        return $this->false3;
    }
}
