<?php

namespace Src;

use DateTime;

class Zombie
{
    public const PICTURE = "
                            _,--~~~,
                            .'        `.
                            |           ;
                            |           :
                        /_,-==/      . '
                        /'`\*  ;       :
                        :'    `-        :
                        `~*,'     .     :
                        :__.,._  `;  :
                            )  '  `,
                            -/  '     )
                            :'          \ _
                            `~---,-~ \  `,)
                ___                   \     /~`\
       \ ------==__ `;~~~-------------~~~(| _-'    `,
        --------, ' \`-._____     _______.---'         \
        \------ `~~-`,      ~~~~~~                     `,
        \----      )                                   \
        \----.  __ /                                    `-
        \----'` -~____
        ~~~~~--------,.___     --
                    ```\_";

    private $dateOfTurning;
    private $name;
    private $hunger = 100;
    private $fullness = 0;
    private $bellyCapacity = 100;


    public function __construct($dt = null)
    {
        $this->dateOfTurning = $dt ?? new DateTime();
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->dateOfTurning->diff(new DateTime())->days;
    }


    public function getHunger()
    {
        return $this->hunger;
    }

    public function getCapacity()
    {
        return $this->bellyCapacity;
    }

    public function getFullness()
    {
        return $this->fullness;
    }

    public function eat($brains)
    {
        $this->hunger -= strlen($brains);
        $this->fullness += strlen($brains);

        if ($this->fullness > $this->bellyCapacity) {
            return $this->explode($this);
        }

        return "Current hunger level: {$this->hunger}";
    }

    public function poop()
    {
        return "Zombies don't poop";
    }

    public function explode(Zombie $zombie)
    {
        // Can a class instance self-destruct?
        $zombie = NULL;
        return "Zombie is no more";
    }

    public function deadWalk()
    {
        return "Need more braaaain! [¬º-°]¬";
    }
}
