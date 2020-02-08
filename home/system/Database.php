<?php

/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 9/24/2019
 * Time: 12:17 PM
 */
include_once dirname(__FILE__) . '/constants.php';
class Database
{
    //Variable to store database link
    public $con;
    public $pdo;


    public function PDO() {
        try {
            $this->pdo = new PDO('mysql:host=' .DB_HOST .';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->pdo;
        } catch (\Exception $e) {
            header("content-type: application/json");
            print_r(json_encode(array("error"=> array('type' => 'DATABASE ERROR', 'message' => $e->getMessage()))));
            exit();
        }
    }


    public function mysqli()
    {
        try{
            $this->con = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
            return $this->con;
        }catch(\Exception $e){
            header("content-type: application/json");
            print_r(json_encode(array("error"=> array('type' => 'DATABASE ERROR', 'message' => $e->getMessage()))));
            exit();
        }

    }

}