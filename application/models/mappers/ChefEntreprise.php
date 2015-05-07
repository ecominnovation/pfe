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
 * Data Mapper implementation for Application_Model_ChefEntreprise
 *
 * @package Application_Model
 * @subpackage Mapper
 * @author <YOUR NAME HERE>
 */
class Application_Model_Mapper_ChefEntreprise extends Application_Model_Mapper_MapperAbstract
{
    /**
     * Returns an array, keys are the field names.
     *
     * @param Application_Model_ChefEntreprise $model
     * @return array
     */
    public function toArray($model)
    {
        if (! $model instanceof Application_Model_ChefEntreprise) {
            throw new Exception('Unable to create array: invalid model passed to mapper');
        }

        $result = array(
            'idchef' => $model->getIdchef(),
            'login_chef' => $model->getLoginChef(),
            'mdp_chef' => $model->getMdpChef(),
            'nom_chef' => $model->getNomChef(),
            'prenom_chef' => $model->getPrenomChef(),
            'date_naisscance' => $model->getDateNaisscance(),
            'genre' => $model->getGenre(),
            'commentaire' => $model->getCommentaire(),
            'email' => $model->getEmail(),
            'tel' => $model->getTel(),
            'Facebook' => $model->getFacebook(),
        );

        return $result;
    }

    /**
     * Returns the DbTable class associated with this mapper
     *
     * @return Application_Model_DbTable_ChefEntreprise
     */
    public function getDbTable()
    {
        if ($this->_dbTable === null) {
            $this->setDbTable('Application_Model_DbTable_ChefEntreprise');
        }

        return $this->_dbTable;
    }

    /**
     * Deletes the current model
     *
     * @param Application_Model_ChefEntreprise $model The model to delete
     * @see Application_Model_DbTable_TableAbstract::delete()
     * @return int
     */
    public function delete($model)
    {
        if (! $model instanceof Application_Model_ChefEntreprise) {
            throw new Exception('Unable to delete: invalid model passed to mapper');
        }

        $this->getDbTable()->getAdapter()->beginTransaction();
        try {
            $where = array();
        
            $pk_val = $model->getIdchef();
            if ($pk_val === null) {
                throw new Exception('The value for Idchef cannot be null');
            } else {
                $where[] = $this->getDbTable()->getAdapter()->quoteInto('idchef = ?', $pk_val);
            }

            $pk_val = $model->getLoginChef();
            if ($pk_val === null) {
                throw new Exception('The value for LoginChef cannot be null');
            } else {
                $where[] = $this->getDbTable()->getAdapter()->quoteInto('login_chef = ?', $pk_val);
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
     * @param Application_Model_ChefEntreprise $model
     * @param boolean $ignoreEmptyValues Should empty values saved
     * @param boolean $recursive Should the object graph be walked for all related elements
     * @param boolean $useTransaction Flag to indicate if save should be done inside a database transaction
     * @return boolean If the save action was successful
     */
    public function save(Application_Model_ChefEntreprise $model,
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

        $pk_val = $model->getIdchef();
        if ($pk_val === null) {
            return false;
        } else {
            $primary_key['idchef'] = $pk_val;
        }

        $pk_val = $model->getLoginChef();
        if ($pk_val === null) {
            return false;
        } else {
            $primary_key['login_chef'] = $pk_val;
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
                                 'idchef = ?' => $primary_key['idchef'],
                                 'login_chef = ?' => $primary_key['login_chef']
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
     * @param Application_Model_ChefEntreprise|null $model
     * @return Application_Model_ChefEntreprise|null The object provided or null if not found
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
     * @param Application_Model_ChefEntreprise|null $entry The object to load the data into, or null to have one created
     * @return Application_Model_ChefEntreprise The model with the data provided
     */
    public function loadModel($data, $entry)
    {
        if ($entry === null) {
            $entry = new Application_Model_ChefEntreprise();
        }

        if (is_array($data)) {
            $entry->setIdchef($data['idchef'])
                  ->setLoginChef($data['login_chef'])
                  ->setMdpChef($data['mdp_chef'])
                  ->setNomChef($data['nom_chef'])
                  ->setPrenomChef($data['prenom_chef'])
                  ->setDateNaisscance($data['date_naisscance'])
                  ->setGenre($data['genre'])
                  ->setCommentaire($data['commentaire'])
                  ->setEmail($data['email'])
                  ->setTel($data['tel'])
                  ->setFacebook($data['Facebook']);
        } elseif ($data instanceof Zend_Db_Table_Row_Abstract || $data instanceof stdClass) {
            $entry->setIdchef($data->idchef)
                  ->setLoginChef($data->login_chef)
                  ->setMdpChef($data->mdp_chef)
                  ->setNomChef($data->nom_chef)
                  ->setPrenomChef($data->prenom_chef)
                  ->setDateNaisscance($data->date_naisscance)
                  ->setGenre($data->genre)
                  ->setCommentaire($data->commentaire)
                  ->setEmail($data->email)
                  ->setTel($data->tel)
                  ->setFacebook($data->Facebook);
        }

        $entry->setMapper($this);

        return $entry;
    }
}
