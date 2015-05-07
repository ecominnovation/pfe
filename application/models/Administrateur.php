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
class Application_Model_Administrateur extends Application_Model_ModelAbstract
{

    /**
     * Database var type int(10) unsigned
     *
     * @var int
     */
    protected $_Idadmin;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_LoginAdmin;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_MdpAdmin;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_NomAdmin;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_PrenomAdmin;

    /**
     * Database var type date
     *
     * @var date
     */
    protected $_DateNaissance;

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
     * Database var type decimal(10,0)
     *
     * @var float
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
            'idadmin'=>'Idadmin',
            'login_admin'=>'LoginAdmin',
            'mdp_admin'=>'MdpAdmin',
            'nom_admin'=>'NomAdmin',
            'prenom_admin'=>'PrenomAdmin',
            'date_naissance'=>'DateNaissance',
            'genre'=>'Genre',
            'commentaire'=>'Commentaire',
            'email'=>'Email',
            'tel'=>'Tel',
            'facebook'=>'Facebook',
        ));

        $this->setParentList(array(
        ));

        $this->setDependentList(array(
        ));
    }

    /**
     * Sets column idadmin
     *
     * @param int $data
     * @return Application_Model_Administrateur
     */
    public function setIdadmin($data)
    {
        $this->_Idadmin = $data;
        return $this;
    }

    /**
     * Gets column idadmin
     *
     * @return int
     */
    public function getIdadmin()
    {
        return $this->_Idadmin;
    }

    /**
     * Sets column login_admin
     *
     * @param string $data
     * @return Application_Model_Administrateur
     */
    public function setLoginAdmin($data)
    {
        $this->_LoginAdmin = $data;
        return $this;
    }

    /**
     * Gets column login_admin
     *
     * @return string
     */
    public function getLoginAdmin()
    {
        return $this->_LoginAdmin;
    }

    /**
     * Sets column mdp_admin
     *
     * @param string $data
     * @return Application_Model_Administrateur
     */
    public function setMdpAdmin($data)
    {
        $this->_MdpAdmin = $data;
        return $this;
    }

    /**
     * Gets column mdp_admin
     *
     * @return string
     */
    public function getMdpAdmin()
    {
        return $this->_MdpAdmin;
    }

    /**
     * Sets column nom_admin
     *
     * @param string $data
     * @return Application_Model_Administrateur
     */
    public function setNomAdmin($data)
    {
        $this->_NomAdmin = $data;
        return $this;
    }

    /**
     * Gets column nom_admin
     *
     * @return string
     */
    public function getNomAdmin()
    {
        return $this->_NomAdmin;
    }

    /**
     * Sets column prenom_admin
     *
     * @param string $data
     * @return Application_Model_Administrateur
     */
    public function setPrenomAdmin($data)
    {
        $this->_PrenomAdmin = $data;
        return $this;
    }

    /**
     * Gets column prenom_admin
     *
     * @return string
     */
    public function getPrenomAdmin()
    {
        return $this->_PrenomAdmin;
    }

    /**
     * Sets column date_naissance
     *
     * @param date $data
     * @return Application_Model_Administrateur
     */
    public function setDateNaissance($data)
    {
        $this->_DateNaissance = $data;
        return $this;
    }

    /**
     * Gets column date_naissance
     *
     * @return date
     */
    public function getDateNaissance()
    {
        return $this->_DateNaissance;
    }

    /**
     * Sets column genre
     *
     * @param string $data
     * @return Application_Model_Administrateur
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
     * @return Application_Model_Administrateur
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
     * @return Application_Model_Administrateur
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
     * @param float $data
     * @return Application_Model_Administrateur
     */
    public function setTel($data)
    {
        $this->_Tel = $data;
        return $this;
    }

    /**
     * Gets column tel
     *
     * @return float
     */
    public function getTel()
    {
        return $this->_Tel;
    }

    /**
     * Sets column facebook
     *
     * @param string $data
     * @return Application_Model_Administrateur
     */
    public function setFacebook($data)
    {
        $this->_Facebook = $data;
        return $this;
    }

    /**
     * Gets column facebook
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
     * @return Application_Model_Mapper_Administrateur
     */
    public function getMapper()
    {
        if ($this->_mapper === null) {
            $this->setMapper(new Application_Model_Mapper_Administrateur());
        }

        return $this->_mapper;
    }

    /**
     * Deletes current row by deleting the row that matches the primary key
     *
	 * @see Application_Model_Mapper_Administrateur::delete
     * @return int|boolean Number of rows deleted or boolean if doing soft delete
     */
    public function deleteRowByPrimaryKey()
    {
        $primary_key = array();
        if (! $this->getIdadmin()) {
            throw new Exception('Primary Key Idadmin does not contain a value');
        } else {
            $primary_key['idadmin'] = $this->getIdadmin();
        }

        if (! $this->getLoginAdmin()) {
            throw new Exception('Primary Key LoginAdmin does not contain a value');
        } else {
            $primary_key['login_admin'] = $this->getLoginAdmin();
        }

        return $this->getMapper()->getDbTable()->delete('idadmin = '
                    . $this->getMapper()->getDbTable()->getAdapter()->quote($primary_key['idadmin'])
                    . ' AND login_admin = '
                    . $this->getMapper()->getDbTable()->getAdapter()->quote($primary_key['login_admin']));
    }
}
