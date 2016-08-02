<?php

namespace Kwn\Centurion\Map\Domain;

class Provinces implements \Countable
{
    /**
     * @var Province[]
     */
    private $provinces;

    /**
     * @param Province[] $provinces
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(array $provinces = [])
    {
        foreach ($provinces as $province) {
            if (!$province instanceof Province) {
                throw new \InvalidArgumentException();
            }
        }

        $this->provinces = array_unique($provinces);
    }

    /**
     * @param Province $province
     *
     * @return bool
     */
    public function contains(Province $province): bool
    {
        foreach ($this->provinces as $collectionProvince) {
            if (get_class($collectionProvince) === get_class($province)) {
                return true;
            }
        }

        return false;
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->provinces);
    }
}
