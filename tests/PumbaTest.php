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

  public function object_is_pumba_instance()
  {
    $pumba = new Pumba();

    $failMsg = "Class name should be 'Src\Pumba'";
    $this->assertSame(get_class($pumba), 'Src\Pumba', $failMsg);
  }
}
