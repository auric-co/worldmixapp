<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 1/7/2020
 * Time: 11:42 AM
 */
include_once dirname(__FILE__) . '/../../app.worldmixapp.com/app/src/system/cronjobs/Match.php';
$match = new Match();

$match->matching();

