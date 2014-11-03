<?php

require_once '../furnitureClasses/AbstractFurniture.php';

/**
 * Created by Manoylov.
 */
class FurnitureMaster extends AbstractWorker implements RepairInterface
{
    /**
     * @var AbstractFurniture
     */
    private $availableFurniture;

    /**
     * @var boolean
     */
    private $initialFurnitureStatus;

    function __construct($name)
    {
        $this->setName($name);
    }

    /**
     * @param $availableFurniture
     * @throws \InvalidArgumentException
     */
    public function setAvailableFurniture($availableFurniture)
    {
        if ($availableFurniture instanceof AbstractFurniture) {
            $this->availableFurniture = $availableFurniture;
            $this->setInitialFurnitureStatus($this->availableFurniture->getIsBroken());
        } else {
            throw new \InvalidArgumentException();
        }
    }

    /**
     * @return AbstractWorker
     */
    public function getAvailableFurniture()
    {
        return $this->availableFurniture;
    }

    /**
     * @param boolean $initialFurnitureStatus
     */
    public function setInitialFurnitureStatus($initialFurnitureStatus)
    {
        $this->initialFurnitureStatus = $initialFurnitureStatus;
    }

    /**
     * @return boolean
     */
    public function getInitialFurnitureStatus()
    {
        return $this->initialFurnitureStatus;
    }


    /**
     * @return string
     */
    public function report()
    {
        if (null !== $this->$availableFurniture) {
            $stateOfFurniture = $this->getInitialFurnitureStatus() ? 'broken state' : 'unbroken state';
            $stateOfFurniture .= $this->$availableFurniture->isBroken(
            ) ? ' and did nothing, except that rubbed dust!' : ' and repair it!';

            return (string)'Master ' . $this->getName() . ' got ' . $this->$availableFurniture->getName(
            ) . ' in a ' . $stateOfFurniture;
        }

        return (string)'Master' . $this->getName() . ' did not do anything, because he still does not have furniture';
    }

    /**
     * @return void
     */
    function repair()
    {
        if (null !== $this->$availableFurniture && $this->$availableFurniture->isBroken()) {
            $this->$availableFurniture->setIsBroken(false);
        }
    }

}