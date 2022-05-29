<?php

include '../config/dbconnect.php';  

class Common
{
  public function getCountry($conn)
  {
      $mainQuery = "SELECT * FROM country";
      $result1 = $conn->query($mainQuery) or die("Error in main Query".$conn->error);
      return $result1;
  }

  public function getStateByCountry($conn,$countryId){
      $query = "SELECT * FROM state WHERE country_id='$countryId'";
      $result = $conn->query($query) or die("Error in  Query".$conn->error);
      return $result;
  }

  public function getCityByState($conn,$stateId){
      $query = "SELECT * FROM city WHERE state_id='$stateId'";
      $result = $conn->query($query) or die("Error in  Query".$conn->error);
      return $result;
  }
}