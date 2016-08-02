<?php

namespace Kwn\Centurion\Map\Domain\Provinces;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GaulSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Kwn\Centurion\Map\Domain\Provinces\Gaul');
    }
}
