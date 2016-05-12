<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Users\Model;
use Zend\Db\TableGateway\TableGateway;

class UsersTable
{
    protected $tableGateway;
    
    public function __construct(TableGateway $tableGateway)
    {
        echo 'construct';
        $this->tableGateway = $tableGateway;
    }
    
    public function getAll() {

        $sl = $this->getServiceLocator();
        $adapter = $sl->get('Zend\Db\Adapter\Adapter');
        $statement = $adapter->query('SELECT * FROM `users`');
        $results = $statement->execute();
        $row = $results->current();
        $name = $row['name'];
        var_dump($row);
    }
    
    public function getUser($id)
    {
        $id  = (int) $id;
        $rowset = $this->tableGateway->select(array('id' => $id));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $id");
        }
        return $row;
    }
    
    public function fetchAll()
    {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }

}