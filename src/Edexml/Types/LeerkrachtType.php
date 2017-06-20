<?php

namespace Edexml\Types;

/**
 * Class representing LeerkrachtType
 *
 *
 * XSD Type: LeerkrachtType
 */
class LeerkrachtType
{

    /**
     * @property string $key
     */
    private $key = null;

    /**
     * @property string $achternaam
     */
    private $achternaam = null;

    /**
     * @property string $voorvoegsel
     */
    private $voorvoegsel = null;

    /**
     * @property string $voornamen
     */
    private $voornamen = null;

    /**
     * @property string $voorletters1
     */
    private $voorletters1 = null;

    /**
     * @property string $roepnaam
     */
    private $roepnaam = null;

    /**
     * @property string $gebruikersnaam
     */
    private $gebruikersnaam = null;

    /**
     * @property string $emailadres
     */
    private $emailadres = null;

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
     * @property \Edexml\Types\LeerkrachtGroepenReferentieType $groepen
     */
    private $groepen = null;

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
     * Gets as achternaam
     *
     * @return string
     */
    public function getAchternaam()
    {
        return $this->achternaam;
    }

    /**
     * Sets a new achternaam
     *
     * @param string $achternaam
     * @return self
     */
    public function setAchternaam($achternaam)
    {
        $this->achternaam = $achternaam;
        return $this;
    }

    /**
     * Gets as voorvoegsel
     *
     * @return string
     */
    public function getVoorvoegsel()
    {
        return $this->voorvoegsel;
    }

    /**
     * Sets a new voorvoegsel
     *
     * @param string $voorvoegsel
     * @return self
     */
    public function setVoorvoegsel($voorvoegsel)
    {
        $this->voorvoegsel = $voorvoegsel;
        return $this;
    }

    /**
     * Gets as voornamen
     *
     * @return string
     */
    public function getVoornamen()
    {
        return $this->voornamen;
    }

    /**
     * Sets a new voornamen
     *
     * @param string $voornamen
     * @return self
     */
    public function setVoornamen($voornamen)
    {
        $this->voornamen = $voornamen;
        return $this;
    }

    /**
     * Gets as voorletters1
     *
     * @return string
     */
    public function getVoorletters1()
    {
        return $this->voorletters1;
    }

    /**
     * Sets a new voorletters1
     *
     * @param string $voorletters1
     * @return self
     */
    public function setVoorletters1($voorletters1)
    {
        $this->voorletters1 = $voorletters1;
        return $this;
    }

    /**
     * Gets as roepnaam
     *
     * @return string
     */
    public function getRoepnaam()
    {
        return $this->roepnaam;
    }

    /**
     * Sets a new roepnaam
     *
     * @param string $roepnaam
     * @return self
     */
    public function setRoepnaam($roepnaam)
    {
        $this->roepnaam = $roepnaam;
        return $this;
    }

    /**
     * Gets as gebruikersnaam
     *
     * @return string
     */
    public function getGebruikersnaam()
    {
        return $this->gebruikersnaam;
    }

    /**
     * Sets a new gebruikersnaam
     *
     * @param string $gebruikersnaam
     * @return self
     */
    public function setGebruikersnaam($gebruikersnaam)
    {
        $this->gebruikersnaam = $gebruikersnaam;
        return $this;
    }

    /**
     * Gets as emailadres
     *
     * @return string
     */
    public function getEmailadres()
    {
        return $this->emailadres;
    }

    /**
     * Sets a new emailadres
     *
     * @param string $emailadres
     * @return self
     */
    public function setEmailadres($emailadres)
    {
        $this->emailadres = $emailadres;
        return $this;
    }

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

    /**
     * Gets as groepen
     *
     * @return \Edexml\Types\LeerkrachtGroepenReferentieType
     */
    public function getGroepen()
    {
        return $this->groepen;
    }

    /**
     * Sets a new groepen
     *
     * @param \Edexml\Types\LeerkrachtGroepenReferentieType $groepen
     * @return self
     */
    public function setGroepen(\Edexml\Types\LeerkrachtGroepenReferentieType $groepen)
    {
        $this->groepen = $groepen;
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

