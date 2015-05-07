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
class Application_Model_Articles extends Application_Model_ModelAbstract
{

    /**
     * Database var type int(11)
     *
     * @var int
     */
    protected $_Idarticles;

    /**
     * Database var type date
     *
     * @var date
     */
    protected $_DateEntré;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_NomArticle;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_Origine;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_Dispo;

    /**
     * Database var type date
     *
     * @var date
     */
    protected $_DateDeSortis;

    /**
     * Database var type date
     *
     * @var date
     */
    protected $_DateLimite;

    /**
     * Database var type float
     *
     * @var float
     */
    protected $_QuantitéStock;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_FamilleArticle;



    /**
     * Dependent relation fk_Agentstock_Articles1
     * Type: One-to-Many relationship
     *
     * @var Application_Model_Agentstock
     */
    protected $_Agentstock;

    /**
     * Sets up column and relationship lists
     */
    public function __construct()
    {
        parent::init();
        $this->setColumnsList(array(
            'idarticles'=>'Idarticles',
            'date_entré'=>'DateEntré',
            'nom_article'=>'NomArticle',
            'origine'=>'Origine',
            'dispo'=>'Dispo',
            'date_de_sortis'=>'DateDeSortis',
            'date_limite'=>'DateLimite',
            'quantité_stock'=>'QuantitéStock',
            'famille_article'=>'FamilleArticle',
        ));

        $this->setParentList(array(
        ));

        $this->setDependentList(array(
            'FkAgentstockArticles1' => array(
                    'property' => 'Agentstock',
                    'table_name' => 'Agentstock',
                ),
        ));
    }

    /**
     * Sets column idarticles
     *
     * @param int $data
     * @return Application_Model_Articles
     */
    public function setIdarticles($data)
    {
        $this->_Idarticles = $data;
        return $this;
    }

    /**
     * Gets column idarticles
     *
     * @return int
     */
    public function getIdarticles()
    {
        return $this->_Idarticles;
    }

    /**
     * Sets column date_entré
     *
     * @param date $data
     * @return Application_Model_Articles
     */
    public function setDateEntré($data)
    {
        $this->_DateEntré = $data;
        return $this;
    }

    /**
     * Gets column date_entré
     *
     * @return date
     */
    public function getDateEntré()
    {
        return $this->_DateEntré;
    }

    /**
     * Sets column nom_article
     *
     * @param string $data
     * @return Application_Model_Articles
     */
    public function setNomArticle($data)
    {
        $this->_NomArticle = $data;
        return $this;
    }

    /**
     * Gets column nom_article
     *
     * @return string
     */
    public function getNomArticle()
    {
        return $this->_NomArticle;
    }

    /**
     * Sets column origine
     *
     * @param string $data
     * @return Application_Model_Articles
     */
    public function setOrigine($data)
    {
        $this->_Origine = $data;
        return $this;
    }

    /**
     * Gets column origine
     *
     * @return string
     */
    public function getOrigine()
    {
        return $this->_Origine;
    }

    /**
     * Sets column dispo
     *
     * @param string $data
     * @return Application_Model_Articles
     */
    public function setDispo($data)
    {
        $this->_Dispo = $data;
        return $this;
    }

    /**
     * Gets column dispo
     *
     * @return string
     */
    public function getDispo()
    {
        return $this->_Dispo;
    }

    /**
     * Sets column date_de_sortis
     *
     * @param date $data
     * @return Application_Model_Articles
     */
    public function setDateDeSortis($data)
    {
        $this->_DateDeSortis = $data;
        return $this;
    }

    /**
     * Gets column date_de_sortis
     *
     * @return date
     */
    public function getDateDeSortis()
    {
        return $this->_DateDeSortis;
    }

    /**
     * Sets column date_limite
     *
     * @param date $data
     * @return Application_Model_Articles
     */
    public function setDateLimite($data)
    {
        $this->_DateLimite = $data;
        return $this;
    }

    /**
     * Gets column date_limite
     *
     * @return date
     */
    public function getDateLimite()
    {
        return $this->_DateLimite;
    }

    /**
     * Sets column quantité_stock
     *
     * @param float $data
     * @return Application_Model_Articles
     */
    public function setQuantitéStock($data)
    {
        $this->_QuantitéStock = $data;
        return $this;
    }

    /**
     * Gets column quantité_stock
     *
     * @return float
     */
    public function getQuantitéStock()
    {
        return $this->_QuantitéStock;
    }

    /**
     * Sets column famille_article
     *
     * @param string $data
     * @return Application_Model_Articles
     */
    public function setFamilleArticle($data)
    {
        $this->_FamilleArticle = $data;
        return $this;
    }

    /**
     * Gets column famille_article
     *
     * @return string
     */
    public function getFamilleArticle()
    {
        return $this->_FamilleArticle;
    }

    /**
     * Sets dependent relations fk_Agentstock_Articles1
     *
     * @param array $data An array of Application_Model_Agentstock
     * @return Application_Model_Articles
     */
    public function setAgentstock(array $data)
    {
        $this->_Agentstock = array();

        foreach ($data as $object) {
            $this->addAgentstock($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations fk_Agentstock_Articles1
     *
     * @param Application_Model_Agentstock $data
     * @return Application_Model_Articles
     */
    public function addAgentstock(Application_Model_Agentstock $data)
    {
        $this->_Agentstock[] = $data;
        return $this;
    }

    /**
     * Gets dependent fk_Agentstock_Articles1
     *
     * @param boolean $load Load the object if it is not already
     * @return array The array of Application_Model_Agentstock
     */
    public function getAgentstock($load = true)
    {
        if ($this->_Agentstock === null && $load) {
            $this->getMapper()->loadRelated('FkAgentstockArticles1', $this);
        }

        return $this->_Agentstock;
    }

    /**
     * Returns the mapper class for this model
     *
     * @return Application_Model_Mapper_Articles
     */
    public function getMapper()
    {
        if ($this->_mapper === null) {
            $this->setMapper(new Application_Model_Mapper_Articles());
        }

        return $this->_mapper;
    }

    /**
     * Deletes current row by deleting the row that matches the primary key
     *
	 * @see Application_Model_Mapper_Articles::delete
     * @return int|boolean Number of rows deleted or boolean if doing soft delete
     */
    public function deleteRowByPrimaryKey()
    {
        if ($this->getIdarticles() === null) {
            throw new Exception('Primary Key does not contain a value');
        }

        return $this->getMapper()
                    ->getDbTable()
                    ->delete('idarticles = ' .
                             $this->getMapper()
                                  ->getDbTable()
                                  ->getAdapter()
                                  ->quote($this->getIdarticles()));
    }
}
