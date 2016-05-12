<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Users\Model;

class Users
{
    public function __construct() {

        $sl = $this->getServiceLocator();
        $adapter = $sl->get('Zend\Db\Adapter\Adapter');
        $statement = $adapter->query('SELECT * FROM `users`');
        $results = $statement->execute();
        $row = $results->current();
        $name = $row['name'];
        var_dump($row);
    }

}