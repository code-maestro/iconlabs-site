<?php

  class DisplayUser extends User{

    public function DisplayUsers(){
      $information = $this->retrieveUsers();

      foreach ($information as $data){
        echo "id :  " . $data['ID']."<br>";
        echo "fname : " . $data['fname']."<br>";
        echo "lname : " . $data['lname']."<br>";
        echo "email : " . $data['email']."<br>";
        echo "comments : " . $data['comment']."<br><br>";
      }
    }
  }

?>