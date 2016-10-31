<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 10/17/16
 * Time: 1:58 PM
 */

define('DB_SERVER', 'us-cdbr-azure-southcentral-f.cloudapp.net');
define('DB_USERNAME', 'b05cb71e05360e');
define('DB_PASSWORD', 'bad66fac');
define('DB_DATABASE', 'alexa_marvel');
$db = new mysqli(DB_SERVER,
    DB_USERNAME, DB_PASSWORD,
    DB_DATABASE);


if($db->connect_errno){
    die('Connectfailed['.$db->connect_error.']');
}