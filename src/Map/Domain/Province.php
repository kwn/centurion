<?php

namespace Kwn\Centurion\Map\Domain;

interface Province
{
    /**
     * @return string
     */
    public function __toString(): string;

    /**
     * @param Province $province
     *
     * @return bool
     */
    public function isNeighbourOf(Province $province): bool;
}
