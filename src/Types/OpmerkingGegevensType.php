<?php

namespace Edexml\Types;

/**
 * Class representing OpmerkingGegevensType
 *
 *
 * XSD Type: OpmerkingGegevensType
 */
class OpmerkingGegevensType extends ToevoegingsBlokType
{

    /**
     * @property string $opmerking
     */
    private $opmerking = null;

    /**
     * Gets as opmerking
     *
     * @return string
     */
    public function getOpmerking()
    {
        return $this->opmerking;
    }

    /**
     * Sets a new opmerking
     *
     * @param string $opmerking
     * @return self
     */
    public function setOpmerking($opmerking)
    {
        $this->opmerking = $opmerking;
        return $this;
    }


}

