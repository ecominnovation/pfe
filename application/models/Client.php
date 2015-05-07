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
class Application_Model_Client extends Application_Model_ModelAbstract
{

    /**
     * Database var type int(11)
     *
     * @var int
     */
    protected $_Idclient;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_NomSociétéClt;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_AdressePostaleClt;

    /**
     * Database var type int(11)
     *
     * @var int
     */
    protected $_NuméroClt;

    /**
     * Database var type int(11)
     *
     * @var int
     */
    protected $_NuméroFaxClt;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_SitewebClt;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_EmailClt;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_DescriptionClt;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_NomContactPersonne;

    /**
     * Database var type int(11)
     *
     * @var int
     */
    protected $_NuméroTéléphone;

    /**
     * Database var type int(11)
     *
     * @var int
     */
    protected $_NuméroTéléphoneMobile;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_EmailPersonne;



    /**
     * Dependent relation fk_Agentcommercial_Client1
     * Type: One-to-Many relationship
     *
     * @var Application_Model_Agentcommercial
     */
    protected $_Agentcommercial;

    /**
     * Dependent relation fk_Bon_de_comm_clt_Client1
     * Type: One-to-Many relationship
     *
     * @var Application_Model_BonDeCommClt
     */
    protected $_BonDeCommClt;

    /**
     * Dependent relation fk_devis_clt_Client
     * Type: One-to-Many relationship
     *
     * @var Application_Model_DevisClt
     */
    protected $_DevisClt;

    /**
     * Dependent relation fk_Facture_clt_Client1
     * Type: One-to-Many relationship
     *
     * @var Application_Model_FactureClt
     */
    protected $_FactureClt;

    /**
     * Sets up column and relationship lists
     */
    public function __construct()
    {
        parent::init();
        $this->setColumnsList(array(
            'idclient'=>'Idclient',
            'nom_société_Clt'=>'NomSociétéClt',
            'adresse_postale_Clt'=>'AdressePostaleClt',
            'numéro_Clt'=>'NuméroClt',
            'numéro_Fax_Clt'=>'NuméroFaxClt',
            'siteweb_Clt'=>'SitewebClt',
            'email_Clt'=>'EmailClt',
            'description_Clt'=>'DescriptionClt',
            'nom_contact_personne'=>'NomContactPersonne',
            'numéro_téléphone'=>'NuméroTéléphone',
            'numéro_téléphone_mobile'=>'NuméroTéléphoneMobile',
            'email_personne'=>'EmailPersonne',
        ));

        $this->setParentList(array(
        ));

        $this->setDependentList(array(
            'FkAgentcommercialClient1' => array(
                    'property' => 'Agentcommercial',
                    'table_name' => 'Agentcommercial',
                ),
            'FkBonDeCommCltClient1' => array(
                    'property' => 'BonDeCommClt',
                    'table_name' => 'BonDeCommClt',
                ),
            'FkDevisCltClient' => array(
                    'property' => 'DevisClt',
                    'table_name' => 'DevisClt',
                ),
            'FkFactureCltClient1' => array(
                    'property' => 'FactureClt',
                    'table_name' => 'FactureClt',
                ),
        ));
    }

    /**
     * Sets column idclient
     *
     * @param int $data
     * @return Application_Model_Client
     */
    public function setIdclient($data)
    {
        $this->_Idclient = $data;
        return $this;
    }

    /**
     * Gets column idclient
     *
     * @return int
     */
    public function getIdclient()
    {
        return $this->_Idclient;
    }

    /**
     * Sets column nom_société_Clt
     *
     * @param string $data
     * @return Application_Model_Client
     */
    public function setNomSociétéClt($data)
    {
        $this->_NomSociétéClt = $data;
        return $this;
    }

    /**
     * Gets column nom_société_Clt
     *
     * @return string
     */
    public function getNomSociétéClt()
    {
        return $this->_NomSociétéClt;
    }

    /**
     * Sets column adresse_postale_Clt
     *
     * @param string $data
     * @return Application_Model_Client
     */
    public function setAdressePostaleClt($data)
    {
        $this->_AdressePostaleClt = $data;
        return $this;
    }

    /**
     * Gets column adresse_postale_Clt
     *
     * @return string
     */
    public function getAdressePostaleClt()
    {
        return $this->_AdressePostaleClt;
    }

    /**
     * Sets column numéro_Clt
     *
     * @param int $data
     * @return Application_Model_Client
     */
    public function setNuméroClt($data)
    {
        $this->_NuméroClt = $data;
        return $this;
    }

    /**
     * Gets column numéro_Clt
     *
     * @return int
     */
    public function getNuméroClt()
    {
        return $this->_NuméroClt;
    }

    /**
     * Sets column numéro_Fax_Clt
     *
     * @param int $data
     * @return Application_Model_Client
     */
    public function setNuméroFaxClt($data)
    {
        $this->_NuméroFaxClt = $data;
        return $this;
    }

    /**
     * Gets column numéro_Fax_Clt
     *
     * @return int
     */
    public function getNuméroFaxClt()
    {
        return $this->_NuméroFaxClt;
    }

    /**
     * Sets column siteweb_Clt
     *
     * @param string $data
     * @return Application_Model_Client
     */
    public function setSitewebClt($data)
    {
        $this->_SitewebClt = $data;
        return $this;
    }

    /**
     * Gets column siteweb_Clt
     *
     * @return string
     */
    public function getSitewebClt()
    {
        return $this->_SitewebClt;
    }

    /**
     * Sets column email_Clt
     *
     * @param string $data
     * @return Application_Model_Client
     */
    public function setEmailClt($data)
    {
        $this->_EmailClt = $data;
        return $this;
    }

    /**
     * Gets column email_Clt
     *
     * @return string
     */
    public function getEmailClt()
    {
        return $this->_EmailClt;
    }

    /**
     * Sets column description_Clt
     *
     * @param string $data
     * @return Application_Model_Client
     */
    public function setDescriptionClt($data)
    {
        $this->_DescriptionClt = $data;
        return $this;
    }

    /**
     * Gets column description_Clt
     *
     * @return string
     */
    public function getDescriptionClt()
    {
        return $this->_DescriptionClt;
    }

    /**
     * Sets column nom_contact_personne
     *
     * @param string $data
     * @return Application_Model_Client
     */
    public function setNomContactPersonne($data)
    {
        $this->_NomContactPersonne = $data;
        return $this;
    }

    /**
     * Gets column nom_contact_personne
     *
     * @return string
     */
    public function getNomContactPersonne()
    {
        return $this->_NomContactPersonne;
    }

    /**
     * Sets column numéro_téléphone
     *
     * @param int $data
     * @return Application_Model_Client
     */
    public function setNuméroTéléphone($data)
    {
        $this->_NuméroTéléphone = $data;
        return $this;
    }

    /**
     * Gets column numéro_téléphone
     *
     * @return int
     */
    public function getNuméroTéléphone()
    {
        return $this->_NuméroTéléphone;
    }

    /**
     * Sets column numéro_téléphone_mobile
     *
     * @param int $data
     * @return Application_Model_Client
     */
    public function setNuméroTéléphoneMobile($data)
    {
        $this->_NuméroTéléphoneMobile = $data;
        return $this;
    }

    /**
     * Gets column numéro_téléphone_mobile
     *
     * @return int
     */
    public function getNuméroTéléphoneMobile()
    {
        return $this->_NuméroTéléphoneMobile;
    }

    /**
     * Sets column email_personne
     *
     * @param string $data
     * @return Application_Model_Client
     */
    public function setEmailPersonne($data)
    {
        $this->_EmailPersonne = $data;
        return $this;
    }

    /**
     * Gets column email_personne
     *
     * @return string
     */
    public function getEmailPersonne()
    {
        return $this->_EmailPersonne;
    }

    /**
     * Sets dependent relations fk_Agentcommercial_Client1
     *
     * @param array $data An array of Application_Model_Agentcommercial
     * @return Application_Model_Client
     */
    public function setAgentcommercial(array $data)
    {
        $this->_Agentcommercial = array();

        foreach ($data as $object) {
            $this->addAgentcommercial($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations fk_Agentcommercial_Client1
     *
     * @param Application_Model_Agentcommercial $data
     * @return Application_Model_Client
     */
    public function addAgentcommercial(Application_Model_Agentcommercial $data)
    {
        $this->_Agentcommercial[] = $data;
        return $this;
    }

    /**
     * Gets dependent fk_Agentcommercial_Client1
     *
     * @param boolean $load Load the object if it is not already
     * @return array The array of Application_Model_Agentcommercial
     */
    public function getAgentcommercial($load = true)
    {
        if ($this->_Agentcommercial === null && $load) {
            $this->getMapper()->loadRelated('FkAgentcommercialClient1', $this);
        }

        return $this->_Agentcommercial;
    }

    /**
     * Sets dependent relations fk_Bon_de_comm_clt_Client1
     *
     * @param array $data An array of Application_Model_BonDeCommClt
     * @return Application_Model_Client
     */
    public function setBonDeCommClt(array $data)
    {
        $this->_BonDeCommClt = array();

        foreach ($data as $object) {
            $this->addBonDeCommClt($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations fk_Bon_de_comm_clt_Client1
     *
     * @param Application_Model_BonDeCommClt $data
     * @return Application_Model_Client
     */
    public function addBonDeCommClt(Application_Model_BonDeCommClt $data)
    {
        $this->_BonDeCommClt[] = $data;
        return $this;
    }

    /**
     * Gets dependent fk_Bon_de_comm_clt_Client1
     *
     * @param boolean $load Load the object if it is not already
     * @return array The array of Application_Model_BonDeCommClt
     */
    public function getBonDeCommClt($load = true)
    {
        if ($this->_BonDeCommClt === null && $load) {
            $this->getMapper()->loadRelated('FkBonDeCommCltClient1', $this);
        }

        return $this->_BonDeCommClt;
    }

    /**
     * Sets dependent relations fk_devis_clt_Client
     *
     * @param array $data An array of Application_Model_DevisClt
     * @return Application_Model_Client
     */
    public function setDevisClt(array $data)
    {
        $this->_DevisClt = array();

        foreach ($data as $object) {
            $this->addDevisClt($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations fk_devis_clt_Client
     *
     * @param Application_Model_DevisClt $data
     * @return Application_Model_Client
     */
    public function addDevisClt(Application_Model_DevisClt $data)
    {
        $this->_DevisClt[] = $data;
        return $this;
    }

    /**
     * Gets dependent fk_devis_clt_Client
     *
     * @param boolean $load Load the object if it is not already
     * @return array The array of Application_Model_DevisClt
     */
    public function getDevisClt($load = true)
    {
        if ($this->_DevisClt === null && $load) {
            $this->getMapper()->loadRelated('FkDevisCltClient', $this);
        }

        return $this->_DevisClt;
    }

    /**
     * Sets dependent relations fk_Facture_clt_Client1
     *
     * @param array $data An array of Application_Model_FactureClt
     * @return Application_Model_Client
     */
    public function setFactureClt(array $data)
    {
        $this->_FactureClt = array();

        foreach ($data as $object) {
            $this->addFactureClt($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations fk_Facture_clt_Client1
     *
     * @param Application_Model_FactureClt $data
     * @return Application_Model_Client
     */
    public function addFactureClt(Application_Model_FactureClt $data)
    {
        $this->_FactureClt[] = $data;
        return $this;
    }

    /**
     * Gets dependent fk_Facture_clt_Client1
     *
     * @param boolean $load Load the object if it is not already
     * @return array The array of Application_Model_FactureClt
     */
    public function getFactureClt($load = true)
    {
        if ($this->_FactureClt === null && $load) {
            $this->getMapper()->loadRelated('FkFactureCltClient1', $this);
        }

        return $this->_FactureClt;
    }

    /**
     * Returns the mapper class for this model
     *
     * @return Application_Model_Mapper_Client
     */
    public function getMapper()
    {
        if ($this->_mapper === null) {
            $this->setMapper(new Application_Model_Mapper_Client());
        }

        return $this->_mapper;
    }

    /**
     * Deletes current row by deleting the row that matches the primary key
     *
	 * @see Application_Model_Mapper_Client::delete
     * @return int|boolean Number of rows deleted or boolean if doing soft delete
     */
    public function deleteRowByPrimaryKey()
    {
        if ($this->getIdclient() === null) {
            throw new Exception('Primary Key does not contain a value');
        }

        return $this->getMapper()
                    ->getDbTable()
                    ->delete('idclient = ' .
                             $this->getMapper()
                                  ->getDbTable()
                                  ->getAdapter()
                                  ->quote($this->getIdclient()));
    }
}
