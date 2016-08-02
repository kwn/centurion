<?php

namespace Kwn\Centurion\Map\Domain\Provinces;

use Kwn\Centurion\Map\Domain\Province;

final class Dummy implements Province
{
    /**
     * @return string
     */
    public function __toString(): string
    {
        return 'Dummy';
    }

    /**
     * @param Province $province
     *
     * @return bool
     */
    public function isNeighbourOf(Province $province): bool
    {
        return false;
    }
}
