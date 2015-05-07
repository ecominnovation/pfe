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
 * Table definition for client
 *
 * @package Application_Model
 * @subpackage DbTable
 * @author <YOUR NAME HERE>
 */
class Application_Model_DbTable_Client extends Application_Model_DbTable_TableAbstract
{
    /**
     * $_name - name of database table
     *
     * @var string
     */
    protected $_name = 'client';

    /**
     * $_id - this is the primary key name
     *
     * @var int
     */
    protected $_id = 'idclient';

    protected $_sequence = true;

    
    protected $_dependentTables = array(
        'Agentcommercial',
        'BonDeCommClt',
        'DevisClt',
        'FactureClt'
    );



}
