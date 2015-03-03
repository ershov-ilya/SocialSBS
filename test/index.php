<?php
/**
 * Created by PhpStorm.
 * Author:   ershov-ilya
 * GitHub:   https://github.com/ershov-ilya/
 * About me: http://about.me/ershov.ilya (EN)
 * Website:  http://ershov.pw/ (RU)
 * Date: 02.03.2015
 * Time: 16:07
 */

header('Content-Type: text/plain; charset=utf-8');
// Access-Control-Allow-Origin: http://api.bob.com
//header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Credentials: true');
error_reporting(E_ERROR | E_WARNING);
ini_set("display_errors", 1);
/* Init
-------------------------------------------------*/
if(isset($_GET['debug'])){define('DEBUG',true);}
else{define('DEBUG',false);}

$response=array();
define('MODX_API_MODE', true);
require('../../../index.php');

/** @var modX $modx */
/** @var modResource $resource */
/** @var modUser $user */
/** @var socUser $socuser */
/** @var modObject $obj */
$option = $modx->getOption('site_name');
$response['$option'] = $option;
$response['MODX_CORE_PATH'] = MODX_CORE_PATH;

//print_r($response);
//exit(0);
$pkg='socialsbs';
$class='SocialsbsUsers';
if (!$service = $modx->getService($pkg, $class, MODX_CORE_PATH.'components/socialsbs/model/socialsbs/', array())) {
//if (!$service = $modx->getService('SocialSBS')) {
    die("Could not load $class class!");
}
else{
    print "Class $class loaded!\n";
    //var_dump($service);
}

// Создаём объект
try {
    $obj = $modx->newObject($class, array('company' => 'Synergy', 'jobtitle' => 'web-programmer'));
}
catch (Exception $e) {
    echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
}

//$res = $socuser->save();
var_dump($obj);

//$socuser = $modx->newObject('SocialSBS', array('job_title' => 'Synergy'));
//$response['socUser_organization'] = $socuser->get('organization');
//print_r($response);
