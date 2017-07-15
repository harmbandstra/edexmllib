<?php

namespace Edexml\Types;

/**
 * Class representing LeerlingReferentieType
 *
 *
 * XSD Type: LeerlingReferentieType
 */
class LeerlingReferentieType
{

    /**
     * @property string $key
     */
    private $key = null;

    /**
     * Gets as key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Sets a new key
     *
     * @param string $key
     * @return self
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }


}

