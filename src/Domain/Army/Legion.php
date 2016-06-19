<?php

namespace Kwn\Centurion\Domain\Army;

use Kwn\Centurion\Domain\Army\Exception\CannotUpgradeLegion;
use Kwn\Centurion\Domain\Army\LegionType\Infantry;

class Legion
{
    /**
     * @var Infantry
     */
    private $infantry;

    /**
     * @var Cavalry
     */
    private $cavalry;

    /**
     * @var Courage
     */
    private $courage;

    /**
     * @var Status
     */
    private $status;

    /**
     * @var LegionType
     */
    private $legionType;

    /**
     * @param Infantry   $infantry
     * @param Cavalry    $cavalry
     * @param Courage    $courage
     * @param Status     $status
     * @param LegionType $legionType
     */
    public function __construct(
        Infantry $infantry,
        Cavalry $cavalry,
        Courage $courage,
        Status $status,
        LegionType $legionType
    ) {
        $this->infantry = $infantry;
        $this->cavalry = $cavalry;
        $this->courage = $courage;
        $this->status = $status;
        $this->legionType = new Infantry();
    }

    /**
     * @throws CannotUpgradeLegion
     * @return void
     */
    public function upgrade()
    {
        $this->legionType = $this->legionType->upgrade();
    }
}
