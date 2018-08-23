<?php

namespace Src;

use DateTime;

class Timone extends Incredibles {

    protected const PICTURE = "
    \"\"(\_          _/)
    \"\")  (        )  (
    \"\"(    (      )    )
    \"\")_(\ \.--./ /)_(
    \"\"\"`)` 6  6 '('
    \"\"\"/        \
    \"\"\"(  )    (  )
    \"\"\" `(_c__c_)`
    \"\"\"\"\"`--`\r\n";
       

    public function poop($hunger)
    {
        if ($this->hunger <= 0) {
            return 'Cant poop im not even hungry';
        } elsif($this->hunger <= 5) {
          return 'Should be more hungry to poop';
        } else {
            $hunger -= strlen($hunger);
            return self::POOP;
        }
    }
}
