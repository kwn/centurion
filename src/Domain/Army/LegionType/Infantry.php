<?php

namespace Kwn\Centurion\Domain\Army\LegionType;

use Kwn\Centurion\Domain\Army\Exception\CannotUpgradeLegion;
use Kwn\Centurion\Domain\Army\LegionType;

class Infantry implements LegionType
{
    /**
     * @throws CannotUpgradeLegion
     * @return LegionType
     */
    public function upgrade()
    {
        return new Cavalry();
    }
}
