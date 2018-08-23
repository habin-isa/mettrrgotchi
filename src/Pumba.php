<?php

namespace Src;

use DateTime;

class Pumba extends Incredibles {

  protected const PICTURE = "
\"\" ___        ___
\"\"(    (      )    )
\"\")_(\ \.--./ /)_(
\"\"\"`)` 9  9 '('
\"\"\"(  )    (  )
\"\"\" `(_0__0_)`
\"\"\"\"\"`[]`\r\n";
    public function poop($hunger)
    {
        if ($this->hunger <= 0) {
            return 'Cant poop im not even hungry';
        } elsif($this->hunger <= 10) {
          return 'Should be more hungry to poop';
        } else {
            $hunger -= strlen($hunger);
            return self::POOP;
        }
    }
}
