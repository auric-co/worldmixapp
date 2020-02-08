<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 1/2/2020
 * Time: 1:15 AM
 */

require_once "./system/System.php";
$sys = new System();

$sys->deleteCookie();
header("location:".$sys->domain());
exit();
