<?php

namespace Src;

use DateTime;

class Duck
{
    public const PICTURE = "     ,~~.
                                 (  9 )-_,
                            (\___ )=='-'
                             \ .   ) )
                              \ `-' /
                               `~j-'   hjw
                                 \"=:
                        ";

    public const FOOD_I_LIKE = [
        'bread'
    ];

    private $dob;
    private $name;
    private $hunger;

    public function __construct(DateTime $dt = null)
    {
        $this->dob = $dt ?? new DateTime();
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getHunger(): ?int
    {
        return $this->hunger;
    }

    public function setHunger($hunger): void
    {
        $this->hunger = $hunger;
    }

    public function getAge(): string
    {
        return $this->dob->diff(new DateTime())->days;
    }

    public function eat(string $food): string
    {
        if (in_array($food, self::FOOD_I_LIKE)) {
            $this->setHunger($this->getHunger() - 1);

            return 'yum, yum';
        }

        return 'yuck!';
    }

    public function quack(): string
    {
        return 'quack!';
    }
}
