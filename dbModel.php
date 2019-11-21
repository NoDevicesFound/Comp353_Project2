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
      mysqli->close($conn);
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
      $data->close();
      return $data[0];
    }

    function updateData($query) {
      $this->connectDB();

      $this->$conn->query($query);

      $this->disconnectDB();
    }

    function addData($query) {

    }
  }
?>
