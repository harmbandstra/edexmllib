<?php

namespace Edexml\Types\EDEXType;

/**
 * Class representing LeerlingenAType
 */
class LeerlingenAType
{

    /**
     * @property \Edexml\Types\LeerlingType[] $leerling
     */
    private $leerling = array(
        
    );

    /**
     * Adds as leerling
     *
     * @return self
     * @param \Edexml\Types\LeerlingType $leerling
     */
    public function addToLeerling(\Edexml\Types\LeerlingType $leerling)
    {
        $this->leerling[] = $leerling;
        return $this;
    }

    /**
     * isset leerling
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLeerling($index)
    {
        return isset($this->leerling[$index]);
    }

    /**
     * unset leerling
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLeerling($index)
    {
        unset($this->leerling[$index]);
    }

    /**
     * Gets as leerling
     *
     * @return \Edexml\Types\LeerlingType[]
     */
    public function getLeerling()
    {
        return $this->leerling;
    }

    /**
     * Sets a new leerling
     *
     * @param \Edexml\Types\LeerlingType[] $leerling
     * @return self
     */
    public function setLeerling(array $leerling)
    {
        $this->leerling = $leerling;
        return $this;
    }


}

