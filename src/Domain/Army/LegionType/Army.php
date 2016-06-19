<?php

namespace Kwn\Centurion\Domain\Army\LegionType;

use Kwn\Centurion\Domain\Army\Exception\CannotUpgradeLegion;
use Kwn\Centurion\Domain\Army\LegionType;

class Army implements LegionType
{
    /**
     * @throws CannotUpgradeLegion
     * @return LegionType
     */
    public function upgrade()
    {
        throw new CannotUpgradeLegion('Cannot upgrade legion with a type of army.');
    }
}
