<?php

class ConnexionController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function chefAction()
    {
        // action body
    }
    
    public function cnxchefAction()
    {
        $request = $this->getRequest()->getPost();
        $login = $request['loginchef'];
        $password = $request['passwordchef'];
        
        echo $login." ".$password;
        $DbAdapter=Zend_Db_Table::getDefaultAdapter();
        
        $authAdapter = new Zend_Auth_Adapter_DbTable($DbAdapter);
       
        $authAdapter->setTableName('chef_entreprise');
        
        $authAdapter->setIdentityColumn('login_chef');
        $authAdapter->setCredentialColumn('mdp_chef');
        
        $authAdapter->setIdentity($login);
        $authAdapter->setCredential($password);
        
        $auth = Zend_Auth::getInstance();
        $result = $auth->authenticate($authAdapter);
        

        if ($result->isValid()) {
            echo 'valider connexion' ;
        }
        else{
            echo 'erreur de connexion' ;
        }
       
        
    }
    
    
    public function agentcommercialAction()
    {
         
      }
        
        
        public function cnxagentcommAction()
        {
             
            $request = $this->getRequest()->getPost();
            $login = $request['loginagentcomm'];
            $password = $request['passwordagentcomm'];
            
            echo $login." ".$password;
            $DbAdapter=Zend_Db_Table::getDefaultAdapter();
            
            $authAdapter = new Zend_Auth_Adapter_DbTable($DbAdapter);
             
            $authAdapter->setTableName('agentcommercial');
            
            $authAdapter->setIdentityColumn('login_agent_comm');
            $authAdapter->setCredentialColumn('mdp_agent_comm');
            
            $authAdapter->setIdentity($login);
            $authAdapter->setCredential($password);
            
            $auth = Zend_Auth::getInstance();
            $result = $auth->authenticate($authAdapter);
            
            
            if ($result->isValid()) {
                $this->_helper->redirector("index","Agentcomm");
            }
            else{
                echo 'erreur de connexion' ;
            }
             
        }
        
    public function agentstockAction()
    {
        // action body
    }
    public function cnxagentstockAction()
    {
        $request = $this->getRequest()->getPost();
        $login = $request['loginagentstock'];
        $password = $request['passworagentstock'];
        
        echo $login." ".$password;
        $DbAdapter=Zend_Db_Table::getDefaultAdapter();
        
        $authAdapter = new Zend_Auth_Adapter_DbTable($DbAdapter);
         
        $authAdapter->setTableName('agentstock');
        
        $authAdapter->setIdentityColumn('login_agentstock');
        $authAdapter->setCredentialColumn('mdp_agentstock');
        
        $authAdapter->setIdentity($login);
        $authAdapter->setCredential($password);
        
        $auth = Zend_Auth::getInstance();
        $result = $auth->authenticate($authAdapter);
        
        
        if ($result->isValid()) {
            echo 'valider connexion' ;
        }
        else{
            echo 'erreur de connexion' ;
        }
            
    
    }
    public function administrateurAction()
    {
        // action body

    }
    public function cnxadministrateurAction()
    {
         
        $request = $this->getRequest()->getPost();
        $login = $request['loginadmin'];
        $password = $request['passwordadmin'];
        
        echo $login." ".$password;
        $DbAdapter=Zend_Db_Table::getDefaultAdapter();
        
        $authAdapter = new Zend_Auth_Adapter_DbTable($DbAdapter);
         
        $authAdapter->setTableName('administrateur');
        
        $authAdapter->setIdentityColumn('login_admin');
        $authAdapter->setCredentialColumn('mdp_admin');
        
        $authAdapter->setIdentity($login);
        $authAdapter->setCredential($password);
        
        $auth = Zend_Auth::getInstance();
        $result = $auth->authenticate($authAdapter);
        
        
        if ($result->isValid()) {
            echo 'valider connexion' ;
        }
        else{
            echo 'erreur de connexion' ;
        }
         
    }
}


