<?php

/**
 * Created by Manoylov.
 */
abstract class AbstractFurniture implements BrokenInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $material;

    /**
     * @var boolean
     */
    private $isBroken;

    /**
     * @param $isBroken
     */
    function __construct($isBroken)
    {
        $this->isBroken = (bool)$isBroken;
    }

    /**
     * @return boolean
     */
    public function isBroken()
    {
        return $this->getIsBroken();
    }

    /**
     * @param string $material
     */
    public function setMaterial($material)
    {
        $this->material = $material;
    }

    /**
     * @return string
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param boolean $isBroken
     */
    public function setIsBroken($isBroken)
    {
        $this->isBroken = $isBroken;
    }

    /**
     * @return boolean
     */
    public function getIsBroken()
    {
        return $this->isBroken;
    }


} 