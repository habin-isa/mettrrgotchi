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

    private const POO = "

    _---~~(~~-_.
    _{        )   )
  ,   ) -~~- ( ,-' )_
 (  `-,_..`., )-- '_,)
( ` _)  (  -~( -_ `,  }
(_-  _  ~_-~~~~`,  ,' )
  `~ -^(    __;-,((()))
        ~~~~ {_ -_(())
               `\  }
                 { }
    ";

    private $dateOfTurning;
    private $name;
    private $hunger = 100;


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

    public function eat($brains)
    {
        $this->hunger -= strlen($brains);
        return "Current hunger level: {$this->hunger}";
    }

    public function poop()
    {
        return "Zombies don't poop";
    }

    public function explode()
    {
        // Can a class instance self-destruct?
    }

    public function deadWalk()
    {
        return "Need more braaaain! [¬º-°]¬";
    }
}
