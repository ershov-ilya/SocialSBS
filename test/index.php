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
$resource = $modx->getObject('modResource',1);
$response['modResource_pagetitle'] = $resource->get('pagetitle');
$response['MODX_CORE_PATH'] = MODX_CORE_PATH;
if (!$socUser = $modx->getService('socuser', 'socUser', MODX_CORE_PATH.'components/socuser/model/socUser/', $scriptProperties)) {
    return 'Could not load socUser class!';
}
$socuser = $modx->newObject('socUser', array('organization' => 'Synergy'));
$response['socUser_organization'] = $socuser->get('organization');
print_r($response);