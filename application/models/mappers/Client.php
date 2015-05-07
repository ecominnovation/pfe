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
 * Data Mapper implementation for Application_Model_Client
 *
 * @package Application_Model
 * @subpackage Mapper
 * @author <YOUR NAME HERE>
 */
class Application_Model_Mapper_Client extends Application_Model_Mapper_MapperAbstract
{
    /**
     * Returns an array, keys are the field names.
     *
     * @param Application_Model_Client $model
     * @return array
     */
    public function toArray($model)
    {
        if (! $model instanceof Application_Model_Client) {
            throw new Exception('Unable to create array: invalid model passed to mapper');
        }

        $result = array(
            'idclient' => $model->getIdclient(),
            'nom_société_Clt' => $model->getNomSociétéClt(),
            'adresse_postale_Clt' => $model->getAdressePostaleClt(),
            'numéro_Clt' => $model->getNuméroClt(),
            'numéro_Fax_Clt' => $model->getNuméroFaxClt(),
            'siteweb_Clt' => $model->getSitewebClt(),
            'email_Clt' => $model->getEmailClt(),
            'description_Clt' => $model->getDescriptionClt(),
            'nom_contact_personne' => $model->getNomContactPersonne(),
            'numéro_téléphone' => $model->getNuméroTéléphone(),
            'numéro_téléphone_mobile' => $model->getNuméroTéléphoneMobile(),
            'email_personne' => $model->getEmailPersonne(),
        );

        return $result;
    }

    /**
     * Returns the DbTable class associated with this mapper
     *
     * @return Application_Model_DbTable_Client
     */
    public function getDbTable()
    {
        if ($this->_dbTable === null) {
            $this->setDbTable('Application_Model_DbTable_Client');
        }

        return $this->_dbTable;
    }

    /**
     * Deletes the current model
     *
     * @param Application_Model_Client $model The model to delete
     * @see Application_Model_DbTable_TableAbstract::delete()
     * @return int
     */
    public function delete($model)
    {
        if (! $model instanceof Application_Model_Client) {
            throw new Exception('Unable to delete: invalid model passed to mapper');
        }

        $this->getDbTable()->getAdapter()->beginTransaction();
        try {
            $where = $this->getDbTable()->getAdapter()->quoteInto('idclient = ?', $model->getIdclient());
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
     * @param Application_Model_Client $model
     * @param boolean $ignoreEmptyValues Should empty values saved
     * @param boolean $recursive Should the object graph be walked for all related elements
     * @param boolean $useTransaction Flag to indicate if save should be done inside a database transaction
     * @return boolean If the save action was successful
     */
    public function save(Application_Model_Client $model,
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

        $primary_key = $model->getIdclient();
        $success = true;

        if ($useTransaction) {
            $this->getDbTable()->getAdapter()->beginTransaction();
        }

        unset($data['idclient']);

        try {
            if ($primary_key === null) {
                $primary_key = $this->getDbTable()->insert($data);
                if ($primary_key) {
                    $model->setIdclient($primary_key);
                } else {
                    $success = false;
                }
            } else {
                $this->getDbTable()
                     ->update($data,
                              array(
                                 'idclient = ?' => $primary_key
                              )
                );
            }

            if ($recursive) {
                if ($success && $model->getAgentcommercial(false) !== null) {
                    $Agentcommercial = $model->getAgentcommercial();
                    foreach ($Agentcommercial as $value) {
                        $success = $success &&
                            $value->setClientIdclient($primary_key)
                                  ->save($ignoreEmptyValues, $recursive, false);

                        if (! $success) {
                            break;
                        }
                    }
                }

                if ($success && $model->getBonDeCommClt(false) !== null) {
                    $BonDeCommClt = $model->getBonDeCommClt();
                    foreach ($BonDeCommClt as $value) {
                        $success = $success &&
                            $value->setClientIdclient($primary_key)
                                  ->save($ignoreEmptyValues, $recursive, false);

                        if (! $success) {
                            break;
                        }
                    }
                }

                if ($success && $model->getDevisClt(false) !== null) {
                    $DevisClt = $model->getDevisClt();
                    foreach ($DevisClt as $value) {
                        $success = $success &&
                            $value->setClientIdclient($primary_key)
                                  ->save($ignoreEmptyValues, $recursive, false);

                        if (! $success) {
                            break;
                        }
                    }
                }

                if ($success && $model->getFactureClt(false) !== null) {
                    $FactureClt = $model->getFactureClt();
                    foreach ($FactureClt as $value) {
                        $success = $success &&
                            $value->setClientIdclient($primary_key)
                                  ->save($ignoreEmptyValues, $recursive, false);

                        if (! $success) {
                            break;
                        }
                    }
                }

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
     * @param Application_Model_Client|null $model
     * @return Application_Model_Client|null The object provided or null if not found
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
     * @param Application_Model_Client|null $entry The object to load the data into, or null to have one created
     * @return Application_Model_Client The model with the data provided
     */
    public function loadModel($data, $entry)
    {
        if ($entry === null) {
            $entry = new Application_Model_Client();
        }

        if (is_array($data)) {
            $entry->setIdclient($data['idclient'])
                  ->setNomSociétéClt($data['nom_société_Clt'])
                  ->setAdressePostaleClt($data['adresse_postale_Clt'])
                  ->setNuméroClt($data['numéro_Clt'])
                  ->setNuméroFaxClt($data['numéro_Fax_Clt'])
                  ->setSitewebClt($data['siteweb_Clt'])
                  ->setEmailClt($data['email_Clt'])
                  ->setDescriptionClt($data['description_Clt'])
                  ->setNomContactPersonne($data['nom_contact_personne'])
                  ->setNuméroTéléphone($data['numéro_téléphone'])
                  ->setNuméroTéléphoneMobile($data['numéro_téléphone_mobile'])
                  ->setEmailPersonne($data['email_personne']);
        } elseif ($data instanceof Zend_Db_Table_Row_Abstract || $data instanceof stdClass) {
            $entry->setIdclient($data->idclient)
                  ->setNomSociétéClt($data->nom_société_Clt)
                  ->setAdressePostaleClt($data->adresse_postale_Clt)
                  ->setNuméroClt($data->numéro_Clt)
                  ->setNuméroFaxClt($data->numéro_Fax_Clt)
                  ->setSitewebClt($data->siteweb_Clt)
                  ->setEmailClt($data->email_Clt)
                  ->setDescriptionClt($data->description_Clt)
                  ->setNomContactPersonne($data->nom_contact_personne)
                  ->setNuméroTéléphone($data->numéro_téléphone)
                  ->setNuméroTéléphoneMobile($data->numéro_téléphone_mobile)
                  ->setEmailPersonne($data->email_personne);
        }

        $entry->setMapper($this);

        return $entry;
    }
}
