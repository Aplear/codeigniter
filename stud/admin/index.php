<?php
/**
 * Created by PhpStorm.
 * User: aplear
 * Date: 5/4/16
 * Time: 1:44 AM
 */


define("SYSTEM_PATH", $_SERVER['DOCUMENT_ROOT']);

require_once("../config/class.simpleDB.php");
require_once("../config/class.simpleMysqli.php");
require_once("../config/db.config.php");

$admin=$db->select('SELECT * FROM users WHERE role =?', $ADMIN_ROLE);



