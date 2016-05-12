<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 namespace ZendSkeletonModule\Model;

class Users
{
   public $id;
   public $name;
   public $email;

   public function exchangeArray($data)
   {
       $this->id     = (!empty($data['id'])) ? $data['id'] : null;
       $this->name = (!empty($data['name'])) ? $data['name'] : null;
       $this->email  = (!empty($data['email'])) ? $data['email'] : null;
       $this->age  = (!empty($data['age'])) ? $data['age'] : null;
   }
}