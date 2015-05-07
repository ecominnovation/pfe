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
class Application_Model_Agentcommercial extends Application_Model_ModelAbstract
{

    /**
     * Database var type int(11)
     *
     * @var int
     */
    protected $_Idagentcommercial;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_LoginAgentComm;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_MdpAgentComm;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_NomAgentComm;

    /**
     * Database var type varchar(45)
     *
     * @var string
     */
    protected $_PrenomAgentComm;

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
     * Database var type int(11)
     *
     * @var int
     */
    protected $_ClientIdclient;


    /**
     * Parent relation fk_Agentcommercial_Client1
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
            'idagentcommercial'=>'Idagentcommercial',
            'login_agent_comm'=>'LoginAgentComm',
            'mdp_agent_comm'=>'MdpAgentComm',
            'nom_agent_comm'=>'NomAgentComm',
            'prenom_agent_comm'=>'PrenomAgentComm',
            'date_naisscance'=>'DateNaisscance',
            'genre'=>'Genre',
            'commentaire'=>'Commentaire',
            'email'=>'Email',
            'tel'=>'Tel',
            'facebook'=>'Facebook',
            'Client_idclient'=>'ClientIdclient',
        ));

        $this->setParentList(array(
            'FkAgentcommercialClient1'=> array(
                    'property' => 'Client',
                    'table_name' => 'Client',
                ),
        ));

        $this->setDependentList(array(
        ));
    }

    /**
     * Sets column idagentcommercial
     *
     * @param int $data
     * @return Application_Model_Agentcommercial
     */
    public function setIdagentcommercial($data)
    {
        $this->_Idagentcommercial = $data;
        return $this;
    }

    /**
     * Gets column idagentcommercial
     *
     * @return int
     */
    public function getIdagentcommercial()
    {
        return $this->_Idagentcommercial;
    }

    /**
     * Sets column login_agent_comm
     *
     * @param string $data
     * @return Application_Model_Agentcommercial
     */
    public function setLoginAgentComm($data)
    {
        $this->_LoginAgentComm = $data;
        return $this;
    }

    /**
     * Gets column login_agent_comm
     *
     * @return string
     */
    public function getLoginAgentComm()
    {
        return $this->_LoginAgentComm;
    }

    /**
     * Sets column mdp_agent_comm
     *
     * @param string $data
     * @return Application_Model_Agentcommercial
     */
    public function setMdpAgentComm($data)
    {
        $this->_MdpAgentComm = $data;
        return $this;
    }

    /**
     * Gets column mdp_agent_comm
     *
     * @return string
     */
    public function getMdpAgentComm()
    {
        return $this->_MdpAgentComm;
    }

    /**
     * Sets column nom_agent_comm
     *
     * @param string $data
     * @return Application_Model_Agentcommercial
     */
    public function setNomAgentComm($data)
    {
        $this->_NomAgentComm = $data;
        return $this;
    }

    /**
     * Gets column nom_agent_comm
     *
     * @return string
     */
    public function getNomAgentComm()
    {
        return $this->_NomAgentComm;
    }

    /**
     * Sets column prenom_agent_comm
     *
     * @param string $data
     * @return Application_Model_Agentcommercial
     */
    public function setPrenomAgentComm($data)
    {
        $this->_PrenomAgentComm = $data;
        return $this;
    }

    /**
     * Gets column prenom_agent_comm
     *
     * @return string
     */
    public function getPrenomAgentComm()
    {
        return $this->_PrenomAgentComm;
    }

    /**
     * Sets column date_naisscance
     *
     * @param date $data
     * @return Application_Model_Agentcommercial
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
     * @return Application_Model_Agentcommercial
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
     * @return Application_Model_Agentcommercial
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
     * @return Application_Model_Agentcommercial
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
     * @return Application_Model_Agentcommercial
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
     * Sets column facebook
     *
     * @param string $data
     * @return Application_Model_Agentcommercial
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
     * Sets column Client_idclient
     *
     * @param int $data
     * @return Application_Model_Agentcommercial
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
     * @return Application_Model_Agentcommercial
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
            $this->getMapper()->loadRelated('FkAgentcommercialClient1', $this);
        }

        return $this->_Client;
    }

    /**
     * Returns the mapper class for this model
     *
     * @return Application_Model_Mapper_Agentcommercial
     */
    public function getMapper()
    {
        if ($this->_mapper === null) {
            $this->setMapper(new Application_Model_Mapper_Agentcommercial());
        }

        return $this->_mapper;
    }

    /**
     * Deletes current row by deleting the row that matches the primary key
     *
	 * @see Application_Model_Mapper_Agentcommercial::delete
     * @return int|boolean Number of rows deleted or boolean if doing soft delete
     */
    public function deleteRowByPrimaryKey()
    {
        $primary_key = array();
        if (! $this->getIdagentcommercial()) {
            throw new Exception('Primary Key Idagentcommercial does not contain a value');
        } else {
            $primary_key['idagentcommercial'] = $this->getIdagentcommercial();
        }

        if (! $this->getLoginAgentComm()) {
            throw new Exception('Primary Key LoginAgentComm does not contain a value');
        } else {
            $primary_key['login_agent_comm'] = $this->getLoginAgentComm();
        }

        return $this->getMapper()->getDbTable()->delete('idagentcommercial = '
                    . $this->getMapper()->getDbTable()->getAdapter()->quote($primary_key['idagentcommercial'])
                    . ' AND login_agent_comm = '
                    . $this->getMapper()->getDbTable()->getAdapter()->quote($primary_key['login_agent_comm']));
    }
}
