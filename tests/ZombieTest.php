<?php

namespace Tests;

use Src\Zombie;
use PHPUnit\Framework\TestCase;

class ZombieTest extends TestCase
{

    /** @test */
    public function zombie_has_a_name()
    {
        $zombie = new Zombie();

        $failMsg = "Expected name ";
        $this->assertSame($zombie->getName(), null, $failMsg . "to be null");

        $name = "Noooaargh Chompsky";
        $zombie->setName($name);
        $this->assertSame($zombie->getName(), $name, $failMsg . "to be { $name . ' .' }");
    }

    /** @test */
    public function zombie_has_age()
    {
        $now = new \DateTime();
        $yesterday = $now->sub(new \DateInterval('P1D'));
        $zombie = new Zombie($yesterday);

        $failMsg = "Expected age to be 1 day old";
        $this->assertSame($zombie->getAge(), 1, $failMsg);
    }

    /** @test */
    public function zombie_has_picture()
    {
        $pic = Zombie::PICTURE;

        $failMsg = "Expected a picture to be set";
        $this->assertTrue(isset($pic), $failMsg);
    }

    /** @test */
    public function zombie_has_hunger()
    {
        $zombie = new Zombie;

        $failMsg = "Expected hunger to be 100";
        $this->assertSame($zombie->getHunger(), 100, $failMsg);

    }

    /** @test */
    public function zombie_can_deadWalk()
    {
        $zombie = new Zombie;

        $output = $zombie->deadWalk();

        $this->assertTrue(strlen($output) > 0, "Should be able to walk dead");
    }
}
