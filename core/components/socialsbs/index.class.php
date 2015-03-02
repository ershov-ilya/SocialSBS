<?php

/**
 * Class SocialSBSMainController
 */
abstract class SocialSBSMainController extends modExtraManagerController {
	/** @var SocialSBS $SocialSBS */
	public $SocialSBS;


	/**
	 * @return void
	 */
	public function initialize() {
		$corePath = $this->modx->getOption('socialsbs_core_path', null, $this->modx->getOption('core_path') . 'components/socialsbs/');
		require_once $corePath . 'model/socialsbs/socialsbs.class.php';

		$this->SocialSBS = new SocialSBS($this->modx);
		$this->addCss($this->SocialSBS->config['cssUrl'] . 'mgr/main.css');
		$this->addJavascript($this->SocialSBS->config['jsUrl'] . 'mgr/socialsbs.js');
		$this->addHtml('
		<script type="text/javascript">
			SocialSBS.config = ' . $this->modx->toJSON($this->SocialSBS->config) . ';
			SocialSBS.config.connector_url = "' . $this->SocialSBS->config['connectorUrl'] . '";
		</script>
		');

		parent::initialize();
	}


	/**
	 * @return array
	 */
	public function getLanguageTopics() {
		return array('socialsbs:default');
	}


	/**
	 * @return bool
	 */
	public function checkPermissions() {
		return true;
	}
}


/**
 * Class IndexManagerController
 */
class IndexManagerController extends SocialSBSMainController {

	/**
	 * @return string
	 */
	public static function getDefaultController() {
		return 'home';
	}
}