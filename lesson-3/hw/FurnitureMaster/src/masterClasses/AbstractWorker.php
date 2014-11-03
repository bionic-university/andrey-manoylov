<?php

/**
 * Created by Manoylov.
 */
abstract class AbstractWorker implements ReportInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * @return mixed
     */
    abstract function report();

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

} 