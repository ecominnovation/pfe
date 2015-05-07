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
 * Table definition for bon_de_comm_clt
 *
 * @package Application_Model
 * @subpackage DbTable
 * @author <YOUR NAME HERE>
 */
class Application_Model_DbTable_BonDeCommClt extends Application_Model_DbTable_TableAbstract
{
    /**
     * $_name - name of database table
     *
     * @var string
     */
    protected $_name = 'bon_de_comm_clt';

    /**
     * $_id - this is the primary key name
     *
     * @var int
     */
    protected $_id = 'idBon_clt';

    protected $_sequence = true;

    protected $_referenceMap = array(
        'FkBonDeCommCltClient1' => array(
          	'columns' => 'Client_idclient',
            'refTableClass' => 'Application_Model_DbTable_Client',
            'refColumns' => 'idclient'
        )
    );
    



}
