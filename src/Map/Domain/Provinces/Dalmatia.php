<?php

namespace Kwn\Centurion\Map\Domain\Provinces;

use Kwn\Centurion\Map\Domain\Province;
use Kwn\Centurion\Map\Domain\Provinces;

final class Dalmatia implements Province
{
    /**
     * @var Provinces
     */
    private $neighbours;

    public function __construct()
    {
        $this->neighbours = new Provinces([
            new Italia(),
            new Alpes(),
            new Germania()
        ]);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return 'Dalmatia';
    }

    /**
     * @param Province $province
     *
     * @return bool
     */
    public function isNeighbourOf(Province $province): bool
    {
        return $this->neighbours->contains($province);
    }
}
