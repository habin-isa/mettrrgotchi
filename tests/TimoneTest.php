<?php

namespace Tests;

use Src\Timone;
use PHPUnit\Framework\TestCase;

class TimoneTest extends TestCase
{
  /** @test */
    public function class_name_is_timone()
    {
      $failMsg = "Class name should be 'Src\Timone'";
      $this->assertSame(Timone::class, 'Src\Timone', $failMsg);
    }

  /** @test */
    public function object_is_timone_instance()
    {
      $timone = new Timone();

      $failMsg = "Class name should be 'Src\Timone'";
      $this->assertSame(get_class($timone), 'Src\Timone', $failMsg);
    }

  /** @test */
    public function Timone_can_poop()
    {
      $timone = new Timone();

      $above5 = $timone->poop(8);

      $timone->munch('xxx');

      $below5 = $timone->poop($hunger);

      $this->assertTrue(strlen($above5) == 0, $this::POOP);
      $this->assertTrue(strlen($below5) >= 1, "Should be more hungry to poop");
      $this->assertTrue($timone->poop(0), "Cant poop im not even hungry");
    }

}
