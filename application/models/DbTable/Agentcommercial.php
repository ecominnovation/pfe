<?php

/**
 * Application Model DbTables
 *
 * @package Application_Model
 * @subpackage DbTable
 * @author <YOUR NAME HERE>
 * @copyright ZF model generator
 * @license http://framework.zend.com/license/new-bsd     New BSD License
 */

/**
 * Table definition for agentcommercial
 *
 * @package Application_Model
 * @subpackage DbTable
 * @author <YOUR NAME HERE>
 */
class Application_Model_DbTable_Agentcommercial extends Application_Model_DbTable_TableAbstract
{
    /**
     * $_name - name of database table
     *
     * @var string
     */
    protected $_name = 'agentcommercial';

    /**
     * $_id - this is the primary key name
     *
     * @var array
     */
    protected $_id = array('idagentcommercial', 'login_agent_comm');

    protected $_sequence = false;

    protected $_referenceMap = array(
        'FkAgentcommercialClient1' => array(
          	'columns' => 'Client_idclient',
            'refTableClass' => 'Application_Model_DbTable_Client',
            'refColumns' => 'idclient'
        )
    );
    



}
