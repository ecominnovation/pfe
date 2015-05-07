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
 * Data Mapper implementation for Application_Model_Administrateur
 *
 * @package Application_Model
 * @subpackage Mapper
 * @author <YOUR NAME HERE>
 */
class Application_Model_Mapper_Administrateur extends Application_Model_Mapper_MapperAbstract
{
    /**
     * Returns an array, keys are the field names.
     *
     * @param Application_Model_Administrateur $model
     * @return array
     */
    public function toArray($model)
    {
        if (! $model instanceof Application_Model_Administrateur) {
            throw new Exception('Unable to create array: invalid model passed to mapper');
        }

        $result = array(
            'idadmin' => $model->getIdadmin(),
            'login_admin' => $model->getLoginAdmin(),
            'mdp_admin' => $model->getMdpAdmin(),
            'nom_admin' => $model->getNomAdmin(),
            'prenom_admin' => $model->getPrenomAdmin(),
            'date_naissance' => $model->getDateNaissance(),
            'genre' => $model->getGenre(),
            'commentaire' => $model->getCommentaire(),
            'email' => $model->getEmail(),
            'tel' => $model->getTel(),
            'facebook' => $model->getFacebook(),
        );

        return $result;
    }

    /**
     * Returns the DbTable class associated with this mapper
     *
     * @return Application_Model_DbTable_Administrateur
     */
    public function getDbTable()
    {
        if ($this->_dbTable === null) {
            $this->setDbTable('Application_Model_DbTable_Administrateur');
        }

        return $this->_dbTable;
    }

    /**
     * Deletes the current model
     *
     * @param Application_Model_Administrateur $model The model to delete
     * @see Application_Model_DbTable_TableAbstract::delete()
     * @return int
     */
    public function delete($model)
    {
        if (! $model instanceof Application_Model_Administrateur) {
            throw new Exception('Unable to delete: invalid model passed to mapper');
        }

        $this->getDbTable()->getAdapter()->beginTransaction();
        try {
            $where = array();
        
            $pk_val = $model->getIdadmin();
            if ($pk_val === null) {
                throw new Exception('The value for Idadmin cannot be null');
            } else {
                $where[] = $this->getDbTable()->getAdapter()->quoteInto('idadmin = ?', $pk_val);
            }

            $pk_val = $model->getLoginAdmin();
            if ($pk_val === null) {
                throw new Exception('The value for LoginAdmin cannot be null');
            } else {
                $where[] = $this->getDbTable()->getAdapter()->quoteInto('login_admin = ?', $pk_val);
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
     * @param Application_Model_Administrateur $model
     * @param boolean $ignoreEmptyValues Should empty values saved
     * @param boolean $recursive Should the object graph be walked for all related elements
     * @param boolean $useTransaction Flag to indicate if save should be done inside a database transaction
     * @return boolean If the save action was successful
     */
    public function save(Application_Model_Administrateur $model,
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

        $pk_val = $model->getIdadmin();
        if ($pk_val === null) {
            return false;
        } else {
            $primary_key['idadmin'] = $pk_val;
        }

        $pk_val = $model->getLoginAdmin();
        if ($pk_val === null) {
            return false;
        } else {
            $primary_key['login_admin'] = $pk_val;
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
                                 'idadmin = ?' => $primary_key['idadmin'],
                                 'login_admin = ?' => $primary_key['login_admin']
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
     * @param Application_Model_Administrateur|null $model
     * @return Application_Model_Administrateur|null The object provided or null if not found
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
     * @param Application_Model_Administrateur|null $entry The object to load the data into, or null to have one created
     * @return Application_Model_Administrateur The model with the data provided
     */
    public function loadModel($data, $entry)
    {
        if ($entry === null) {
            $entry = new Application_Model_Administrateur();
        }

        if (is_array($data)) {
            $entry->setIdadmin($data['idadmin'])
                  ->setLoginAdmin($data['login_admin'])
                  ->setMdpAdmin($data['mdp_admin'])
                  ->setNomAdmin($data['nom_admin'])
                  ->setPrenomAdmin($data['prenom_admin'])
                  ->setDateNaissance($data['date_naissance'])
                  ->setGenre($data['genre'])
                  ->setCommentaire($data['commentaire'])
                  ->setEmail($data['email'])
                  ->setTel($data['tel'])
                  ->setFacebook($data['facebook']);
        } elseif ($data instanceof Zend_Db_Table_Row_Abstract || $data instanceof stdClass) {
            $entry->setIdadmin($data->idadmin)
                  ->setLoginAdmin($data->login_admin)
                  ->setMdpAdmin($data->mdp_admin)
                  ->setNomAdmin($data->nom_admin)
                  ->setPrenomAdmin($data->prenom_admin)
                  ->setDateNaissance($data->date_naissance)
                  ->setGenre($data->genre)
                  ->setCommentaire($data->commentaire)
                  ->setEmail($data->email)
                  ->setTel($data->tel)
                  ->setFacebook($data->facebook);
        }

        $entry->setMapper($this);

        return $entry;
    }
}
