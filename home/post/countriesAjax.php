<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 1/3/2020
 * Time: 2:17 AM
 */
require_once "../system/System.php";
$sys = new System();



if (isset($_POST['country_id']) && !empty($_POST['country_id'])){
    //fetch the subtypes

    $id = $_POST['country_id'];
    $type = $sys->getCountryStates($id);
    if (sizeof($type) > 0){
        echo '<option>Select State</option>';
        foreach($type as $key){
            echo '<option value="'.$key["id"].'">'.$key["name"].'</option>';
        }
    }else{
        echo '<option>No States found</option>';
    }

}


if (isset($_POST['state_id']) && !empty($_POST['state_id'])){
    //fetch the types
    $id = $_POST['state_id'];
    $type = $sys->getStateCity($id);
    if (sizeof($type) > 0){
        echo '<option>Select City</option>';
        foreach($type as $key){
            echo '<option value="'.$key["id"].'">'.$key["name"].'</option>';
        }
    }else{
        echo '<option>No Cities found</option>';
    }

}
