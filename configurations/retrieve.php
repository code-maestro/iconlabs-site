<?php

  class User extends Dbh{

    protected function retrieveUsers(){

      $query = "SELECT * FROM user";
      $result = $this->connect()->query($query);
      $numRows = $result->num_rows;

      if ($numRows > 0) {
        while ($rows = $result->fetch_assoc()) {
          $data[] = $rows;
        }

        return $data;

      }
    } 
  }