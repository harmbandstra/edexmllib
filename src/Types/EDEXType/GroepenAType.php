<?php

namespace Edexml\Types\EDEXType;

/**
 * Class representing GroepenAType
 */
class GroepenAType
{

    /**
     * @property \Edexml\Types\GroepType[] $groep
     */
    private $groep = array(
        
    );

    /**
     * @property \Edexml\Types\SamengesteldeGroepType[] $samengesteldeGroep
     */
    private $samengesteldeGroep = array(
        
    );

    /**
     * Adds as groep
     *
     * @return self
     * @param \Edexml\Types\GroepType $groep
     */
    public function addToGroep(\Edexml\Types\GroepType $groep)
    {
        $this->groep[] = $groep;
        return $this;
    }

    /**
     * isset groep
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGroep($index)
    {
        return isset($this->groep[$index]);
    }

    /**
     * unset groep
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGroep($index)
    {
        unset($this->groep[$index]);
    }

    /**
     * Gets as groep
     *
     * @return \Edexml\Types\GroepType[]
     */
    public function getGroep()
    {
        return $this->groep;
    }

    /**
     * Sets a new groep
     *
     * @param \Edexml\Types\GroepType[] $groep
     * @return self
     */
    public function setGroep(array $groep)
    {
        $this->groep = $groep;
        return $this;
    }

    /**
     * Adds as samengesteldeGroep
     *
     * @return self
     * @param \Edexml\Types\SamengesteldeGroepType $samengesteldeGroep
     */
    public function addToSamengesteldeGroep(\Edexml\Types\SamengesteldeGroepType $samengesteldeGroep)
    {
        $this->samengesteldeGroep[] = $samengesteldeGroep;
        return $this;
    }

    /**
     * isset samengesteldeGroep
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSamengesteldeGroep($index)
    {
        return isset($this->samengesteldeGroep[$index]);
    }

    /**
     * unset samengesteldeGroep
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSamengesteldeGroep($index)
    {
        unset($this->samengesteldeGroep[$index]);
    }

    /**
     * Gets as samengesteldeGroep
     *
     * @return \Edexml\Types\SamengesteldeGroepType[]
     */
    public function getSamengesteldeGroep()
    {
        return $this->samengesteldeGroep;
    }

    /**
     * Sets a new samengesteldeGroep
     *
     * @param \Edexml\Types\SamengesteldeGroepType[] $samengesteldeGroep
     * @return self
     */
    public function setSamengesteldeGroep(array $samengesteldeGroep)
    {
        $this->samengesteldeGroep = $samengesteldeGroep;
        return $this;
    }


}

