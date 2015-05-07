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
class Application_Model_Agentstock extends Application_Model_ModelAbstract
{

    /**
     * Database var type int(10) unsigned
     *
     * @var int
     */
    protected $_Idagentstock;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_LoginAgentstock;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_MdpAgentstock;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_NomAgentstock;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_PrenomAgentstock;

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
     * Database var type int(11)
     *
     * @var int
     */
    protected $_ArticlesIdarticles;


    /**
     * Parent relation fk_Agentstock_Articles1
     *
     * @var Application_Model_Articles
     */
    protected $_Articles;


    /**
     * Sets up column and relationship lists
     */
    public function __construct()
    {
        parent::init();
        $this->setColumnsList(array(
            'idagentstock'=>'Idagentstock',
            'login_agentstock'=>'LoginAgentstock',
            'mdp_agentstock'=>'MdpAgentstock',
            'nom_agentstock'=>'NomAgentstock',
            'prenom_agentstock'=>'PrenomAgentstock',
            'date_naisscance'=>'DateNaisscance',
            'genre'=>'Genre',
            'commentaire'=>'Commentaire',
            'email'=>'Email',
            'tel'=>'Tel',
            'facebook'=>'Facebook',
            'Articles_idarticles'=>'ArticlesIdarticles',
        ));

        $this->setParentList(array(
            'FkAgentstockArticles1'=> array(
                    'property' => 'Articles',
                    'table_name' => 'Articles',
                ),
        ));

        $this->setDependentList(array(
        ));
    }

    /**
     * Sets column idagentstock
     *
     * @param int $data
     * @return Application_Model_Agentstock
     */
    public function setIdagentstock($data)
    {
        $this->_Idagentstock = $data;
        return $this;
    }

    /**
     * Gets column idagentstock
     *
     * @return int
     */
    public function getIdagentstock()
    {
        return $this->_Idagentstock;
    }

    /**
     * Sets column login_agentstock
     *
     * @param string $data
     * @return Application_Model_Agentstock
     */
    public function setLoginAgentstock($data)
    {
        $this->_LoginAgentstock = $data;
        return $this;
    }

    /**
     * Gets column login_agentstock
     *
     * @return string
     */
    public function getLoginAgentstock()
    {
        return $this->_LoginAgentstock;
    }

    /**
     * Sets column mdp_agentstock
     *
     * @param string $data
     * @return Application_Model_Agentstock
     */
    public function setMdpAgentstock($data)
    {
        $this->_MdpAgentstock = $data;
        return $this;
    }

    /**
     * Gets column mdp_agentstock
     *
     * @return string
     */
    public function getMdpAgentstock()
    {
        return $this->_MdpAgentstock;
    }

    /**
     * Sets column nom_agentstock
     *
     * @param string $data
     * @return Application_Model_Agentstock
     */
    public function setNomAgentstock($data)
    {
        $this->_NomAgentstock = $data;
        return $this;
    }

    /**
     * Gets column nom_agentstock
     *
     * @return string
     */
    public function getNomAgentstock()
    {
        return $this->_NomAgentstock;
    }

    /**
     * Sets column prenom_agentstock
     *
     * @param string $data
     * @return Application_Model_Agentstock
     */
    public function setPrenomAgentstock($data)
    {
        $this->_PrenomAgentstock = $data;
        return $this;
    }

    /**
     * Gets column prenom_agentstock
     *
     * @return string
     */
    public function getPrenomAgentstock()
    {
        return $this->_PrenomAgentstock;
    }

    /**
     * Sets column date_naisscance
     *
     * @param date $data
     * @return Application_Model_Agentstock
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
     * @return Application_Model_Agentstock
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
     * @return Application_Model_Agentstock
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
     * @return Application_Model_Agentstock
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
     * @return Application_Model_Agentstock
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
     * @return Application_Model_Agentstock
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
     * Sets column Articles_idarticles
     *
     * @param int $data
     * @return Application_Model_Agentstock
     */
    public function setArticlesIdarticles($data)
    {
        $this->_ArticlesIdarticles = $data;
        return $this;
    }

    /**
     * Gets column Articles_idarticles
     *
     * @return int
     */
    public function getArticlesIdarticles()
    {
        return $this->_ArticlesIdarticles;
    }

    /**
     * Sets parent relation ArticlesIdarticles
     *
     * @param Application_Model_Articles $data
     * @return Application_Model_Agentstock
     */
    public function setArticles(Application_Model_Articles $data)
    {
        $this->_Articles = $data;

        $primary_key = $data->getPrimaryKey();
        if (is_array($primary_key)) {
            $primary_key = $primary_key['idarticles'];
        }

        $this->setArticlesIdarticles($primary_key);

        return $this;
    }

    /**
     * Gets parent ArticlesIdarticles
     *
     * @param boolean $load Load the object if it is not already
     * @return Application_Model_Articles
     */
    public function getArticles($load = true)
    {
        if ($this->_Articles === null && $load) {
            $this->getMapper()->loadRelated('FkAgentstockArticles1', $this);
        }

        return $this->_Articles;
    }

    /**
     * Returns the mapper class for this model
     *
     * @return Application_Model_Mapper_Agentstock
     */
    public function getMapper()
    {
        if ($this->_mapper === null) {
            $this->setMapper(new Application_Model_Mapper_Agentstock());
        }

        return $this->_mapper;
    }

    /**
     * Deletes current row by deleting the row that matches the primary key
     *
	 * @see Application_Model_Mapper_Agentstock::delete
     * @return int|boolean Number of rows deleted or boolean if doing soft delete
     */
    public function deleteRowByPrimaryKey()
    {
        $primary_key = array();
        if (! $this->getIdagentstock()) {
            throw new Exception('Primary Key Idagentstock does not contain a value');
        } else {
            $primary_key['idagentstock'] = $this->getIdagentstock();
        }

        if (! $this->getLoginAgentstock()) {
            throw new Exception('Primary Key LoginAgentstock does not contain a value');
        } else {
            $primary_key['login_agentstock'] = $this->getLoginAgentstock();
        }

        return $this->getMapper()->getDbTable()->delete('idagentstock = '
                    . $this->getMapper()->getDbTable()->getAdapter()->quote($primary_key['idagentstock'])
                    . ' AND login_agentstock = '
                    . $this->getMapper()->getDbTable()->getAdapter()->quote($primary_key['login_agentstock']));
    }
}
