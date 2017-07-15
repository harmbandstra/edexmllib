<?php

namespace Edexml\Types;

/**
 * Class representing VestigingType
 *
 *
 * XSD Type: VestigingType
 */
class VestigingType
{

    /**
     * @property string $key
     */
    private $key = null;

    /**
     * @property string $naam
     */
    private $naam = null;

    /**
     * @property string $omschrijving
     */
    private $omschrijving = null;

    /**
     * @property \DateTime $mutatiedatum
     */
    private $mutatiedatum = null;

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

    /**
     * Gets as naam
     *
     * @return string
     */
    public function getNaam()
    {
        return $this->naam;
    }

    /**
     * Sets a new naam
     *
     * @param string $naam
     * @return self
     */
    public function setNaam($naam)
    {
        $this->naam = $naam;
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

    /**
     * Gets as mutatiedatum
     *
     * @return \DateTime
     */
    public function getMutatiedatum()
    {
        return $this->mutatiedatum;
    }

    /**
     * Sets a new mutatiedatum
     *
     * @param \DateTime $mutatiedatum
     * @return self
     */
    public function setMutatiedatum(\DateTime $mutatiedatum)
    {
        $this->mutatiedatum = $mutatiedatum;
        return $this;
    }


}

