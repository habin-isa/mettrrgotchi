<?php

namespace Tests;

use Src\Slug;
use PHPUnit\Framework\TestCase;

class SlugTest extends TestCase
{
    /** @test */
    public function class_name_is_slug()
    {
        $failMsg = "Expected class name 'Src\Slug'";
        $this->assertSame(Slug::class, 'Src\Slug', $failMsg);
    }

    /** @test */
    public function object_is_a_slug_instance()
    {
        $slug = new Slug();

        $failMsg = "Expected class name 'Src\Slug'";
        $this->assertSame(get_class($slug), 'Src\Slug', $failMsg);
    }

    /** @test */
    public function slug_has_a_name()
    {
        $slug = new Slug();

        $failMsg = "Expected name ";
        $this->assertSame($slug->getName(), null, $failMsg . "to be null");

        $name = "Bob";
        $slug->setName($name);
        $this->assertSame($slug->getName(), $name, $failMsg . "to be { $name . ' .' }");
    }

    /** @test */
    public function slug_has_age()
    {
        $now = new \DateTime();
        $yesterday = $now->sub(new \DateInterval('P1D'));
        $slug = new Slug($yesterday);

        $failMsg = "Expected age to be 1 day old";
        $this->assertSame($slug->getAge(), 1, $failMsg);
    }

    /** @test */
    public function slug_has_picture()
    {
        $pic = Slug::PICTURE;

        $failMsg = "Expected a picture to be set";
        $this->assertTrue(isset($pic), $failMsg);
    }

    /** @test */
    public function slug_has_hunger()
    {
        $slug = new Slug;

        $failMsg = "Expected hunger to be 5";
        $this->assertSame($slug->getHunger(), 5, $failMsg);

    }

    /** @test */
    public function slug_can_eat()
    {
        $slug = new Slug;
        $msg = "Current hunger level: ";

        $failMsg = "Expected hunger to be ";
        $this->assertSame($slug->getHunger(), 5, $failMsg . '5');

        $returnMsg = $slug->eat('xx');

        $this->assertSame($slug->getHunger(), 3, $failMsg . '3');
        $this->assertSame($returnMsg, $msg . '3', $failMsg . '3');

    }

    /** @test */
    public function slug_can_poop()
    {
        $slug = new Slug;

        $above5 = $slug->poop();

        $slug->eat('xxx');

        $below5 = $slug->poop();

        $this->assertTrue(strlen($above5) == 0, "Should not poop with hunger below 5");
        $this->assertTrue(strlen($below5) >= 1, "Should poop with hunger above 5");
        $this->assertTrue($slug->getHunger() >= 9, "Should be hungry after pooping");
    }

    /** @test */
    public function slug_can_slime()
    {
        $slug = new Slug;

        $output = $slug->slime();

        $this->assertTrue(strlen($output) > 0, "Should be able to slime");
    }
}
