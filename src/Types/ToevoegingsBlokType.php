<?php

namespace Edexml\Types;

/**
 * Class representing ToevoegingsBlokType
 *
 *
 * XSD Type: ToevoegingsBlokType
 */
class ToevoegingsBlokType
{

    /**
     * @property string $code
     */
    private $code = null;

    /**
     * @property string $omschrijving
     */
    private $omschrijving = null;

    /**
     * Gets as code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as omschrijving
     *
     * @return string
     */
    public function getOmschrijving()
    {
        return $this->omschrijving;
    }

    /**
     * Sets a new omschrijving
     *
     * @param string $omschrijving
     * @return self
     */
    public function setOmschrijving($omschrijving)
    {
        $this->omschrijving = $omschrijving;
        return $this;
    }


}

