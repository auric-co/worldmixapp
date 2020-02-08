<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 1/3/2020
 * Time: 2:17 AM
 */
require_once "../system/System.php";
$sys = new System();


if (isset($_POST['mode_id']) && !empty($_POST['mode_id'])){
    //fetch the types
    $id = $_POST['mode_id'];
    $type = $sys->getSubcat2($id);
    if (sizeof($type) > 0){
        echo '<option>Select Vehicle Type</option>';
        foreach($type as $key){
            echo '<option value="'.$key["id"].'">'.$key["name"].'</option>';
        }
    }else{
        echo '<option>No Vehicle Types found</option>';
    }

}

if (isset($_POST['type_id']) && !empty($_POST['type_id'])){
    //fetch the subtypes

    $id = $_POST['type_id'];
    $type = $sys->getSubcat3($id);
    if (sizeof($type) > 0){
        echo '<option>Select Vehicle Sub Type</option>';
        foreach($type as $key){
            echo '<option value="'.$key["id"].'">'.$key["name"].'</option>';
        }
    }else{
        echo '<option>No Vehicle Sub Types found</option>';
    }

}


if (isset($_POST['subtype_id']) && isset($_POST['mode_id']) && isset($_POST['type_id']) && !empty($_POST['subtype_id']) && !empty($_POST['type_id']) && !empty($_POST['mode_id'])){
    //fetch the subtypes

    $subtype = $_POST['subtype_id'];
    $mode = $_POST['mode_id'];
    $type = $_POST['type_id'];
    $type = $sys->getVehicleBrands($mode, $type, $subtype);
    if (sizeof($type) > 0){
        echo '<option>Select Vehicle Sub Type</option>';
        foreach($type as $key){
            echo '<option value="'.$key["id"].'">'.$key["name"].'</option>';
        }
    }else{
        echo '<option>No Vehicle Sub Types found</option>';
    }

}