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
 * Table definition for agentstock
 *
 * @package Application_Model
 * @subpackage DbTable
 * @author <YOUR NAME HERE>
 */
class Application_Model_DbTable_Agentstock extends Application_Model_DbTable_TableAbstract
{
    /**
     * $_name - name of database table
     *
     * @var string
     */
    protected $_name = 'agentstock';

    /**
     * $_id - this is the primary key name
     *
     * @var array
     */
    protected $_id = array('idagentstock', 'login_agentstock');

    protected $_sequence = false;

    protected $_referenceMap = array(
        'FkAgentstockArticles1' => array(
          	'columns' => 'Articles_idarticles',
            'refTableClass' => 'Application_Model_DbTable_Articles',
            'refColumns' => 'idarticles'
        )
    );
    



}
