<?php
include '../config/dbconnect.php';
include_once 'common.php';

if (isset($_POST['getStateByCountry']) == "getStateByCountry") {
    $countryId = $_POST['countryId'];
    $common = new Common();
    $states = $common->getStateByCountry($conn,$countryId);
    $stateData = '<option value="0">State</option>';
    if ($states->num_rows>0){
        while ($state = $states->fetch_object()) {
            $stateData .= '<option value="'.$state->id.'">'.$state->state_name.'</option>';
        }
    }
    echo "test^".$stateData;
}
if (isset($_POST['getCityByState']) == "getCityByState") {
    $stateId = $_POST['stateId'];
    $common = new Common();
    $cities = $common->getCityByState($conn,$stateId);
    $cityData = '<option value="0">City</option>';
    if ($cities->num_rows>0){
        while ($city = $cities->fetch_object()) {
            $cityData .= '<option value="'.$city->id.'">'.$city->city_name.'</option>';
        }
    }
    echo "test^".$cityData;
}


?>