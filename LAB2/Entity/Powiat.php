<?php

namespace Entity;

/**
 * Powiat
 */
class Powiat
{
    /**
     * @var string
     */
    private $nazwa;

    /**
     * @var int
     */
    private $id;

    /**
     * @var \Entity\Wojewodztwa
     */
    private $wojewodztwa;


    /**
     * Set nazwa.
     *
     * @param string $nazwa
     *
     * @return Powiat
     */
    public function setNazwa($nazwa)
    {
        $this->nazwa = $nazwa;

        return $this;
    }

    /**
     * Get nazwa.
     *
     * @return string
     */
    public function getNazwa()
    {
        return $this->nazwa;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set wojewodztwa.
     *
     * @param \Entity\Wojewodztwa|null $wojewodztwa
     *
     * @return Powiat
     */
    public function setWojewodztwa(\Entity\Wojewodztwa $wojewodztwa = null)
    {
        $this->wojewodztwa = $wojewodztwa;

        return $this;
    }

    /**
     * Get wojewodztwa.
     *
     * @return \Entity\Wojewodztwa|null
     */
    public function getWojewodztwa()
    {
        return $this->wojewodztwa;
    }
}
