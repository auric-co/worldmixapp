<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 1/3/2020
 * Time: 2:17 AM
 */
require_once "../system/System.php";
$sys = new System();


if (isset($_POST['cat_id']) && !empty($_POST['cat_id'])){
    //fetch the types
    $id = $_POST['cat_id'];
    $type = $sys->getSubcat2($id);
    if (sizeof($type) > 0){
        echo '<option>Select Job Field</option>';
        foreach($type as $key){
            echo '<option value="'.$key["id"].'">'.$key["name"].'</option>';
        }
    }else{
        echo '<option>No Job Fields found</option>';
    }

}


if (isset($_POST['country_id']) && !empty($_POST['country_id'])){
    //fetch the subtypes

    $id = $_POST['country_id'];
    $type = $sys->getStateCity($id);
    if (sizeof($type) > 0){
        echo '<option>Select Job State</option>';
        foreach($type as $key){
            echo '<option value="'.$key["id"].'">'.$key["name"].'</option>';
        }
    }else{
        echo '<option>No Cities found</option>';
    }

}