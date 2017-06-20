<?php

namespace Edexml\Types;

/**
 * Class representing LeerkrachtGroepReferentieType
 *
 *
 * XSD Type: LeerkrachtGroepReferentieType
 */
class LeerkrachtGroepReferentieType extends GroepReferentieType
{

    /**
     * @property string[] $rol
     */
    private $rol = array(
        
    );

    /**
     * @property string[] $rolomschrijving
     */
    private $rolomschrijving = array(
        
    );

    /**
     * Adds as rol
     *
     * @return self
     * @param string $rol
     */
    public function addToRol($rol)
    {
        $this->rol[] = $rol;
        return $this;
    }

    /**
     * isset rol
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRol($index)
    {
        return isset($this->rol[$index]);
    }

    /**
     * unset rol
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRol($index)
    {
        unset($this->rol[$index]);
    }

    /**
     * Gets as rol
     *
     * @return string[]
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Sets a new rol
     *
     * @param string $rol
     * @return self
     */
    public function setRol(array $rol)
    {
        $this->rol = $rol;
        return $this;
    }

    /**
     * Adds as rolomschrijving
     *
     * @return self
     * @param string $rolomschrijving
     */
    public function addToRolomschrijving($rolomschrijving)
    {
        $this->rolomschrijving[] = $rolomschrijving;
        return $this;
    }

    /**
     * isset rolomschrijving
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRolomschrijving($index)
    {
        return isset($this->rolomschrijving[$index]);
    }

    /**
     * unset rolomschrijving
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRolomschrijving($index)
    {
        unset($this->rolomschrijving[$index]);
    }

    /**
     * Gets as rolomschrijving
     *
     * @return string[]
     */
    public function getRolomschrijving()
    {
        return $this->rolomschrijving;
    }

    /**
     * Sets a new rolomschrijving
     *
     * @param string $rolomschrijving
     * @return self
     */
    public function setRolomschrijving(array $rolomschrijving)
    {
        $this->rolomschrijving = $rolomschrijving;
        return $this;
    }


}

