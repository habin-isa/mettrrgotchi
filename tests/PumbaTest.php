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

}
