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
 * Table definition for articles
 *
 * @package Application_Model
 * @subpackage DbTable
 * @author <YOUR NAME HERE>
 */
class Application_Model_DbTable_Articles extends Application_Model_DbTable_TableAbstract
{
    /**
     * $_name - name of database table
     *
     * @var string
     */
    protected $_name = 'articles';

    /**
     * $_id - this is the primary key name
     *
     * @var int
     */
    protected $_id = 'idarticles';

    protected $_sequence = true;

    
    protected $_dependentTables = array(
        'Agentstock'
    );



}
