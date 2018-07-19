<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Src\Sloth;

class SlothTest extends TestCase
{
    /** @test */
    public function class_name_is_sloth()
    {
        $this->assertEquals(Sloth::class, 'Src\Sloth');
    }

    /** @test */
    public function sloth_has_a_name()
    {
        $name = 'John';

        $sloth = new Sloth;
        $sloth->setName($name);

        $this->assertEquals($sloth->getName(), $name);
    }

    /** @test */
    public function sloth_has_an_age()
    {
        $now = new \DateTime();
        $twoDaysAgo = $now->sub(new \DateInterval('P2D'));

        $sloth = new Sloth($twoDaysAgo);

        $this->assertEquals($sloth->getAge(), 2);
    }

    /** @test */
    public function sloth_has_hunger()
    {
        $sloth = new Sloth;

        $this->assertEquals($sloth->getHunger(), 0);
    }

    /** @test */
    public function pooping_increases_hunger_by_1()
    {
        $sloth = new Sloth;

        $result = $sloth->poop();

        $this->assertEquals($sloth->getHunger(), 1);
        $this->assertEquals($result, 'That\'s better');
    }

    /** @test */
    public function eating_decreases_hunger_by_1()
    {
        $sloth = new Sloth;

        $sloth->poop();

        $result = $sloth->eat('carrot');

        $this->assertEquals($sloth->getHunger(), 0);
        $this->assertEquals($result, 'That hit the spot');
    }

    /** @test */
    public function hunger_cant_decrease_past_0()
    {
        $sloth = new Sloth;

        $result = $sloth->eat('carrot');

        $this->assertEquals($sloth->getHunger(), 0);
        $this->assertEquals($result, 'I\'m full');
    }

    /** @test */
    public function sloth_has_a_picture()
    {
        $pic = Sloth::PICTURE;

        $this->assertTrue(isset($pic));
    }

    /** @test */
    public function sloth_can_do_nothing()
    {
        $sloth = new Sloth;

        $result = $sloth->doNothing();

        $this->assertEquals($result, 'Did nothing');
    }
}
