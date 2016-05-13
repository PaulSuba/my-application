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
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\Input;
//use Zend\Validator;
//use Zend\Validator\ValidatorInterface;
//use Zend\Validator\Callback;
use ZendSkeletonModule\Form\UsersForm;



class HelloController extends AbstractActionController
{
    protected $usersTable;
    
    public function worldAction()
    {

          $form = new UsersForm();
          $form->get('submit')->setValue('Register');
          //return array('form' => $form);
//        $validator = new Zend\Validator\StringLength(8);
//
//        $validator->setMessage(
//            'The string \'%value%\' is too short; it must be at least %min% ' .
//            'characters',
//            Zend\Validator\StringLength::TOO_SHORT);
//
//        if (!$validator->isValid($this>getRequest()->getPost()->name)) {
//            $messages = $validator->getMessages();
//            echo current($messages);
//
//            // "The string 'word' is too short; it must be at least 8 characters"
//        }
//        
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
        if($this->getRequest()->isPost()){
            
            $valid = new Zend\Validator\Callback('myMethod');
            if($valid->isValid($this->getRequest()->getPost()->name)){
                echo 'input valid';
            } else {
                echo 'input invalid';
            }
            
            $email = new Input('email');
            $email->getValidatorChain()
                  ->attach(new Validator\EmailAddress());

            $password = new Input('password');
            $password->getValidatorChain()
                     ->attach(new Validator\StringLength(8));

            $inputFilter = new InputFilter();
            $inputFilter->add($email)
                        ->add($password)
                        ->setData($_POST);

            if ($inputFilter->isValid()) {
                $request = $this->getRequest();
                $this->getUsersTable()->saveUser($request);
            } else {
                echo "The form is not valid\n";
                foreach ($inputFilter->getInvalidInput() as $error) {
                    print_r($error->getMessages());
                }
            }

            $message = $this->getRequest()->getPost()->name;
        }else {
            $message = 'User';
        }
        
        
        $view1 = new ViewModel(array(
            'users' => $this->getUsersTable()->fetchAll(),
            'form' => $form,
            //'check' => $this->getUsersTable()->getUser(1),
        ));
        $view1->setTemplate('zend-skeleton-module/hello/world');
        return $view1;
   
    }
    
    public function getUsersTable()
    {
        if (!$this->usersTable) {
            $sm = $this->getServiceLocator();
            $this->usersTable = $sm->get('ZendSkeletonModule\Model\UsersTable');
        }
        return $this->usersTable;
    }
    
    public function myMethod($value)
    {
        return TRUE;
    }
}