<?php

  class dbModel
  {
    $conn;
    $servername = "frc353.encs.concordia.ca";
    $username = "frc353_2";
    $password = "AQdFNA";

    function connectDB() {
      $conn = new mysqli($servername, $username, $password);
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    function disconnectDB() {
      $conn->close();
    }

    function findData($query) {
      // make array for results and connect to db
      $data = array();
      $this->connectDB();
      // make query
      $result = $this->$conn->query($query);

      // store each row in an arry
      while($row = $result->fetch_object()) {
        $data[] = $row;
      }

      $this->disconnectDB();
      return $data;
    }

    function updateData($query) {

    }

    function addData($query) {

    }
  }
?>
