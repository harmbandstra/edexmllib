<?php

namespace Edexml\Types;

/**
 * Class representing LeerkrachtGroepenReferentieType
 *
 *
 * XSD Type: LeerkrachtGroepenReferentieType
 */
class LeerkrachtGroepenReferentieType
{

    /**
     * @property \Edexml\Types\LeerkrachtGroepenReferentieType\GroepAType[] $groep
     */
    private $groep = array(
        
    );

    /**
     * @property
     * \Edexml\Types\LeerkrachtGroepenReferentieType\SamengesteldeGroepAType[]
     * $samengesteldeGroep
     */
    private $samengesteldeGroep = array(
        
    );

    /**
     * Adds as groep
     *
     * @return self
     * @param \Edexml\Types\LeerkrachtGroepenReferentieType\GroepAType $groep
     */
    public function addToGroep(\Edexml\Types\LeerkrachtGroepenReferentieType\GroepAType $groep)
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
     * @return \Edexml\Types\LeerkrachtGroepenReferentieType\GroepAType[]
     */
    public function getGroep()
    {
        return $this->groep;
    }

    /**
     * Sets a new groep
     *
     * @param \Edexml\Types\LeerkrachtGroepenReferentieType\GroepAType[] $groep
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
     * @param \Edexml\Types\LeerkrachtGroepenReferentieType\SamengesteldeGroepAType
     * $samengesteldeGroep
     */
    public function addToSamengesteldeGroep(\Edexml\Types\LeerkrachtGroepenReferentieType\SamengesteldeGroepAType $samengesteldeGroep)
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
     * @return \Edexml\Types\LeerkrachtGroepenReferentieType\SamengesteldeGroepAType[]
     */
    public function getSamengesteldeGroep()
    {
        return $this->samengesteldeGroep;
    }

    /**
     * Sets a new samengesteldeGroep
     *
     * @param \Edexml\Types\LeerkrachtGroepenReferentieType\SamengesteldeGroepAType[]
     * $samengesteldeGroep
     * @return self
     */
    public function setSamengesteldeGroep(array $samengesteldeGroep)
    {
        $this->samengesteldeGroep = $samengesteldeGroep;
        return $this;
    }


}

