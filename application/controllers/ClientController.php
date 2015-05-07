<?php

class ClientController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $client_model=new Application_Model_DbTable_Client();
        $clientobjs=$client_model->fetchAll($client_model->select()->order('idclient ASC')->limit(5, 0));
        if($clientobjs){
            $this->view->dataclient=$clientobjs;
        }
        else{
            $this->view->dataclient= false;
        }
    }

    
    public function ajouterAction()
    {
        // action body
    }
    
    public function listeAction()
    {
        
    }

    public function gridAction() 
    {
        var_dump($_POST); exit;
    }

}

