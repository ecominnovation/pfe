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
 * Table definition for administrateur
 *
 * @package Application_Model
 * @subpackage DbTable
 * @author <YOUR NAME HERE>
 */
class Application_Model_DbTable_Administrateur extends Application_Model_DbTable_TableAbstract
{
    /**
     * $_name - name of database table
     *
     * @var string
     */
    protected $_name = 'administrateur';

    /**
     * $_id - this is the primary key name
     *
     * @var array
     */
    protected $_id = array('idadmin', 'login_admin');

    protected $_sequence = false;

    
    



}
