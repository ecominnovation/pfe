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
class Application_Model_BonDeCommFrs extends Application_Model_ModelAbstract
{

    /**
     * Database var type int(11)
     *
     * @var int
     */
    protected $_IdBonDeCommFrs;

    /**
     * Database var type date
     *
     * @var date
     */
    protected $_DateBcFrs;

    /**
     * Database var type date
     *
     * @var date
     */
    protected $_DateLivraison;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_Etat;



    /**
     * Sets up column and relationship lists
     */
    public function __construct()
    {
        parent::init();
        $this->setColumnsList(array(
            'idBon_de_comm_frs'=>'IdBonDeCommFrs',
            'Date_bc_frs'=>'DateBcFrs',
            'Date_livraison'=>'DateLivraison',
            'Etat'=>'Etat',
        ));

        $this->setParentList(array(
        ));

        $this->setDependentList(array(
        ));
    }

    /**
     * Sets column idBon_de_comm_frs
     *
     * @param int $data
     * @return Application_Model_BonDeCommFrs
     */
    public function setIdBonDeCommFrs($data)
    {
        $this->_IdBonDeCommFrs = $data;
        return $this;
    }

    /**
     * Gets column idBon_de_comm_frs
     *
     * @return int
     */
    public function getIdBonDeCommFrs()
    {
        return $this->_IdBonDeCommFrs;
    }

    /**
     * Sets column Date_bc_frs
     *
     * @param date $data
     * @return Application_Model_BonDeCommFrs
     */
    public function setDateBcFrs($data)
    {
        $this->_DateBcFrs = $data;
        return $this;
    }

    /**
     * Gets column Date_bc_frs
     *
     * @return date
     */
    public function getDateBcFrs()
    {
        return $this->_DateBcFrs;
    }

    /**
     * Sets column Date_livraison
     *
     * @param date $data
     * @return Application_Model_BonDeCommFrs
     */
    public function setDateLivraison($data)
    {
        $this->_DateLivraison = $data;
        return $this;
    }

    /**
     * Gets column Date_livraison
     *
     * @return date
     */
    public function getDateLivraison()
    {
        return $this->_DateLivraison;
    }

    /**
     * Sets column Etat
     *
     * @param string $data
     * @return Application_Model_BonDeCommFrs
     */
    public function setEtat($data)
    {
        $this->_Etat = $data;
        return $this;
    }

    /**
     * Gets column Etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->_Etat;
    }

    /**
     * Returns the mapper class for this model
     *
     * @return Application_Model_Mapper_BonDeCommFrs
     */
    public function getMapper()
    {
        if ($this->_mapper === null) {
            $this->setMapper(new Application_Model_Mapper_BonDeCommFrs());
        }

        return $this->_mapper;
    }

    /**
     * Deletes current row by deleting the row that matches the primary key
     *
	 * @see Application_Model_Mapper_BonDeCommFrs::delete
     * @return int|boolean Number of rows deleted or boolean if doing soft delete
     */
    public function deleteRowByPrimaryKey()
    {
        if ($this->getIdBonDeCommFrs() === null) {
            throw new Exception('Primary Key does not contain a value');
        }

        return $this->getMapper()
                    ->getDbTable()
                    ->delete('idBon_de_comm_frs = ' .
                             $this->getMapper()
                                  ->getDbTable()
                                  ->getAdapter()
                                  ->quote($this->getIdBonDeCommFrs()));
    }
}
