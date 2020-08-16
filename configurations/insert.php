<?php

  class InsertUser extends Dbh{
    public function insert(){

      if (isset($_POST['submit'])) {
        if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['comment'])) {
          if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['comment'])) {
            
            // THE VARIABLES STORING THE DATA FROM THE FORM
            $firstname = $_POST['fname'];
            $lastname = $_POST['lname'];
            $mail = $_POST['email'];
            $comments = $_POST['comment'];

            //  THE QUERY FOR DATA INSERTION
            $query = "INSERT INTO user (fname, lname, email, comment) VALUES ('$firstname', '$lastname', '$mail', '$comments')";
            
            // EXECUTNG THE QUERY
            try {
              //code...
              if ($sql = $this->connect()->query($query)) {
                echo "<script> alert(' DATA ENTERED SUCCESSFULLY '); </script>";
                echo "<script> window.location.href = '../oop/opp.php'; </script>";
              }else{
                echo "<script> alert(' DATA NOT FAILED '); </script>";
              }
            } catch (Exception $th) {
              //throw $th;
              echo 'Some stupid error idk bout'. $th->getMessage();
            }
            
          }

          else {
            echo "<script> alert(' FILL EVERYTHING '); </script>";
          }
        }
      }

      mysqli_close($this->connect());
     
    }
  }

?>