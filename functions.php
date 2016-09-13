<?php

require 'config.php';

function connect($config) {
  
  try {
    $conn = new PDO('mysql:host=dinnerranger-test.cqrlhvsdobw7.us-east-1.rds.amazonaws.com:3306;dbname=dinnerranger-test',
                    $config['DB_USERNAME'],
                    $config['DB_PASSWORD']);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo '<h1>CONNECTED!</h1>';
    return $conn;

  } catch(PDOException $e) {

    echo 'ERROR: ' . $e->getMessage();

  }
  
}

function query($query,$bindings,$conn){
  $stmt = $conn->prepare($query);
  $stmt->execute($bindings);
  
  $results = $stmt->fetchAll();
  
  return $results ? $results : false;
}

function get($tableName,$conn){
  try {
    $result = $conn->query("SELECT * from $tableName");
    
    return ($result->rowCount() > 0) ? $result : false;
  } catch(Exception $e) {
    return false;
  }
}