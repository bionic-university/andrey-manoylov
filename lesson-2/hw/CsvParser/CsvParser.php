<?php
/**
 * Created by Manoylov
 * Date: 10/24/14
 */

namespace hw\CsvParser;

use Exception;

require_once('ParseInterface.php');
require_once('ValidInterface.php');

class CsvParser implements \ParseInterface, \ValidateInterface
{

    private $csvFilePath;

    /**
     * @param $inCsvFilePath
     */
    function __construct($inCsvFilePath)
    {
        self::setCsvFilePath($inCsvFilePath);
    }

    /**
     * @param $inCsvFilePath
     */
    public function setCsvFilePath($inCsvFilePath)
    {
        $this->csvFilePath = $inCsvFilePath;
    }

    /**
     * @return mixed
     */
    public function getCsvFilePath()
    {
        return $this->csvFilePath;
    }

    /**
     * @param $inCsvFilePath
     * @return bool
     */
    public function isValid($inCsvFilePath)
    {
        return (bool)preg_match('/\.cvs$/i', $inCsvFilePath);
    }

    /**
     * @param $inHandle
     * @return bool
     */
    public function isCsvFileOpen($inHandle)
    {
        if (!$inHandle) {
            return false;
        }
        return true;
    }

    /**
     * @return array|null
     */
    public function parse()
    {
        $handle = null;
        $data = null;
        try {

            if (self::isValid($this->getCsvFilePath())) {
                throw new Exception('File path is incorrect' . PHP_EOL);
            }

            $handle = fopen($this->getCsvFilePath(), "rb");
            if (self::isCsvFileOpen($handle)) {
                $header = null;
                $delimiter = ' ';
                $data = array();
                while (false !== ($data[] = fgetcsv($handle, 1000, $delimiter))) {
                }
                fclose($handle);
            } else {
                throw new Exception('File is not open!' . PHP_EOL);
            }
        } catch (Exception $e) {
            echo 'Exception is caught: ', $e->getMessage(), "\n";
        }

        return $data;
    }

    /**
     * @param $inData
     */
    public function show($inData)
    {
        if (null !== $inData) {

            foreach ($inData as $values) {
                foreach ($values as $inVal) {
                    echo $inVal . ' ';
                }
                echo PHP_EOL;
            }
        } else {
            echo 'Something wrong! No given data!';
        }
    }
}