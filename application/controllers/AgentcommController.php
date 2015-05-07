<?php

class AgentcommController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function ajoutclientAction()
    {
       
    }
    
    public function insererclientAction()
    {
        $nomsociete=$this->_getParam('nomsociete');
        $adressep=$this->_getParam('adressep');
        $numtelc=$this->_getParam('numtelc');
        $nomcontactp=$this->_getParam('nomcontactp');
        $numtelp=$this->_getParam('numtelp');
        $numfax=$this->_getParam('numfax');
        $siteweb=$this->_getParam('siteweb');
        $numtelm=$this->_getParam('numtelm');
        $emailc=$this->_getParam('emailc');
        $emailp=$this->_getParam('emailp');
        $descrption=$this->_getParam('descrption');
        
        
        $clt_model=new Application_Model_DbTable_Client();
       $record= array('nom_société_Clt'=>$this->_getParam('nomsociete')
    			,'adresse_postale_Clt'=>$this->_getParam('adressep')
    			,'numéro_Clt'=>$this->_getParam('numtelc')
    			,'nom_contact_personne'=>$this->_getParam('nomcontactp')
    			,'numéro_téléphone'=>$this->_getParam('numtelp')
    			,'numéro_Fax_Clt'=>$this->_getParam('numfax')
    			,'siteweb_Clt'=>$this->_getParam('siteweb')
    			,'numéro_téléphone_mobile'=>$this->_getParam('numtelm')
    			,'email_Clt'=>$this->_getParam('emailc')
    			,'email_personne'=>$this->_getParam('emailp')
    			,'description_Clt'=>$this->_getParam('descrption')
    			
    	);
        
       try{
           $data_record=$clt_model->insert($record);
           echo 'True ';
       }
       catch(Zend_Exception $e){
           //var_dump($record);
           echo $e->getMessage();
       }
       
       
       
        /*
        echo $nomsociete."   " .$descrption=$this->_getParam('descrption').$adressep=$this->_getParam('adressep')."".$numtelc=$this->_getParam('numtelc')."".
        $nomcontactp=$this->_getParam('nomcontactp')." ".
        $numtelp=$this->_getParam('numtelp')."  ".
        $numfax=$this->_getParam('numfax')." ".
        $siteweb=$this->_getParam('siteweb')." ".
        $numtelm=$this->_getParam('numtelm')." ".
        $emailc=$this->_getParam('emailc')." ".
        $emailp=$this->_getParam('emailp');
        */
    }
    
    
    public function listerclientAction()
    {
        
    }
    
    
}

