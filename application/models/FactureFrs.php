<?php

/**
 * Application Models
 *
 * @package Application_Model
 * @subpackage Model
 * @author <YOUR NAME HERE>
 * @copyright ZF model generator
 * @license http://framework.zend.com/license/new-bsd     New BSD License
 */

/**
 * Abstract class for models
 */
require_once 'ModelAbstract.php';

/**
 * 
 *
 * @package Application_Model
 * @subpackage Model
 * @author <YOUR NAME HERE>
 */
class Application_Model_FactureFrs extends Application_Model_ModelAbstract
{

    /**
     * Database var type int(11)
     *
     * @var int
     */
    protected $_IdFactureFrs;

    /**
     * Database var type date
     *
     * @var date
     */
    protected $_DateFacturationFrs;

    /**
     * Database var type double
     *
     * @var double
     */
    protected $_Quantité;

    /**
     * Database var type double
     *
     * @var double
     */
    protected $_Prix;

    /**
     * Database var type double
     *
     * @var double
     */
    protected $_Totale;



    /**
     * Sets up column and relationship lists
     */
    public function __construct()
    {
        parent::init();
        $this->setColumnsList(array(
            'idFacture_frs'=>'IdFactureFrs',
            'Date_facturation_frs'=>'DateFacturationFrs',
            'Quantité'=>'Quantité',
            'Prix'=>'Prix',
            'Totale'=>'Totale',
        ));

        $this->setParentList(array(
        ));

        $this->setDependentList(array(
        ));
    }

    /**
     * Sets column idFacture_frs
     *
     * @param int $data
     * @return Application_Model_FactureFrs
     */
    public function setIdFactureFrs($data)
    {
        $this->_IdFactureFrs = $data;
        return $this;
    }

    /**
     * Gets column idFacture_frs
     *
     * @return int
     */
    public function getIdFactureFrs()
    {
        return $this->_IdFactureFrs;
    }

    /**
     * Sets column Date_facturation_frs
     *
     * @param date $data
     * @return Application_Model_FactureFrs
     */
    public function setDateFacturationFrs($data)
    {
        $this->_DateFacturationFrs = $data;
        return $this;
    }

    /**
     * Gets column Date_facturation_frs
     *
     * @return date
     */
    public function getDateFacturationFrs()
    {
        return $this->_DateFacturationFrs;
    }

    /**
     * Sets column Quantité
     *
     * @param double $data
     * @return Application_Model_FactureFrs
     */
    public function setQuantité($data)
    {
        $this->_Quantité = $data;
        return $this;
    }

    /**
     * Gets column Quantité
     *
     * @return double
     */
    public function getQuantité()
    {
        return $this->_Quantité;
    }

    /**
     * Sets column Prix
     *
     * @param double $data
     * @return Application_Model_FactureFrs
     */
    public function setPrix($data)
    {
        $this->_Prix = $data;
        return $this;
    }

    /**
     * Gets column Prix
     *
     * @return double
     */
    public function getPrix()
    {
        return $this->_Prix;
    }

    /**
     * Sets column Totale
     *
     * @param double $data
     * @return Application_Model_FactureFrs
     */
    public function setTotale($data)
    {
        $this->_Totale = $data;
        return $this;
    }

    /**
     * Gets column Totale
     *
     * @return double
     */
    public function getTotale()
    {
        return $this->_Totale;
    }

    /**
     * Returns the mapper class for this model
     *
     * @return Application_Model_Mapper_FactureFrs
     */
    public function getMapper()
    {
        if ($this->_mapper === null) {
            $this->setMapper(new Application_Model_Mapper_FactureFrs());
        }

        return $this->_mapper;
    }

    /**
     * Deletes current row by deleting the row that matches the primary key
     *
	 * @see Application_Model_Mapper_FactureFrs::delete
     * @return int|boolean Number of rows deleted or boolean if doing soft delete
     */
    public function deleteRowByPrimaryKey()
    {
        if ($this->getIdFactureFrs() === null) {
            throw new Exception('Primary Key does not contain a value');
        }

        return $this->getMapper()
                    ->getDbTable()
                    ->delete('idFacture_frs = ' .
                             $this->getMapper()
                                  ->getDbTable()
                                  ->getAdapter()
                                  ->quote($this->getIdFactureFrs()));
    }
}
