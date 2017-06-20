<?php

namespace Edexml\Types;

/**
 * Class representing EDEXType
 *
 *
 * XSD Type: EDEXType
 */
class EDEXType
{

    /**
     * @property \Edexml\Types\SchoolType $school
     */
    private $school = null;

    /**
     * @property \Edexml\Types\VestigingType[] $vestigingen
     */
    private $vestigingen = null;

    /**
     * @property \Edexml\Types\EDEXType\GroepenAType $groepen
     */
    private $groepen = null;

    /**
     * @property \Edexml\Types\LeerlingType[] $leerlingen
     */
    private $leerlingen = null;

    /**
     * @property \Edexml\Types\LeerkrachtType[] $leerkrachten
     */
    private $leerkrachten = null;

    /**
     * Gets as school
     *
     * @return \Edexml\Types\SchoolType
     */
    public function getSchool()
    {
        return $this->school;
    }

    /**
     * Sets a new school
     *
     * @param \Edexml\Types\SchoolType $school
     * @return self
     */
    public function setSchool(\Edexml\Types\SchoolType $school)
    {
        $this->school = $school;
        return $this;
    }

    /**
     * Adds as vestiging
     *
     * @return self
     * @param \Edexml\Types\VestigingType $vestiging
     */
    public function addToVestigingen(\Edexml\Types\VestigingType $vestiging)
    {
        $this->vestigingen[] = $vestiging;
        return $this;
    }

    /**
     * isset vestigingen
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVestigingen($index)
    {
        return isset($this->vestigingen[$index]);
    }

    /**
     * unset vestigingen
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVestigingen($index)
    {
        unset($this->vestigingen[$index]);
    }

    /**
     * Gets as vestigingen
     *
     * @return \Edexml\Types\VestigingType[]
     */
    public function getVestigingen()
    {
        return $this->vestigingen;
    }

    /**
     * Sets a new vestigingen
     *
     * @param \Edexml\Types\VestigingType[] $vestigingen
     * @return self
     */
    public function setVestigingen(array $vestigingen)
    {
        $this->vestigingen = $vestigingen;
        return $this;
    }

    /**
     * Gets as groepen
     *
     * @return \Edexml\Types\EDEXType\GroepenAType
     */
    public function getGroepen()
    {
        return $this->groepen;
    }

    /**
     * Sets a new groepen
     *
     * @param \Edexml\Types\EDEXType\GroepenAType $groepen
     * @return self
     */
    public function setGroepen(\Edexml\Types\EDEXType\GroepenAType $groepen)
    {
        $this->groepen = $groepen;
        return $this;
    }

    /**
     * Adds as leerling
     *
     * @return self
     * @param \Edexml\Types\LeerlingType $leerling
     */
    public function addToLeerlingen(\Edexml\Types\LeerlingType $leerling)
    {
        $this->leerlingen[] = $leerling;
        return $this;
    }

    /**
     * isset leerlingen
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLeerlingen($index)
    {
        return isset($this->leerlingen[$index]);
    }

    /**
     * unset leerlingen
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLeerlingen($index)
    {
        unset($this->leerlingen[$index]);
    }

    /**
     * Gets as leerlingen
     *
     * @return \Edexml\Types\LeerlingType[]
     */
    public function getLeerlingen()
    {
        return $this->leerlingen;
    }

    /**
     * Sets a new leerlingen
     *
     * @param \Edexml\Types\LeerlingType[] $leerlingen
     * @return self
     */
    public function setLeerlingen(array $leerlingen)
    {
        $this->leerlingen = $leerlingen;
        return $this;
    }

    /**
     * Adds as leerkracht
     *
     * @return self
     * @param \Edexml\Types\LeerkrachtType $leerkracht
     */
    public function addToLeerkrachten(\Edexml\Types\LeerkrachtType $leerkracht)
    {
        $this->leerkrachten[] = $leerkracht;
        return $this;
    }

    /**
     * isset leerkrachten
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLeerkrachten($index)
    {
        return isset($this->leerkrachten[$index]);
    }

    /**
     * unset leerkrachten
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLeerkrachten($index)
    {
        unset($this->leerkrachten[$index]);
    }

    /**
     * Gets as leerkrachten
     *
     * @return \Edexml\Types\LeerkrachtType[]
     */
    public function getLeerkrachten()
    {
        return $this->leerkrachten;
    }

    /**
     * Sets a new leerkrachten
     *
     * @param \Edexml\Types\LeerkrachtType[] $leerkrachten
     * @return self
     */
    public function setLeerkrachten(array $leerkrachten)
    {
        $this->leerkrachten = $leerkrachten;
        return $this;
    }


}

