<?php

/**
 * Application Model Mappers
 *
 * @package Application_Model
 * @subpackage Mapper
 * @author <YOUR NAME HERE>
 * @copyright ZF model generator
 * @license http://framework.zend.com/license/new-bsd     New BSD License
 */

/**
 * Data Mapper implementation for Application_Model_Agentstock
 *
 * @package Application_Model
 * @subpackage Mapper
 * @author <YOUR NAME HERE>
 */
class Application_Model_Mapper_Agentstock extends Application_Model_Mapper_MapperAbstract
{
    /**
     * Returns an array, keys are the field names.
     *
     * @param Application_Model_Agentstock $model
     * @return array
     */
    public function toArray($model)
    {
        if (! $model instanceof Application_Model_Agentstock) {
            throw new Exception('Unable to create array: invalid model passed to mapper');
        }

        $result = array(
            'idagentstock' => $model->getIdagentstock(),
            'login_agentstock' => $model->getLoginAgentstock(),
            'mdp_agentstock' => $model->getMdpAgentstock(),
            'nom_agentstock' => $model->getNomAgentstock(),
            'prenom_agentstock' => $model->getPrenomAgentstock(),
            'date_naisscance' => $model->getDateNaisscance(),
            'genre' => $model->getGenre(),
            'commentaire' => $model->getCommentaire(),
            'email' => $model->getEmail(),
            'tel' => $model->getTel(),
            'facebook' => $model->getFacebook(),
            'Articles_idarticles' => $model->getArticlesIdarticles(),
        );

        return $result;
    }

    /**
     * Returns the DbTable class associated with this mapper
     *
     * @return Application_Model_DbTable_Agentstock
     */
    public function getDbTable()
    {
        if ($this->_dbTable === null) {
            $this->setDbTable('Application_Model_DbTable_Agentstock');
        }

        return $this->_dbTable;
    }

    /**
     * Deletes the current model
     *
     * @param Application_Model_Agentstock $model The model to delete
     * @see Application_Model_DbTable_TableAbstract::delete()
     * @return int
     */
    public function delete($model)
    {
        if (! $model instanceof Application_Model_Agentstock) {
            throw new Exception('Unable to delete: invalid model passed to mapper');
        }

        $this->getDbTable()->getAdapter()->beginTransaction();
        try {
            $where = array();
        
            $pk_val = $model->getIdagentstock();
            if ($pk_val === null) {
                throw new Exception('The value for Idagentstock cannot be null');
            } else {
                $where[] = $this->getDbTable()->getAdapter()->quoteInto('idagentstock = ?', $pk_val);
            }

            $pk_val = $model->getLoginAgentstock();
            if ($pk_val === null) {
                throw new Exception('The value for LoginAgentstock cannot be null');
            } else {
                $where[] = $this->getDbTable()->getAdapter()->quoteInto('login_agentstock = ?', $pk_val);
            }
            $result = $this->getDbTable()->delete($where);

            $this->getDbTable()->getAdapter()->commit();
        } catch (Exception $e) {
            $this->getDbTable()->getAdapter()->rollback();
            $result = false;
        }

        return $result;
    }

    /**
     * Saves current row, and optionally dependent rows
     *
     * @param Application_Model_Agentstock $model
     * @param boolean $ignoreEmptyValues Should empty values saved
     * @param boolean $recursive Should the object graph be walked for all related elements
     * @param boolean $useTransaction Flag to indicate if save should be done inside a database transaction
     * @return boolean If the save action was successful
     */
    public function save(Application_Model_Agentstock $model,
        $ignoreEmptyValues = true, $recursive = false, $useTransaction = true
    ) {
        $data = $model->toArray();
        if ($ignoreEmptyValues) {
            foreach ($data as $key => $value) {
                if ($value === null or $value === '') {
                    unset($data[$key]);
                }
            }
        }

        $primary_key = array();

        $pk_val = $model->getIdagentstock();
        if ($pk_val === null) {
            return false;
        } else {
            $primary_key['idagentstock'] = $pk_val;
        }

        $pk_val = $model->getLoginAgentstock();
        if ($pk_val === null) {
            return false;
        } else {
            $primary_key['login_agentstock'] = $pk_val;
        }

        $exists = $this->find($primary_key, null);
        $success = true;

        if ($useTransaction) {
            $this->getDbTable()->getAdapter()->beginTransaction();
        }

        try {
            // Check for current existence to know if needs to be inserted
            if ($exists === null) {
                $this->getDbTable()->insert($data);
            } else {
                $this->getDbTable()
                     ->update($data,
                              array(
                                 'idagentstock = ?' => $primary_key['idagentstock'],
                                 'login_agentstock = ?' => $primary_key['login_agentstock']
                              )
                );
            }

            if ($useTransaction && $success) {
                $this->getDbTable()->getAdapter()->commit();
            } elseif ($useTransaction) {
                $this->getDbTable()->getAdapter()->rollback();
            }

        } catch (Exception $e) {
            if ($useTransaction) {
                $this->getDbTable()->getAdapter()->rollback();
            }

            $success = false;
        }

        return $success;
    }

    /**
     * Finds row by primary key
     *
     * @param array $primary_key
     * @param Application_Model_Agentstock|null $model
     * @return Application_Model_Agentstock|null The object provided or null if not found
     */
    public function find($primary_key, $model)
    {
        $result = $this->getRowset($primary_key);

        if (is_null($result)) {
            return null;
        }

        $row = $result->current();

        $model = $this->loadModel($row, $model);

        return $model;
    }

    /**
     * Loads the model specific data into the model object
     *
     * @param Zend_Db_Table_Row_Abstract|array $data The data as returned from a Zend_Db query
     * @param Application_Model_Agentstock|null $entry The object to load the data into, or null to have one created
     * @return Application_Model_Agentstock The model with the data provided
     */
    public function loadModel($data, $entry)
    {
        if ($entry === null) {
            $entry = new Application_Model_Agentstock();
        }

        if (is_array($data)) {
            $entry->setIdagentstock($data['idagentstock'])
                  ->setLoginAgentstock($data['login_agentstock'])
                  ->setMdpAgentstock($data['mdp_agentstock'])
                  ->setNomAgentstock($data['nom_agentstock'])
                  ->setPrenomAgentstock($data['prenom_agentstock'])
                  ->setDateNaisscance($data['date_naisscance'])
                  ->setGenre($data['genre'])
                  ->setCommentaire($data['commentaire'])
                  ->setEmail($data['email'])
                  ->setTel($data['tel'])
                  ->setFacebook($data['facebook'])
                  ->setArticlesIdarticles($data['Articles_idarticles']);
        } elseif ($data instanceof Zend_Db_Table_Row_Abstract || $data instanceof stdClass) {
            $entry->setIdagentstock($data->idagentstock)
                  ->setLoginAgentstock($data->login_agentstock)
                  ->setMdpAgentstock($data->mdp_agentstock)
                  ->setNomAgentstock($data->nom_agentstock)
                  ->setPrenomAgentstock($data->prenom_agentstock)
                  ->setDateNaisscance($data->date_naisscance)
                  ->setGenre($data->genre)
                  ->setCommentaire($data->commentaire)
                  ->setEmail($data->email)
                  ->setTel($data->tel)
                  ->setFacebook($data->facebook)
                  ->setArticlesIdarticles($data->Articles_idarticles);
        }

        $entry->setMapper($this);

        return $entry;
    }
}
