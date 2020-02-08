<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 1/7/2020
 * Time: 3:12 PM
 */
require_once "./system/System.php";
$sys = new System();


if (isset($_POST['id']) && $_POST['type'] && !empty($_POST['id']) && !empty($_POST['type'])){

    $id = $_POST['id'];
    $cat = $_POST['type'];
    $sys->setToken($sys->getUserToken());
    $sys->setId($id);
    $sys->setType($cat);
    $delete = $sys->deleteListing();


    echo json_encode($delete);
}
