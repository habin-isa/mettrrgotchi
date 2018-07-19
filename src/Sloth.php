<?php

namespace Src;

use DateTime;

class Sloth
{
    const PICTURE = ':-)';

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $dob;

    /**
     * @var int
     */
    private $hunger = 0;

    public function __construct($dt = null)
    {
        $this->dob = $dt ?? new DateTime();
    }

    /**
    * Getter for name
    *
    * @return string
    */
    public function getName()
    {
        return $this->name;
    }

    /**
    * Setter for name
    *
    * @param sting $name
    * @return self
    */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
    * Getter for dob
    *
    * @return string
    */
    public function getAge()
    {
        return $this->dob->diff(new DateTime())->days;
    }

    /**
    * Getter for hunger
    *
    * @return string
    */
    public function getHunger()
    {
        return $this->hunger;
    }

    /**
     * Sloth needs to go. Increases the hunger by 1
     *
     * @author Dom Batten <db@mettrr.com>
     */
    public function poop()
    {
        $this->hunger += 1;

        return 'That\'s better';
    }

    /**
     * Eat some food. Decreases hunger by 1
     *
     * @param string $food
     * @author Dom Batten <db@mettrr.com>
     */
    public function eat(string $food)
    {
        if ($this->hunger == 0) {
            return 'I\'m full';
        }

        $this->hunger -= 1;

        return 'That hit the spot';
    }

    /**
     * Do as a sloth does
     *
     * @author Dom Batten <db@mettrr.com>
     */
    public function doNothing()
    {
        return 'Did nothing';
    }
}
