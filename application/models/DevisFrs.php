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
class Application_Model_DevisFrs extends Application_Model_ModelAbstract
{

    /**
     * Database var type int(11)
     *
     * @var int
     */
    protected $_IddevisFrs;

    /**
     * Database var type date
     *
     * @var date
     */
    protected $_DateFrs;

    /**
     * Database var type date
     *
     * @var date
     */
    protected $_DateLivraisonFrs;



    /**
     * Sets up column and relationship lists
     */
    public function __construct()
    {
        parent::init();
        $this->setColumnsList(array(
            'iddevis_frs'=>'IddevisFrs',
            'date_frs'=>'DateFrs',
            'date_livraison_frs'=>'DateLivraisonFrs',
        ));

        $this->setParentList(array(
        ));

        $this->setDependentList(array(
        ));
    }

    /**
     * Sets column iddevis_frs
     *
     * @param int $data
     * @return Application_Model_DevisFrs
     */
    public function setIddevisFrs($data)
    {
        $this->_IddevisFrs = $data;
        return $this;
    }

    /**
     * Gets column iddevis_frs
     *
     * @return int
     */
    public function getIddevisFrs()
    {
        return $this->_IddevisFrs;
    }

    /**
     * Sets column date_frs
     *
     * @param date $data
     * @return Application_Model_DevisFrs
     */
    public function setDateFrs($data)
    {
        $this->_DateFrs = $data;
        return $this;
    }

    /**
     * Gets column date_frs
     *
     * @return date
     */
    public function getDateFrs()
    {
        return $this->_DateFrs;
    }

    /**
     * Sets column date_livraison_frs
     *
     * @param date $data
     * @return Application_Model_DevisFrs
     */
    public function setDateLivraisonFrs($data)
    {
        $this->_DateLivraisonFrs = $data;
        return $this;
    }

    /**
     * Gets column date_livraison_frs
     *
     * @return date
     */
    public function getDateLivraisonFrs()
    {
        return $this->_DateLivraisonFrs;
    }

    /**
     * Returns the mapper class for this model
     *
     * @return Application_Model_Mapper_DevisFrs
     */
    public function getMapper()
    {
        if ($this->_mapper === null) {
            $this->setMapper(new Application_Model_Mapper_DevisFrs());
        }

        return $this->_mapper;
    }

    /**
     * Deletes current row by deleting the row that matches the primary key
     *
	 * @see Application_Model_Mapper_DevisFrs::delete
     * @return int|boolean Number of rows deleted or boolean if doing soft delete
     */
    public function deleteRowByPrimaryKey()
    {
        if ($this->getIddevisFrs() === null) {
            throw new Exception('Primary Key does not contain a value');
        }

        return $this->getMapper()
                    ->getDbTable()
                    ->delete('iddevis_frs = ' .
                             $this->getMapper()
                                  ->getDbTable()
                                  ->getAdapter()
                                  ->quote($this->getIddevisFrs()));
    }
}
