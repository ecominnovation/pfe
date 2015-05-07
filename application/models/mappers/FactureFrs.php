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
 * Data Mapper implementation for Application_Model_FactureFrs
 *
 * @package Application_Model
 * @subpackage Mapper
 * @author <YOUR NAME HERE>
 */
class Application_Model_Mapper_FactureFrs extends Application_Model_Mapper_MapperAbstract
{
    /**
     * Returns an array, keys are the field names.
     *
     * @param Application_Model_FactureFrs $model
     * @return array
     */
    public function toArray($model)
    {
        if (! $model instanceof Application_Model_FactureFrs) {
            throw new Exception('Unable to create array: invalid model passed to mapper');
        }

        $result = array(
            'idFacture_frs' => $model->getIdFactureFrs(),
            'Date_facturation_frs' => $model->getDateFacturationFrs(),
            'Quantité' => $model->getQuantité(),
            'Prix' => $model->getPrix(),
            'Totale' => $model->getTotale(),
        );

        return $result;
    }

    /**
     * Returns the DbTable class associated with this mapper
     *
     * @return Application_Model_DbTable_FactureFrs
     */
    public function getDbTable()
    {
        if ($this->_dbTable === null) {
            $this->setDbTable('Application_Model_DbTable_FactureFrs');
        }

        return $this->_dbTable;
    }

    /**
     * Deletes the current model
     *
     * @param Application_Model_FactureFrs $model The model to delete
     * @see Application_Model_DbTable_TableAbstract::delete()
     * @return int
     */
    public function delete($model)
    {
        if (! $model instanceof Application_Model_FactureFrs) {
            throw new Exception('Unable to delete: invalid model passed to mapper');
        }

        $this->getDbTable()->getAdapter()->beginTransaction();
        try {
            $where = $this->getDbTable()->getAdapter()->quoteInto('idFacture_frs = ?', $model->getIdFactureFrs());
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
     * @param Application_Model_FactureFrs $model
     * @param boolean $ignoreEmptyValues Should empty values saved
     * @param boolean $recursive Should the object graph be walked for all related elements
     * @param boolean $useTransaction Flag to indicate if save should be done inside a database transaction
     * @return boolean If the save action was successful
     */
    public function save(Application_Model_FactureFrs $model,
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

        $primary_key = $model->getIdFactureFrs();
        $success = true;

        if ($useTransaction) {
            $this->getDbTable()->getAdapter()->beginTransaction();
        }

        unset($data['idFacture_frs']);

        try {
            if ($primary_key === null) {
                $primary_key = $this->getDbTable()->insert($data);
                if ($primary_key) {
                    $model->setIdFactureFrs($primary_key);
                } else {
                    $success = false;
                }
            } else {
                $this->getDbTable()
                     ->update($data,
                              array(
                                 'idFacture_frs = ?' => $primary_key
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
     * @param int $primary_key
     * @param Application_Model_FactureFrs|null $model
     * @return Application_Model_FactureFrs|null The object provided or null if not found
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
     * @param Application_Model_FactureFrs|null $entry The object to load the data into, or null to have one created
     * @return Application_Model_FactureFrs The model with the data provided
     */
    public function loadModel($data, $entry)
    {
        if ($entry === null) {
            $entry = new Application_Model_FactureFrs();
        }

        if (is_array($data)) {
            $entry->setIdFactureFrs($data['idFacture_frs'])
                  ->setDateFacturationFrs($data['Date_facturation_frs'])
                  ->setQuantité($data['Quantité'])
                  ->setPrix($data['Prix'])
                  ->setTotale($data['Totale']);
        } elseif ($data instanceof Zend_Db_Table_Row_Abstract || $data instanceof stdClass) {
            $entry->setIdFactureFrs($data->idFacture_frs)
                  ->setDateFacturationFrs($data->Date_facturation_frs)
                  ->setQuantité($data->Quantité)
                  ->setPrix($data->Prix)
                  ->setTotale($data->Totale);
        }

        $entry->setMapper($this);

        return $entry;
    }
}
