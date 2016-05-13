<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ZendSkeletonModule\Form;

use Zend\Form\Form;

class UsersForm extends Form
{
    public function __construct()
    {
        parent::__construct('users');
        
//        $this->add(array(
//            'name' => 'id',
//            'type' => 'Hidden',
//        ));
        $this->add(array(
            'name' => 'name',
            'type' => 'Text',
            'options' => array(
                'label' => 'Name',
            ),
            'attributes' => array(
              'style' => 'margin-left:30px'  
            ),
        ));
        $this->add(array(
            'name' => 'age',
            'type' => 'Text',
            'options' => array(
                'label' => 'Age',
            ),
            'attributes' => array(
              'style' => 'margin-left:40px'  
            ),
        ));
        $this->add(array(
            'name' => 'password',
            'type' => 'Password',
            'options' => array(
                'label' => 'Password',
            ),
        ));
        $this->add(array(
            'name' => 'email',
            'type' => 'Text',
            'options' => array(
                'label' => 'Email',
            ),
            'attributes' => array(
              'style' => 'margin-left:30px'  
            ),
        ));
        $this->add(array(
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'Go',
                'id' => 'submitbutton',
            ),
        ));
    }
    
//    public function isValid() {
//        parent::isValid();
//        
//        return TRUE;
//    } 
    
}