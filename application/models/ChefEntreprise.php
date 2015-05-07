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
class Application_Model_ChefEntreprise extends Application_Model_ModelAbstract
{

    /**
     * Database var type int(10) unsigned
     *
     * @var int
     */
    protected $_Idchef;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_LoginChef;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_MdpChef;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_NomChef;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_PrenomChef;

    /**
     * Database var type date
     *
     * @var date
     */
    protected $_DateNaisscance;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_Genre;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_Commentaire;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_Email;

    /**
     * Database var type int(11)
     *
     * @var int
     */
    protected $_Tel;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_Facebook;



    /**
     * Sets up column and relationship lists
     */
    public function __construct()
    {
        parent::init();
        $this->setColumnsList(array(
            'idchef'=>'Idchef',
            'login_chef'=>'LoginChef',
            'mdp_chef'=>'MdpChef',
            'nom_chef'=>'NomChef',
            'prenom_chef'=>'PrenomChef',
            'date_naisscance'=>'DateNaisscance',
            'genre'=>'Genre',
            'commentaire'=>'Commentaire',
            'email'=>'Email',
            'tel'=>'Tel',
            'Facebook'=>'Facebook',
        ));

        $this->setParentList(array(
        ));

        $this->setDependentList(array(
        ));
    }

    /**
     * Sets column idchef
     *
     * @param int $data
     * @return Application_Model_ChefEntreprise
     */
    public function setIdchef($data)
    {
        $this->_Idchef = $data;
        return $this;
    }

    /**
     * Gets column idchef
     *
     * @return int
     */
    public function getIdchef()
    {
        return $this->_Idchef;
    }

    /**
     * Sets column login_chef
     *
     * @param string $data
     * @return Application_Model_ChefEntreprise
     */
    public function setLoginChef($data)
    {
        $this->_LoginChef = $data;
        return $this;
    }

    /**
     * Gets column login_chef
     *
     * @return string
     */
    public function getLoginChef()
    {
        return $this->_LoginChef;
    }

    /**
     * Sets column mdp_chef
     *
     * @param string $data
     * @return Application_Model_ChefEntreprise
     */
    public function setMdpChef($data)
    {
        $this->_MdpChef = $data;
        return $this;
    }

    /**
     * Gets column mdp_chef
     *
     * @return string
     */
    public function getMdpChef()
    {
        return $this->_MdpChef;
    }

    /**
     * Sets column nom_chef
     *
     * @param string $data
     * @return Application_Model_ChefEntreprise
     */
    public function setNomChef($data)
    {
        $this->_NomChef = $data;
        return $this;
    }

    /**
     * Gets column nom_chef
     *
     * @return string
     */
    public function getNomChef()
    {
        return $this->_NomChef;
    }

    /**
     * Sets column prenom_chef
     *
     * @param string $data
     * @return Application_Model_ChefEntreprise
     */
    public function setPrenomChef($data)
    {
        $this->_PrenomChef = $data;
        return $this;
    }

    /**
     * Gets column prenom_chef
     *
     * @return string
     */
    public function getPrenomChef()
    {
        return $this->_PrenomChef;
    }

    /**
     * Sets column date_naisscance
     *
     * @param date $data
     * @return Application_Model_ChefEntreprise
     */
    public function setDateNaisscance($data)
    {
        $this->_DateNaisscance = $data;
        return $this;
    }

    /**
     * Gets column date_naisscance
     *
     * @return date
     */
    public function getDateNaisscance()
    {
        return $this->_DateNaisscance;
    }

    /**
     * Sets column genre
     *
     * @param string $data
     * @return Application_Model_ChefEntreprise
     */
    public function setGenre($data)
    {
        $this->_Genre = $data;
        return $this;
    }

    /**
     * Gets column genre
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->_Genre;
    }

    /**
     * Sets column commentaire
     *
     * @param string $data
     * @return Application_Model_ChefEntreprise
     */
    public function setCommentaire($data)
    {
        $this->_Commentaire = $data;
        return $this;
    }

    /**
     * Gets column commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->_Commentaire;
    }

    /**
     * Sets column email
     *
     * @param string $data
     * @return Application_Model_ChefEntreprise
     */
    public function setEmail($data)
    {
        $this->_Email = $data;
        return $this;
    }

    /**
     * Gets column email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->_Email;
    }

    /**
     * Sets column tel
     *
     * @param int $data
     * @return Application_Model_ChefEntreprise
     */
    public function setTel($data)
    {
        $this->_Tel = $data;
        return $this;
    }

    /**
     * Gets column tel
     *
     * @return int
     */
    public function getTel()
    {
        return $this->_Tel;
    }

    /**
     * Sets column Facebook
     *
     * @param string $data
     * @return Application_Model_ChefEntreprise
     */
    public function setFacebook($data)
    {
        $this->_Facebook = $data;
        return $this;
    }

    /**
     * Gets column Facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->_Facebook;
    }

    /**
     * Returns the mapper class for this model
     *
     * @return Application_Model_Mapper_ChefEntreprise
     */
    public function getMapper()
    {
        if ($this->_mapper === null) {
            $this->setMapper(new Application_Model_Mapper_ChefEntreprise());
        }

        return $this->_mapper;
    }

    /**
     * Deletes current row by deleting the row that matches the primary key
     *
	 * @see Application_Model_Mapper_ChefEntreprise::delete
     * @return int|boolean Number of rows deleted or boolean if doing soft delete
     */
    public function deleteRowByPrimaryKey()
    {
        $primary_key = array();
        if (! $this->getIdchef()) {
            throw new Exception('Primary Key Idchef does not contain a value');
        } else {
            $primary_key['idchef'] = $this->getIdchef();
        }

        if (! $this->getLoginChef()) {
            throw new Exception('Primary Key LoginChef does not contain a value');
        } else {
            $primary_key['login_chef'] = $this->getLoginChef();
        }

        return $this->getMapper()->getDbTable()->delete('idchef = '
                    . $this->getMapper()->getDbTable()->getAdapter()->quote($primary_key['idchef'])
                    . ' AND login_chef = '
                    . $this->getMapper()->getDbTable()->getAdapter()->quote($primary_key['login_chef']));
    }
}
