<?php

namespace My\Traits;
use My\Abstract\Getter;

require __DIR__ . '/../../vendor/autoload.php';

/*
Почините тест написав код вместо троеточия

    class A {
    ...
    }
    assert(
        "GGGG" ==
        (new A) . (new A)
    );
*/

//class A
//{
//    public string $a = 'GG';
//
//    public function  __toString()
//    {
//        return $this->a;
//    }
//}

class A
{
    use Getter;
}

assert(
    "GGGG" ==
    (new A) . (new A)
);
