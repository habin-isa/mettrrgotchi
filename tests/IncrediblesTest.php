<?php
// Should test if Pumba + Timone inherit from Incredibles
namespace Tests;

use Src\Incredibles;
use PHPUnit\Framework\TestCase;

class IncrediblesTest extends TestCase
{
  /** @test */
    public function class_name_is_incredibles()
    {
      $failMsg = "Class name should be 'Src\Incredibles'";
      $this->assertSame(Incredibles::class, 'Src\Incredibles', $failMsg);
  }

  /** @test */
  public function object_is_incredibles_instance()
  {
    $incredibles = new Incredibles();

    $failMsg = "Class name should be 'Src\Incredibles'";
    $this->assertSame(get_class($incredibles), 'Src\Incredibles', $failMsg);
  }

  /** @test */
  public function incredibles_have_name()
  {
    $incredibles = new Incredibles();

    $failMsg = "Your Pumba should have a name";
    $this->assertSame($incredibles->getName(), null, $failMsg . "to be null");

    $name = "Kimmy";
    $incredibles->setName($name);
    $this->assertSame($incredibles->getName(), $name, $failMsg . "to be { $name . ' .'}");
  }

  /** @test */
  public function incredibles_have_an_age()
  {
    $now = new \DateTime();
    $yesterday = $now->sub(new \DateInterval('P1D'));
    $incredibles = new Incredibles($yesterday);

    $failMsg = "Incredibles should be a day old";
    $this->assertSame($incredibles->getAge(), 1, $failMsg);
  }

  /** @test */
  public function incredibles_are_hungry()
  {
    $incredibles = new Incredibles();

    $hunger = 6;

    $failMsg = "Incredibles' hunger level should be ";
    $this->assertSame($incredibles->getHunger(), 6, $failMsg . '6');
  }

  /** @test */
  public function incredibles_can_munch()
  {
    $incredibles = new Incredibles();
    $msg = "Current hunger level: ";

    $failMsg = "Incredibles' hunger should be ";
//    $this->assertTrue(($pumba->getHunger() == ), $hunger, $failMsg . $hunger);

    $this->assertSame($incredibles->getHunger(), $this->hunger, $failMsg . $hunger);

    $returnMsg = $incredibles->munch('xx');

    $this->assertSame($incredibles->getHunger(), 2, $failMsg . '2');

    //$this->assertSame($pumba->getHunger(), 8, $failMsg . '8');
    //$this->assertSame($returnMsg, $msg . '8', $failMsg . '8');
  }

  /** @test */
  public function incredibles_are_thirsty()
  {
    $incredibles = new Incredibles();

    $failMsg = "Incredibles should be thirsty";
    $this->assertSame($incredibles->getThirst(), true, $failMsg);
  }

  /** @test */
  public function incredibles_can_drink()
  {
    $incredibles = new Incredibles();

    $failMsg = "Incredibles aren't thirsty atm!";
    $this->assertSame($incredibles->drink(), "Gulp Gulp Gulp", $failMsg);
  }

  //  $pumba = new Pumba();
  //  $above6 = $pumba->poop();
  // $pumba->munch('xxx');
  // $below6 = $pumba->poop();

  /** @test */
public function incredibles_can_poop()
{
  $incredibles = new Incredibles();

  $above5 = $incredibles->poop(8);

  $incredibles->munch('xxx');

  $below5 = $incredibles->poop($hunger);

  $this->assertTrue(strlen($above5) == 0, $this::POOP);
  $this->assertTrue(strlen($below5) >= 1, "Should be more hungry to poop");
  $this->assertTrue($incredibles->poop(0), "Cant poop im not even hungry");
}

  /** @test */
  public function pumba_play_music()
  {
    $incredibles = new Incredibles();

    $output = $incredibles->playMusic();

    $this->assertTrue(strlen($output) > 0, "Play some music");
  }
