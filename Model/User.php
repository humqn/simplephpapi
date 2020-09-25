<?php

class User {

   protected $name;
   protected $firstname;
   protected $birthday;

   function __construct($name, $firstname, $birthday=null) {
       $this->name = $name;
       $this->firstname = $firstname;
       $this->birthday = $birthday;
   }

   function getName() {
       return $this->name;
   }

   function setName($name) {
       $this->name = $name;
   }

   function getFirstName() {
       return $this->firstname;
   }

   function setFirstName($firstname) {
       $this->firstname = $firstname;
   }

   function getBirthday() {
       return $this->birthday;
   }

   function setBirthday($birthday) {
       $this->birthday = $birthday;
   }

}
