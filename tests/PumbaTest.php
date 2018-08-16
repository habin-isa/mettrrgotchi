<?php

namespace Tests;

use Src\Pumba;
use PHPUnit\Framework\TestCase;

class PumbaTest extends TestCase
{
  /** @test */
    public function class_name_is_pumba()
    {
      $failMsg = "Class name should be 'Src\Pumba'";
      $this->assertSame(Pumba::class, 'Src\Pumba', $failMsg);
  }

  /** @test */
  public function object_is_pumba_instance()
  {
    $pumba = new Pumba();

    $failMsg = "Class name should be 'Src\Pumba'";
    $this->assertSame(get_class($pumba), 'Src\Pumba', $failMsg);
  }

  /** @test */
  public function pumba_has_name()
  {
    $pumba = new Pumba();

    $failMsg = "Your Pumba should have a name";
    $this->assertSame($pumba->getName(), null, $failMsg . "to be null");

    $name = "Kimmy";
    $pumba->setName($name);
    $this->assertSame($pumba->getName(), $name, $failMsg . "to be { $name . ' .'}");

  }

  /** @test */
  public function pumba_has_age()
  {
    $now = new \DateTime();
    $yesterday = $now->sub(new \DateInterval('P1D'));
    $pumba = new Pumba($yesterday);

    $failMsg = "Pumba should be a day old";
    $this->assertSame($pumba->getAge(), 1, $failMsg);
  }

  /** @test */
  public function pumba_is_hungry()
  {
    $pumba = new Pumba();

    $hunger = 6;

    $failMsg = "Pumba's hunger level should be ";
    $this->assertSame($pumba->getHunger(), 6, $failMsg . '6');
  }

  /** @test */
  public function pumba_can_munch()
  {
    $pumba = new Pumba();
    $msg = "Current hunger level: ";

    $failMsg = "Pumba's hunger should be ";
//    $this->assertTrue(($pumba->getHunger() == ), $hunger, $failMsg . $hunger);

    $this->assertSame($pumba->getHunger(), $this->hunger, $failMsg . $hunger);

    $returnMsg = $pumba->munch('xx');

    $this->assertSame($pumba->getHunger(), 2, $failMsg . '2');

    //$this->assertSame($pumba->getHunger(), 8, $failMsg . '8');
    //$this->assertSame($returnMsg, $msg . '8', $failMsg . '8');
  }

  /** @test */
  public function pumba_is_thirsty()
  {
    $pumba = new Pumba();

    $failMsg = "Pumba should be thirsty";
    $this->assertSame($pumba->getThirst(), true, $failMsg);
  }

  /** @test */
  public function pumba_can_drink()
  {
    $pumba = new Pumba();

    $failMsg = "Pumba isn't thirsty atm!";
    $this->assertSame($pumba->drink(), "Gulp Gulp Gulp", $failMsg);
  }

  //  $pumba = new Pumba();
  //  $above6 = $pumba->poop();
  // $pumba->munch('xxx');
  // $below6 = $pumba->poop();

  /** @test */
public function pumba_can_poop()
{
  $pumba = new Pumba();

  $above5 = $pumba->poop(8);

  $pumba->munch('xxx');

  $below5 = $pumba->poop($hunger);

  $this->assertTrue(strlen($above5) == 0, $this::POOP);
  $this->assertTrue(strlen($below5) >= 1, "Should be more hungry to poop");
  $this->assertTrue($pumba->poop(0), "Cant poop im not even hungry");
}

  /** @test */
  public function pumba_play_music()
  {
    $pumba = new Pumba();

    $output = $pumba->playMusic();

    $this->assertTrue(strlen($output) > 0, "Play some music");
  }
}
