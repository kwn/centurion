<?php

namespace Kwn\Centurion\Map\Domain\Provinces;

use Kwn\Centurion\Map\Domain\Province;
use Kwn\Centurion\Map\Domain\Provinces;

final class Italia implements Province
{
    /**
     * @var Provinces
     */
    private $neighbours;

    public function __construct()
    {
        $this->neighbours = new Provinces([
            new Narbonensis(),
            new Alpes(),
            new Dalmatia()
        ]);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return 'Italia';
    }

    /**
     * @param Province $province
     *
     * @return bool
     */
    public function isNeighbourOf(Province $province): bool
    {
        $this->neighbours->contains($province);
    }
}
