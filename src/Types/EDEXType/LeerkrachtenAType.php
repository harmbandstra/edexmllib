<?php

namespace Edexml\Types\EDEXType;

/**
 * Class representing LeerkrachtenAType
 */
class LeerkrachtenAType
{

    /**
     * @property \Edexml\Types\LeerkrachtType[] $leerkracht
     */
    private $leerkracht = array(
        
    );

    /**
     * Adds as leerkracht
     *
     * @return self
     * @param \Edexml\Types\LeerkrachtType $leerkracht
     */
    public function addToLeerkracht(\Edexml\Types\LeerkrachtType $leerkracht)
    {
        $this->leerkracht[] = $leerkracht;
        return $this;
    }

    /**
     * isset leerkracht
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLeerkracht($index)
    {
        return isset($this->leerkracht[$index]);
    }

    /**
     * unset leerkracht
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLeerkracht($index)
    {
        unset($this->leerkracht[$index]);
    }

    /**
     * Gets as leerkracht
     *
     * @return \Edexml\Types\LeerkrachtType[]
     */
    public function getLeerkracht()
    {
        return $this->leerkracht;
    }

    /**
     * Sets a new leerkracht
     *
     * @param \Edexml\Types\LeerkrachtType[] $leerkracht
     * @return self
     */
    public function setLeerkracht(array $leerkracht)
    {
        $this->leerkracht = $leerkracht;
        return $this;
    }


}

