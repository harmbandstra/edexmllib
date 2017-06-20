<?php

namespace Edexml\Types\EDEXType;

/**
 * Class representing VestigingenAType
 */
class VestigingenAType
{

    /**
     * @property \Edexml\Types\VestigingType[] $vestiging
     */
    private $vestiging = array(
        
    );

    /**
     * Adds as vestiging
     *
     * @return self
     * @param \Edexml\Types\VestigingType $vestiging
     */
    public function addToVestiging(\Edexml\Types\VestigingType $vestiging)
    {
        $this->vestiging[] = $vestiging;
        return $this;
    }

    /**
     * isset vestiging
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVestiging($index)
    {
        return isset($this->vestiging[$index]);
    }

    /**
     * unset vestiging
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVestiging($index)
    {
        unset($this->vestiging[$index]);
    }

    /**
     * Gets as vestiging
     *
     * @return \Edexml\Types\VestigingType[]
     */
    public function getVestiging()
    {
        return $this->vestiging;
    }

    /**
     * Sets a new vestiging
     *
     * @param \Edexml\Types\VestigingType[] $vestiging
     * @return self
     */
    public function setVestiging(array $vestiging)
    {
        $this->vestiging = $vestiging;
        return $this;
    }


}

