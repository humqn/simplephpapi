<?php
 include_once('Controllers/UserController.php');

 header('Content-Type: application/json');
 echo json_encode(
   array('data' => 'hello Simple Api php')
 );
