<?php

namespace Edexml\Types;

/**
 * Class representing GroepType
 *
 *
 * XSD Type: GroepType
 */
class GroepType
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
     * @property string $jaargroep
     */
    private $jaargroep = null;

    /**
     * @property string $omschrijving
     */
    private $omschrijving = null;

    /**
     * @property \Edexml\Types\ToevoegingsBlokType[] $toevoegingen
     */
    private $toevoegingen = null;

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
     * Gets as jaargroep
     *
     * @return string
     */
    public function getJaargroep()
    {
        return $this->jaargroep;
    }

    /**
     * Sets a new jaargroep
     *
     * @param string $jaargroep
     * @return self
     */
    public function setJaargroep($jaargroep)
    {
        $this->jaargroep = $jaargroep;
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
     * Adds as blok
     *
     * @return self
     * @param \Edexml\Types\ToevoegingsBlokType $blok
     */
    public function addToToevoegingen(\Edexml\Types\ToevoegingsBlokType $blok)
    {
        $this->toevoegingen[] = $blok;
        return $this;
    }

    /**
     * isset toevoegingen
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetToevoegingen($index)
    {
        return isset($this->toevoegingen[$index]);
    }

    /**
     * unset toevoegingen
     *
     * @param scalar $index
     * @return void
     */
    public function unsetToevoegingen($index)
    {
        unset($this->toevoegingen[$index]);
    }

    /**
     * Gets as toevoegingen
     *
     * @return \Edexml\Types\ToevoegingsBlokType[]
     */
    public function getToevoegingen()
    {
        return $this->toevoegingen;
    }

    /**
     * Sets a new toevoegingen
     *
     * @param \Edexml\Types\ToevoegingsBlokType[] $toevoegingen
     * @return self
     */
    public function setToevoegingen(array $toevoegingen)
    {
        $this->toevoegingen = $toevoegingen;
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

