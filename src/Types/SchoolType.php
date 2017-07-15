<?php

namespace Edexml\Types;

/**
 * Class representing SchoolType
 *
 *
 * XSD Type: SchoolType
 */
class SchoolType
{

    /**
     * @property string $schooljaar
     */
    private $schooljaar = null;

    /**
     * @property \DateTime $peildatum
     */
    private $peildatum = null;

    /**
     * @property string $brincode
     */
    private $brincode = null;

    /**
     * De inhoud 00 betekent hetzelfde als leeg
     *
     * @property string $dependancecode
     */
    private $dependancecode = null;

    /**
     * @property string $schoolkey
     */
    private $schoolkey = null;

    /**
     * @property string $instellingsnummer
     */
    private $instellingsnummer = null;

    /**
     * @property \DateTime $aanmaakdatum
     */
    private $aanmaakdatum = null;

    /**
     * @property string $auteur
     */
    private $auteur = null;

    /**
     * Altijd gelijk aan de versie van de XSD waaraan gerefereerd wordt
     *
     * @property string $xsdversie
     */
    private $xsdversie = null;

    /**
     * @property string $commentaar
     */
    private $commentaar = null;

    /**
     * @property \Edexml\Types\ToevoegingsBlokType[] $toevoegingen
     */
    private $toevoegingen = null;

    /**
     * Gets as schooljaar
     *
     * @return string
     */
    public function getSchooljaar()
    {
        return $this->schooljaar;
    }

    /**
     * Sets a new schooljaar
     *
     * @param string $schooljaar
     * @return self
     */
    public function setSchooljaar($schooljaar)
    {
        $this->schooljaar = $schooljaar;
        return $this;
    }

    /**
     * Gets as peildatum
     *
     * @return \DateTime
     */
    public function getPeildatum()
    {
        return $this->peildatum;
    }

    /**
     * Sets a new peildatum
     *
     * @param \DateTime $peildatum
     * @return self
     */
    public function setPeildatum(\DateTime $peildatum)
    {
        $this->peildatum = $peildatum;
        return $this;
    }

    /**
     * Gets as brincode
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
     * De inhoud 00 betekent hetzelfde als leeg
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
     * De inhoud 00 betekent hetzelfde als leeg
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

    /**
     * Gets as instellingsnummer
     *
     * @return string
     */
    public function getInstellingsnummer()
    {
        return $this->instellingsnummer;
    }

    /**
     * Sets a new instellingsnummer
     *
     * @param string $instellingsnummer
     * @return self
     */
    public function setInstellingsnummer($instellingsnummer)
    {
        $this->instellingsnummer = $instellingsnummer;
        return $this;
    }

    /**
     * Gets as aanmaakdatum
     *
     * @return \DateTime
     */
    public function getAanmaakdatum()
    {
        return $this->aanmaakdatum;
    }

    /**
     * Sets a new aanmaakdatum
     *
     * @param \DateTime $aanmaakdatum
     * @return self
     */
    public function setAanmaakdatum(\DateTime $aanmaakdatum)
    {
        $this->aanmaakdatum = $aanmaakdatum;
        return $this;
    }

    /**
     * Gets as auteur
     *
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Sets a new auteur
     *
     * @param string $auteur
     * @return self
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
        return $this;
    }

    /**
     * Gets as xsdversie
     *
     * Altijd gelijk aan de versie van de XSD waaraan gerefereerd wordt
     *
     * @return string
     */
    public function getXsdversie()
    {
        return $this->xsdversie;
    }

    /**
     * Sets a new xsdversie
     *
     * Altijd gelijk aan de versie van de XSD waaraan gerefereerd wordt
     *
     * @param string $xsdversie
     * @return self
     */
    public function setXsdversie($xsdversie)
    {
        $this->xsdversie = $xsdversie;
        return $this;
    }

    /**
     * Gets as commentaar
     *
     * @return string
     */
    public function getCommentaar()
    {
        return $this->commentaar;
    }

    /**
     * Sets a new commentaar
     *
     * @param string $commentaar
     * @return self
     */
    public function setCommentaar($commentaar)
    {
        $this->commentaar = $commentaar;
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


}

