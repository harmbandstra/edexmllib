<?php

namespace Edexml\Types\SamengesteldeGroepType;

/**
 * Class representing ToevoegingenAType
 */
class ToevoegingenAType
{

    /**
     * @property \Edexml\Types\ToevoegingsBlokType[] $blok
     */
    private $blok = array(
        
    );

    /**
     * Adds as blok
     *
     * @return self
     * @param \Edexml\Types\ToevoegingsBlokType $blok
     */
    public function addToBlok(\Edexml\Types\ToevoegingsBlokType $blok)
    {
        $this->blok[] = $blok;
        return $this;
    }

    /**
     * isset blok
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBlok($index)
    {
        return isset($this->blok[$index]);
    }

    /**
     * unset blok
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBlok($index)
    {
        unset($this->blok[$index]);
    }

    /**
     * Gets as blok
     *
     * @return \Edexml\Types\ToevoegingsBlokType[]
     */
    public function getBlok()
    {
        return $this->blok;
    }

    /**
     * Sets a new blok
     *
     * @param \Edexml\Types\ToevoegingsBlokType[] $blok
     * @return self
     */
    public function setBlok(array $blok)
    {
        $this->blok = $blok;
        return $this;
    }


}

