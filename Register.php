<?php
  $con = mysqli_connect("mysql7.000webhost.com", "a6662282_pagpik", "pagpetar131", "a6662282_pagpik");
  
  $name = $_POST["name"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  
  $statement = mysqli_prepare($con, "INSERT INTO user (name, username, password) VALUES (?, ?, ?, ');
  mysqli_stmt_bind_param($statement, "siss", $name, $username, $password);
  mysqli-stmt_execute($statement);
  
  $response = array();
  $response["success"] = true;
  
  echo json_encode($response);
