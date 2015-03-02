<?php
/** @noinspection PhpIncludeInspection */
require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var SocialSBS $SocialSBS */
$SocialSBS = $modx->getService('socialsbs', 'SocialSBS', $modx->getOption('socialsbs_core_path', null, $modx->getOption('core_path') . 'components/socialsbs/') . 'model/socialsbs/');
$modx->lexicon->load('socialsbs:default');

// handle request
$corePath = $modx->getOption('socialsbs_core_path', null, $modx->getOption('core_path') . 'components/socialsbs/');
$path = $modx->getOption('processorsPath', $SocialSBS->config, $corePath . 'processors/');
$modx->request->handleRequest(array(
	'processors_path' => $path,
	'location' => '',
));