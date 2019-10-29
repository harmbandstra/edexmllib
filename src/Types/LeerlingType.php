<?php

namespace Edexml\Types;

/**
 * Class representing LeerlingType
 *
 *
 * XSD Type: LeerlingType
 */
class LeerlingType
{

    /**
     * @property string $key
     */
    private $key = null;

    /**
     * @property string $eckid
     */
    private $eckid = null;

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
     * @property \DateTime $geboortedatum
     */
    private $geboortedatum = null;

    /**
     * @property integer $geslacht
     */
    private $geslacht = null;

    /**
     * @property \DateTime $startOndwJgr3
     */
    private $startOndwJgr3 = null;

    /**
     * @property string $jaargroep
     */
    private $jaargroep = null;

    /**
     * @property \Edexml\Types\GroepReferentieType $groep
     */
    private $groep = null;

    /**
     * @property \Edexml\Types\GroepReferentieType[] $samengesteldeGroepen
     */
    private $samengesteldeGroepen = null;

    /**
     * @property \Edexml\Types\VestigingReferentieType $vestiging
     */
    private $vestiging = null;

    /**
     * @property string $gebruikersnaam
     */
    private $gebruikersnaam = null;

    /**
     * @property string $emailadres
     */
    private $emailadres = null;

    /**
     * @property string $fotourl
     */
    private $fotourl = null;

    /**
     * @property string $etniciteit
     */
    private $etniciteit = null;

    /**
     * @property string $land
     */
    private $land = null;

    /**
     * @property string $landVader
     */
    private $landVader = null;

    /**
     * @property string $landMoeder
     */
    private $landMoeder = null;

    /**
     * @property string $sofinummer
     */
    private $sofinummer = null;

    /**
     * @property string $bsn
     */
    private $bsn = null;

    /**
     * @property string $onderwijsnummer
     */
    private $onderwijsnummer = null;

    /**
     * @property string $bsnOndwnr4
     */
    private $bsnOndwnr4 = null;

    /**
     * @property string $rijksregisternummer
     */
    private $rijksregisternummer = null;

    /**
     * @property string $gewichtNieuw
     */
    private $gewichtNieuw = null;

    /**
     * @property string $gewicht
     */
    private $gewicht = null;

    /**
     * @property string $postcodenl
     */
    private $postcodenl = null;

    /**
     * @property string $postnummerbe
     */
    private $postnummerbe = null;

    /**
     * @property string $postcodeoverig
     */
    private $postcodeoverig = null;

    /**
     * @property \DateTime $instroomdatum
     */
    private $instroomdatum = null;

    /**
     * @property \DateTime $uitstroomdatum
     */
    private $uitstroomdatum = null;

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
     * Gets as eckid
     *
     * @return string
     */
    public function getEckid()
    {
        return $this->eckid;
    }

    /**
     * Sets a new eckid
     *
     * @param string $eckid
     * @return self
     */
    public function setEckid($eckid)
    {
        $this->eckid = $eckid;
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
     * Gets as geboortedatum
     *
     * @return \DateTime
     */
    public function getGeboortedatum()
    {
        return $this->geboortedatum;
    }

    /**
     * Sets a new geboortedatum
     *
     * @param \DateTime $geboortedatum
     * @return self
     */
    public function setGeboortedatum(\DateTime $geboortedatum)
    {
        $this->geboortedatum = $geboortedatum;
        return $this;
    }

    /**
     * Gets as geslacht
     *
     * @return integer
     */
    public function getGeslacht()
    {
        return $this->geslacht;
    }

    /**
     * Sets a new geslacht
     *
     * @param integer $geslacht
     * @return self
     */
    public function setGeslacht($geslacht)
    {
        $this->geslacht = $geslacht;
        return $this;
    }

    /**
     * Gets as startOndwJgr3
     *
     * @return \DateTime
     */
    public function getStartOndwJgr3()
    {
        return $this->startOndwJgr3;
    }

    /**
     * Sets a new startOndwJgr3
     *
     * @param \DateTime $startOndwJgr3
     * @return self
     */
    public function setStartOndwJgr3(\DateTime $startOndwJgr3)
    {
        $this->startOndwJgr3 = $startOndwJgr3;
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
     * Gets as groep
     *
     * @return \Edexml\Types\GroepReferentieType
     */
    public function getGroep()
    {
        return $this->groep;
    }

    /**
     * Sets a new groep
     *
     * @param \Edexml\Types\GroepReferentieType $groep
     * @return self
     */
    public function setGroep(\Edexml\Types\GroepReferentieType $groep)
    {
        $this->groep = $groep;
        return $this;
    }

    /**
     * Adds as samengesteldeGroep
     *
     * @return self
     * @param \Edexml\Types\GroepReferentieType $samengesteldeGroep
     */
    public function addToSamengesteldeGroepen(\Edexml\Types\GroepReferentieType $samengesteldeGroep)
    {
        $this->samengesteldeGroepen[] = $samengesteldeGroep;
        return $this;
    }

    /**
     * isset samengesteldeGroepen
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSamengesteldeGroepen($index)
    {
        return isset($this->samengesteldeGroepen[$index]);
    }

    /**
     * unset samengesteldeGroepen
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSamengesteldeGroepen($index)
    {
        unset($this->samengesteldeGroepen[$index]);
    }

    /**
     * Gets as samengesteldeGroepen
     *
     * @return \Edexml\Types\GroepReferentieType[]
     */
    public function getSamengesteldeGroepen()
    {
        return $this->samengesteldeGroepen;
    }

    /**
     * Sets a new samengesteldeGroepen
     *
     * @param \Edexml\Types\GroepReferentieType[] $samengesteldeGroepen
     * @return self
     */
    public function setSamengesteldeGroepen(array $samengesteldeGroepen)
    {
        $this->samengesteldeGroepen = $samengesteldeGroepen;
        return $this;
    }

    /**
     * Gets as vestiging
     *
     * @return \Edexml\Types\VestigingReferentieType
     */
    public function getVestiging()
    {
        return $this->vestiging;
    }

    /**
     * Sets a new vestiging
     *
     * @param \Edexml\Types\VestigingReferentieType $vestiging
     * @return self
     */
    public function setVestiging(\Edexml\Types\VestigingReferentieType $vestiging)
    {
        $this->vestiging = $vestiging;
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
     * Gets as fotourl
     *
     * @return string
     */
    public function getFotourl()
    {
        return $this->fotourl;
    }

    /**
     * Sets a new fotourl
     *
     * @param string $fotourl
     * @return self
     */
    public function setFotourl($fotourl)
    {
        $this->fotourl = $fotourl;
        return $this;
    }

    /**
     * Gets as etniciteit
     *
     * @return string
     */
    public function getEtniciteit()
    {
        return $this->etniciteit;
    }

    /**
     * Sets a new etniciteit
     *
     * @param string $etniciteit
     * @return self
     */
    public function setEtniciteit($etniciteit)
    {
        $this->etniciteit = $etniciteit;
        return $this;
    }

    /**
     * Gets as land
     *
     * @return string
     */
    public function getLand()
    {
        return $this->land;
    }

    /**
     * Sets a new land
     *
     * @param string $land
     * @return self
     */
    public function setLand($land)
    {
        $this->land = $land;
        return $this;
    }

    /**
     * Gets as landVader
     *
     * @return string
     */
    public function getLandVader()
    {
        return $this->landVader;
    }

    /**
     * Sets a new landVader
     *
     * @param string $landVader
     * @return self
     */
    public function setLandVader($landVader)
    {
        $this->landVader = $landVader;
        return $this;
    }

    /**
     * Gets as landMoeder
     *
     * @return string
     */
    public function getLandMoeder()
    {
        return $this->landMoeder;
    }

    /**
     * Sets a new landMoeder
     *
     * @param string $landMoeder
     * @return self
     */
    public function setLandMoeder($landMoeder)
    {
        $this->landMoeder = $landMoeder;
        return $this;
    }

    /**
     * Gets as sofinummer
     *
     * @return string
     */
    public function getSofinummer()
    {
        return $this->sofinummer;
    }

    /**
     * Sets a new sofinummer
     *
     * @param string $sofinummer
     * @return self
     */
    public function setSofinummer($sofinummer)
    {
        $this->sofinummer = $sofinummer;
        return $this;
    }

    /**
     * Gets as bsn
     *
     * @return string
     */
    public function getBsn()
    {
        return $this->bsn;
    }

    /**
     * Sets a new bsn
     *
     * @param string $bsn
     * @return self
     */
    public function setBsn($bsn)
    {
        $this->bsn = $bsn;
        return $this;
    }

    /**
     * Gets as onderwijsnummer
     *
     * @return string
     */
    public function getOnderwijsnummer()
    {
        return $this->onderwijsnummer;
    }

    /**
     * Sets a new onderwijsnummer
     *
     * @param string $onderwijsnummer
     * @return self
     */
    public function setOnderwijsnummer($onderwijsnummer)
    {
        $this->onderwijsnummer = $onderwijsnummer;
        return $this;
    }

    /**
     * Gets as bsnOndwnr4
     *
     * @return string
     */
    public function getBsnOndwnr4()
    {
        return $this->bsnOndwnr4;
    }

    /**
     * Sets a new bsnOndwnr4
     *
     * @param string $bsnOndwnr4
     * @return self
     */
    public function setBsnOndwnr4($bsnOndwnr4)
    {
        $this->bsnOndwnr4 = $bsnOndwnr4;
        return $this;
    }

    /**
     * Gets as rijksregisternummer
     *
     * @return string
     */
    public function getRijksregisternummer()
    {
        return $this->rijksregisternummer;
    }

    /**
     * Sets a new rijksregisternummer
     *
     * @param string $rijksregisternummer
     * @return self
     */
    public function setRijksregisternummer($rijksregisternummer)
    {
        $this->rijksregisternummer = $rijksregisternummer;
        return $this;
    }

    /**
     * Gets as gewichtNieuw
     *
     * @return string
     */
    public function getGewichtNieuw()
    {
        return $this->gewichtNieuw;
    }

    /**
     * Sets a new gewichtNieuw
     *
     * @param string $gewichtNieuw
     * @return self
     */
    public function setGewichtNieuw($gewichtNieuw)
    {
        $this->gewichtNieuw = $gewichtNieuw;
        return $this;
    }

    /**
     * Gets as gewicht
     *
     * @return string
     */
    public function getGewicht()
    {
        return $this->gewicht;
    }

    /**
     * Sets a new gewicht
     *
     * @param string $gewicht
     * @return self
     */
    public function setGewicht($gewicht)
    {
        $this->gewicht = $gewicht;
        return $this;
    }

    /**
     * Gets as postcodenl
     *
     * @return string
     */
    public function getPostcodenl()
    {
        return $this->postcodenl;
    }

    /**
     * Sets a new postcodenl
     *
     * @param string $postcodenl
     * @return self
     */
    public function setPostcodenl($postcodenl)
    {
        $this->postcodenl = $postcodenl;
        return $this;
    }

    /**
     * Gets as postnummerbe
     *
     * @return string
     */
    public function getPostnummerbe()
    {
        return $this->postnummerbe;
    }

    /**
     * Sets a new postnummerbe
     *
     * @param string $postnummerbe
     * @return self
     */
    public function setPostnummerbe($postnummerbe)
    {
        $this->postnummerbe = $postnummerbe;
        return $this;
    }

    /**
     * Gets as postcodeoverig
     *
     * @return string
     */
    public function getPostcodeoverig()
    {
        return $this->postcodeoverig;
    }

    /**
     * Sets a new postcodeoverig
     *
     * @param string $postcodeoverig
     * @return self
     */
    public function setPostcodeoverig($postcodeoverig)
    {
        $this->postcodeoverig = $postcodeoverig;
        return $this;
    }

    /**
     * Gets as instroomdatum
     *
     * @return \DateTime
     */
    public function getInstroomdatum()
    {
        return $this->instroomdatum;
    }

    /**
     * Sets a new instroomdatum
     *
     * @param \DateTime $instroomdatum
     * @return self
     */
    public function setInstroomdatum(\DateTime $instroomdatum)
    {
        $this->instroomdatum = $instroomdatum;
        return $this;
    }

    /**
     * Gets as uitstroomdatum
     *
     * @return \DateTime
     */
    public function getUitstroomdatum()
    {
        return $this->uitstroomdatum;
    }

    /**
     * Sets a new uitstroomdatum
     *
     * @param \DateTime $uitstroomdatum
     * @return self
     */
    public function setUitstroomdatum(\DateTime $uitstroomdatum)
    {
        $this->uitstroomdatum = $uitstroomdatum;
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

