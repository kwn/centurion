<?php

namespace Kwn\Centurion\Domain\Army;

use Kwn\Centurion\Domain\Army\Exception\CannotUpgradeLegion;

interface LegionType
{
    /**
     * @throws CannotUpgradeLegion
     * @return LegionType
     */
    public function upgrade();
}
