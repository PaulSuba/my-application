<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ZendSkeletonModule\Controller;

//use Zend\Form\Fieldset;
//use Zend\InputFilter\InputFilterProviderInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
//use Zend\Validator;
use Zend\Validator\ValidatorInterface;
use Zend\Validator\EmailAddress;
//use Zend\Version;



class HelloController extends AbstractActionController
{
    protected $albumTable;
    
    public function worldAction()
    {
        //$adapter = new Adapter();
//        $sl = $this->getServiceLocator();
//        $adapter = $sl->get('Zend\Db\Adapter\Adapter');
//        $statement = $adapter->query('SELECT * FROM `users`');
//        $results = $statement->execute();s
//$row = $results->current();
//$name = $row['name'];

        //var_dump($row);

        //$validator = new Zend\Validator\StringLength(8);
        //$validator = new Zend\Validator\EmailAddress();
        //$email = $_POST('email');
        //$validator->setMessage('Email is invalid!');
        
//        if (!$validator->isValid($email)) {
//            $messages = $validator->getMessages();
//            echo ($messages);
//
//            // "The string 'word' is too short; it must be at least 8 characters"
//        }

        $view1 = new ViewModel(array(
            'users' => $this->getUsersTable()->fetchAll(),
        ));
        $view1->setTemplate('zend-skeleton-module/hello/world');
        return $view1;
        
//        $request = $this->getRequest()->getPost()->name;
//       
//        if($this->getRequest()->isPost()){
//            //print_r($request);
//            $message = $this->getRequest()->getPost()->name;
//        }else {
//            $message = 'User';
//        }
//
//        $view = new ViewModel(array('variable' => $message));
//        $view->setTemplate('zend-skeleton-module/hello/world');
//        return $view;
    }
    
    public function getUsersTable()
    {
        if (!$this->albumTable) {
            $sm = $this->getServiceLocator();
            $this->albumTable = $sm->get('ZendSkeletonModule\Model\UsersTable');
        }
        return $this->albumTable;
    }
}