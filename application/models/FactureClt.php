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
class Application_Model_FactureClt extends Application_Model_ModelAbstract
{

    /**
     * Database var type int(11)
     *
     * @var int
     */
    protected $_IdfactureClt;

    /**
     * Database var type date
     *
     * @var date
     */
    protected $_Datefacturationclt;

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
     * Database var type int(11)
     *
     * @var int
     */
    protected $_ClientIdclient;


    /**
     * Parent relation fk_Facture_clt_Client1
     *
     * @var Application_Model_Client
     */
    protected $_Client;


    /**
     * Sets up column and relationship lists
     */
    public function __construct()
    {
        parent::init();
        $this->setColumnsList(array(
            'idfacture_clt'=>'IdfactureClt',
            'datefacturationclt'=>'Datefacturationclt',
            'quantité'=>'Quantité',
            'prix'=>'Prix',
            'totale'=>'Totale',
            'client_idclient'=>'ClientIdclient',
        ));

        $this->setParentList(array(
            'FkFactureCltClient1'=> array(
                    'property' => 'Client',
                    'table_name' => 'Client',
                ),
        ));

        $this->setDependentList(array(
        ));
    }

    /**
     * Sets column idfacture_clt
     *
     * @param int $data
     * @return Application_Model_FactureClt
     */
    public function setIdfactureClt($data)
    {
        $this->_IdfactureClt = $data;
        return $this;
    }

    /**
     * Gets column idfacture_clt
     *
     * @return int
     */
    public function getIdfactureClt()
    {
        return $this->_IdfactureClt;
    }

    /**
     * Sets column datefacturationclt
     *
     * @param date $data
     * @return Application_Model_FactureClt
     */
    public function setDatefacturationclt($data)
    {
        $this->_Datefacturationclt = $data;
        return $this;
    }

    /**
     * Gets column datefacturationclt
     *
     * @return date
     */
    public function getDatefacturationclt()
    {
        return $this->_Datefacturationclt;
    }

    /**
     * Sets column quantité
     *
     * @param double $data
     * @return Application_Model_FactureClt
     */
    public function setQuantité($data)
    {
        $this->_Quantité = $data;
        return $this;
    }

    /**
     * Gets column quantité
     *
     * @return double
     */
    public function getQuantité()
    {
        return $this->_Quantité;
    }

    /**
     * Sets column prix
     *
     * @param double $data
     * @return Application_Model_FactureClt
     */
    public function setPrix($data)
    {
        $this->_Prix = $data;
        return $this;
    }

    /**
     * Gets column prix
     *
     * @return double
     */
    public function getPrix()
    {
        return $this->_Prix;
    }

    /**
     * Sets column totale
     *
     * @param double $data
     * @return Application_Model_FactureClt
     */
    public function setTotale($data)
    {
        $this->_Totale = $data;
        return $this;
    }

    /**
     * Gets column totale
     *
     * @return double
     */
    public function getTotale()
    {
        return $this->_Totale;
    }

    /**
     * Sets column client_idclient
     *
     * @param int $data
     * @return Application_Model_FactureClt
     */
    public function setClientIdclient($data)
    {
        $this->_ClientIdclient = $data;
        return $this;
    }

    /**
     * Gets column client_idclient
     *
     * @return int
     */
    public function getClientIdclient()
    {
        return $this->_ClientIdclient;
    }

    /**
     * Sets parent relation ClientIdclient
     *
     * @param Application_Model_Client $data
     * @return Application_Model_FactureClt
     */
    public function setClient(Application_Model_Client $data)
    {
        $this->_Client = $data;

        $primary_key = $data->getPrimaryKey();
        if (is_array($primary_key)) {
            $primary_key = $primary_key['idclient'];
        }

        $this->setClientIdclient($primary_key);

        return $this;
    }

    /**
     * Gets parent ClientIdclient
     *
     * @param boolean $load Load the object if it is not already
     * @return Application_Model_Client
     */
    public function getClient($load = true)
    {
        if ($this->_Client === null && $load) {
            $this->getMapper()->loadRelated('FkFactureCltClient1', $this);
        }

        return $this->_Client;
    }

    /**
     * Returns the mapper class for this model
     *
     * @return Application_Model_Mapper_FactureClt
     */
    public function getMapper()
    {
        if ($this->_mapper === null) {
            $this->setMapper(new Application_Model_Mapper_FactureClt());
        }

        return $this->_mapper;
    }

    /**
     * Deletes current row by deleting the row that matches the primary key
     *
	 * @see Application_Model_Mapper_FactureClt::delete
     * @return int|boolean Number of rows deleted or boolean if doing soft delete
     */
    public function deleteRowByPrimaryKey()
    {
        if ($this->getIdfactureClt() === null) {
            throw new Exception('Primary Key does not contain a value');
        }

        return $this->getMapper()
                    ->getDbTable()
                    ->delete('idfacture_clt = ' .
                             $this->getMapper()
                                  ->getDbTable()
                                  ->getAdapter()
                                  ->quote($this->getIdfactureClt()));
    }
}
