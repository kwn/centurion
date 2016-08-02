<?php

namespace Kwn\Centurion\Map\Domain\Provinces;

use PhpSpec\ObjectBehavior;

class AlpesSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Kwn\Centurion\Map\Domain\Provinces\Alpes');
    }

    function it_is_neighbour_of_italia()
    {
        $this->isNeighbourOf(new Italia())->shouldReturn(true);
    }

    function it_is_neighbour_of_narbonesis()
    {
        $this->isNeighbourOf(new Narbonensis())->shouldReturn(true);
    }

    function it_is_neighbour_of_gaul()
    {
        $this->isNeighbourOf(new Gaul())->shouldReturn(true);
    }

    function it_is_neighbour_of_germania()
    {
        $this->isNeighbourOf(new Germania())->shouldReturn(true);
    }

    function it_is_neighbour_of_dalmatia()
    {
        $this->isNeighbourOf(new Dalmatia())->shouldReturn(true);
    }
}
