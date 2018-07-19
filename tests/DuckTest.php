<?php

namespace Tests;

use Src\Duck;
use PHPUnit\Framework\TestCase;

class DuckTest extends TestCase
{
    /** @test */
    public function class_name_is_duck()
    {
        $failMsg = "Expected class name 'Src\Duck'";
        $this->assertSame(Duck::class, 'Src\Duck', $failMsg);
    }

    /** @test */
    public function object_is_a_duck_instance()
    {
        $duck = new Duck();

        $failMsg = "Expected class name 'Src\Duck'";
        $this->assertSame(get_class($duck), 'Src\Duck', $failMsg);
    }

    /** @test */
    public function duck_has_a_name()
    {
        $duck = new Duck();

        $failMsg = "Expected name ";
        $this->assertSame($duck->getName(), null, $failMsg . "to be null");

        $name = "Bob";
        $duck->setName($name);
        $this->assertSame($duck->getName(), $name, $failMsg . "to be { $name . ' .' }");
    }

    /** @test */
    public function duck_has_age()
    {
        $now = new \DateTime();
        $yesterday = $now->sub(new \DateInterval('P1D'));
        $duck = new Duck($yesterday);

        $failMsg = "Expected age to be 1 day old";
        $this->assertSame($duck->getAge(), 1, $failMsg);
    }

    /** @test */
    public function duck_has_picture()
    {
        $pic = Duck::PICTURE;

        $failMsg = "Expected a picture to be set";
        $this->assertTrue(isset($pic), $failMsg);
    }

    /** @test */
    public function duck_has_hunger()
    {
        $duck = new Duck();

        $failMsg = "Expected name ";
        $this->assertSame($duck->getHunger(), null, $failMsg . "to be null");

        $hunger = 1;
        $duck->setHunger($hunger);
        $this->assertSame($duck->getHunger(), $hunger, $failMsg . "to be { $hunger . ' .' }");
    }

    /** @test */
    public function duck_can_eat_food()
    {
        $duck = new Duck();

        $failMsg = "Expected noise ";
        $this->assertSame($duck->eat('bread'), 'yum, yum', $failMsg . "to be 'yum, yum'");
    }

    /** @test */
    public function duck_can_eat_food_and_get_less_hungry()
    {
        $duck = new Duck();
        $duck->setHunger(10);
        $failMsg = "Expected hunger to go down by one";
        $duck->eat('bread');
        $this->assertTrue($duck->getHunger() == 9, $failMsg . "to be 9");
    }

    /** @test */
    public function duck_has_food_it_likes()
    {
        $foodItLikes = Duck::FOOD_I_LIKE;

        $failMsg = "Expected array";
        $this->assertTrue(is_array($foodItLikes));
    }


    /** @test */
    public function duck_can_eat_food_and_hate_it()
    {
        $duck = new Duck();
        $duck->setHunger(10);
        $failMsg = "Expected noise ";
        $this->assertSame($duck->eat('brussel sprouts'), 'yuck!', $failMsg . "to be 'yuck!'");
    }

    /** @test */
    public function duck_can_quack()
    {
        $duck = new Duck();
        $duck->setHunger(10);
        $failMsg = "Expected noise ";
        $this->assertSame($duck->quack(), 'quack!', $failMsg . "to be 'quack!'");
    }
}
