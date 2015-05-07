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
class Application_Model_BonDeCommClt extends Application_Model_ModelAbstract
{

    /**
     * Database var type int(11)
     *
     * @var int
     */
    protected $_IdBonClt;

    /**
     * Database var type date
     *
     * @var date
     */
    protected $_DateBonClt;

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
     * Database var type int(11)
     *
     * @var int
     */
    protected $_ClientIdclient;


    /**
     * Parent relation fk_Bon_de_comm_clt_Client1
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
            'idBon_clt'=>'IdBonClt',
            'date_bon_clt'=>'DateBonClt',
            'date_livraison'=>'DateLivraison',
            'etat'=>'Etat',
            'Client_idclient'=>'ClientIdclient',
        ));

        $this->setParentList(array(
            'FkBonDeCommCltClient1'=> array(
                    'property' => 'Client',
                    'table_name' => 'Client',
                ),
        ));

        $this->setDependentList(array(
        ));
    }

    /**
     * Sets column idBon_clt
     *
     * @param int $data
     * @return Application_Model_BonDeCommClt
     */
    public function setIdBonClt($data)
    {
        $this->_IdBonClt = $data;
        return $this;
    }

    /**
     * Gets column idBon_clt
     *
     * @return int
     */
    public function getIdBonClt()
    {
        return $this->_IdBonClt;
    }

    /**
     * Sets column date_bon_clt
     *
     * @param date $data
     * @return Application_Model_BonDeCommClt
     */
    public function setDateBonClt($data)
    {
        $this->_DateBonClt = $data;
        return $this;
    }

    /**
     * Gets column date_bon_clt
     *
     * @return date
     */
    public function getDateBonClt()
    {
        return $this->_DateBonClt;
    }

    /**
     * Sets column date_livraison
     *
     * @param date $data
     * @return Application_Model_BonDeCommClt
     */
    public function setDateLivraison($data)
    {
        $this->_DateLivraison = $data;
        return $this;
    }

    /**
     * Gets column date_livraison
     *
     * @return date
     */
    public function getDateLivraison()
    {
        return $this->_DateLivraison;
    }

    /**
     * Sets column etat
     *
     * @param string $data
     * @return Application_Model_BonDeCommClt
     */
    public function setEtat($data)
    {
        $this->_Etat = $data;
        return $this;
    }

    /**
     * Gets column etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->_Etat;
    }

    /**
     * Sets column Client_idclient
     *
     * @param int $data
     * @return Application_Model_BonDeCommClt
     */
    public function setClientIdclient($data)
    {
        $this->_ClientIdclient = $data;
        return $this;
    }

    /**
     * Gets column Client_idclient
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
     * @return Application_Model_BonDeCommClt
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
            $this->getMapper()->loadRelated('FkBonDeCommCltClient1', $this);
        }

        return $this->_Client;
    }

    /**
     * Returns the mapper class for this model
     *
     * @return Application_Model_Mapper_BonDeCommClt
     */
    public function getMapper()
    {
        if ($this->_mapper === null) {
            $this->setMapper(new Application_Model_Mapper_BonDeCommClt());
        }

        return $this->_mapper;
    }

    /**
     * Deletes current row by deleting the row that matches the primary key
     *
	 * @see Application_Model_Mapper_BonDeCommClt::delete
     * @return int|boolean Number of rows deleted or boolean if doing soft delete
     */
    public function deleteRowByPrimaryKey()
    {
        if ($this->getIdBonClt() === null) {
            throw new Exception('Primary Key does not contain a value');
        }

        return $this->getMapper()
                    ->getDbTable()
                    ->delete('idBon_clt = ' .
                             $this->getMapper()
                                  ->getDbTable()
                                  ->getAdapter()
                                  ->quote($this->getIdBonClt()));
    }
}
