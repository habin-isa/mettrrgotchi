<?php

namespace Src;

use DateTime;

class Timone extends Incredibles {

/**
   * @param DateTime $dt (optional) date of birth
   * @return void
*/

    public function __construct($dt = null)
    {
        $this->dob = $dt ?? new DateTime;
    }

/**
 * @return string name of pumba
*/

    public function getName()
    {
        return $this->name;
    }

/**
  * @return void for name property
*/

    public function setName($name)
    {
        $this->name = $name;
    }

/**
  * @return int age
*/

    public function getAge()
    {
        return $this->dob->diff(new DateTime())->days;
    }

/**
  * @return void set hunger
*/

    public function setHunger($hunger)
    {
        return $this->hunger = $hunger;
    }
/**
  * @return int hunger
*/

    public function getHunger()
    {
        return $this->hunger;
    }

    public function munch($food)
    {
        $this->hunger -= strlen($food);
        return "Current hunger level: {$this->hunger}";
    }

/**
  * @return int thirst
*/

    public function getThirst()
    {
        return $this->thirst;
    }

    public function drink()
    {
        if ($this->thirst == true) {
            return "Gulp Gulp Gulp";
        } else {
            return "{$this->name} isn't thirsty atm!";
        }
    }

    public function playMusic()
    {
        return "♩ ♪ ♫ ♬ ♭ ♮ ♯";
    }

    public function poop($hunger)
    {
        if ($this->hunger <= 0) {
            return 'Cant poop im not even hungry';
        } elsif($this->hunger <= 5) {
          return 'Should be more hungry to poop';
        } else {
            $hunger -= strlen($hunger);
            return self::POOP;
        }
    }

}
