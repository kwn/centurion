<?php

namespace Kwn\Centurion\Map\Domain;

use Kwn\Centurion\Map\Domain\Provinces\Dummy;
use Kwn\Centurion\Map\Domain\Provinces\Zummy;
use PhpSpec\ObjectBehavior;

class ProvincesSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Kwn\Centurion\Map\Domain\Provinces');
    }

    function it_can_be_initialized_with_provinces()
    {
        $dummy = new Dummy();
        $zummy = new Zummy();

        $this->beConstructedWith([$dummy, $zummy]);

        $this->contains($dummy)->shouldReturn(true);
        $this->contains($zummy)->shouldReturn(true);
    }

    function it_throws_exception_when_initialized_with_non_province()
    {
        $this->beConstructedWith([new \DateTime()]);

        $this->shouldThrow(\InvalidArgumentException::class)->duringInstantiation();
    }

    function it_removes_duplicates_during_initialization()
    {
        $this->beConstructedWith([new Dummy(), new Dummy(), new Zummy()]);

        $this->count()->shouldReturn(2);
    }
}
