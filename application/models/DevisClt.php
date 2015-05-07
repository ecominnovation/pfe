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
class Application_Model_DevisClt extends Application_Model_ModelAbstract
{

    /**
     * Database var type int(11)
     *
     * @var int
     */
    protected $_IddevisClt;

    /**
     * Database var type date
     *
     * @var date
     */
    protected $_DateClt;

    /**
     * Database var type date
     *
     * @var date
     */
    protected $_DateLivraisonFrs;

    /**
     * Database var type int(11)
     *
     * @var int
     */
    protected $_ClientIdclient;


    /**
     * Parent relation fk_devis_clt_Client
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
            'iddevis_clt'=>'IddevisClt',
            'date_clt'=>'DateClt',
            'date_livraison_frs'=>'DateLivraisonFrs',
            'Client_idclient'=>'ClientIdclient',
        ));

        $this->setParentList(array(
            'FkDevisCltClient'=> array(
                    'property' => 'Client',
                    'table_name' => 'Client',
                ),
        ));

        $this->setDependentList(array(
        ));
    }

    /**
     * Sets column iddevis_clt
     *
     * @param int $data
     * @return Application_Model_DevisClt
     */
    public function setIddevisClt($data)
    {
        $this->_IddevisClt = $data;
        return $this;
    }

    /**
     * Gets column iddevis_clt
     *
     * @return int
     */
    public function getIddevisClt()
    {
        return $this->_IddevisClt;
    }

    /**
     * Sets column date_clt
     *
     * @param date $data
     * @return Application_Model_DevisClt
     */
    public function setDateClt($data)
    {
        $this->_DateClt = $data;
        return $this;
    }

    /**
     * Gets column date_clt
     *
     * @return date
     */
    public function getDateClt()
    {
        return $this->_DateClt;
    }

    /**
     * Sets column date_livraison_frs
     *
     * @param date $data
     * @return Application_Model_DevisClt
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
     * Sets column Client_idclient
     *
     * @param int $data
     * @return Application_Model_DevisClt
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
     * @return Application_Model_DevisClt
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
            $this->getMapper()->loadRelated('FkDevisCltClient', $this);
        }

        return $this->_Client;
    }

    /**
     * Returns the mapper class for this model
     *
     * @return Application_Model_Mapper_DevisClt
     */
    public function getMapper()
    {
        if ($this->_mapper === null) {
            $this->setMapper(new Application_Model_Mapper_DevisClt());
        }

        return $this->_mapper;
    }

    /**
     * Deletes current row by deleting the row that matches the primary key
     *
	 * @see Application_Model_Mapper_DevisClt::delete
     * @return int|boolean Number of rows deleted or boolean if doing soft delete
     */
    public function deleteRowByPrimaryKey()
    {
        if ($this->getIddevisClt() === null) {
            throw new Exception('Primary Key does not contain a value');
        }

        return $this->getMapper()
                    ->getDbTable()
                    ->delete('iddevis_clt = ' .
                             $this->getMapper()
                                  ->getDbTable()
                                  ->getAdapter()
                                  ->quote($this->getIddevisClt()));
    }
}
