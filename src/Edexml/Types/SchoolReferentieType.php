<?php

namespace Edexml\Types;

/**
 * Class representing SchoolReferentieType
 *
 *
 * XSD Type: SchoolReferentieType
 */
class SchoolReferentieType
{

    /**
     * Brincode school. Formaat 99XX, evt gevolg door 1 tot 2 cijfers
     *
     * @property string $brincode
     */
    private $brincode = null;

    /**
     * @property string $dependancecode
     */
    private $dependancecode = null;

    /**
     * @property string $schoolkey
     */
    private $schoolkey = null;

    /**
     * Gets as brincode
     *
     * Brincode school. Formaat 99XX, evt gevolg door 1 tot 2 cijfers
     *
     * @return string
     */
    public function getBrincode()
    {
        return $this->brincode;
    }

    /**
     * Sets a new brincode
     *
     * Brincode school. Formaat 99XX, evt gevolg door 1 tot 2 cijfers
     *
     * @param string $brincode
     * @return self
     */
    public function setBrincode($brincode)
    {
        $this->brincode = $brincode;
        return $this;
    }

    /**
     * Gets as dependancecode
     *
     * @return string
     */
    public function getDependancecode()
    {
        return $this->dependancecode;
    }

    /**
     * Sets a new dependancecode
     *
     * @param string $dependancecode
     * @return self
     */
    public function setDependancecode($dependancecode)
    {
        $this->dependancecode = $dependancecode;
        return $this;
    }

    /**
     * Gets as schoolkey
     *
     * @return string
     */
    public function getSchoolkey()
    {
        return $this->schoolkey;
    }

    /**
     * Sets a new schoolkey
     *
     * @param string $schoolkey
     * @return self
     */
    public function setSchoolkey($schoolkey)
    {
        $this->schoolkey = $schoolkey;
        return $this;
    }


}

