<?php
/**
 * Created by Manoylov.
 */

namespace hw\FurnitureMaster;


use hw\FurnitureMaster\Interfaces\BreakageDetectionInterface;
use hw\FurnitureMaster\Interfaces\RepairInterface;

class FurnitureMaster extends AbstractWorker implements RepairInterface, BreakageDetectionInterface
{
    /**
     * @var boolean
     */
    private $isBreakage;

    /**
     * @param boolean $isBreakage
     */
    public function setIsBreakage($isBreakage)
    {
        $this->isBreakage = $isBreakage;
    }

    /**
     * @return boolean
     */
    public function getIsBreakage()
    {
        return $this->isBreakage;
    }


    /**
     * @return mixed
     */
    public function report()
    {
        // TODO: Implement report() method.
    }

    /**
     * @return boolean
     */
    public function isBreakage()
    {
        return $this->getIsBreakage();
    }

    /**
     * @return mixed
     */
    function repair()
    {
        // TODO: Implement repair() method.
    }

}