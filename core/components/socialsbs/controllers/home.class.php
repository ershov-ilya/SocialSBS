<?php

/**
 * The home manager controller for SocialSBS.
 *
 */
class SocialSBSHomeManagerController extends SocialSBSMainController {
	/* @var SocialSBS $SocialSBS */
	public $SocialSBS;


	/**
	 * @param array $scriptProperties
	 */
	public function process(array $scriptProperties = array()) {
	}


	/**
	 * @return null|string
	 */
	public function getPageTitle() {
		return $this->modx->lexicon('socialsbs');
	}


	/**
	 * @return void
	 */
	public function loadCustomCssJs() {
		$this->addCss($this->SocialSBS->config['cssUrl'] . 'mgr/main.css');
		$this->addCss($this->SocialSBS->config['cssUrl'] . 'mgr/bootstrap.buttons.css');
		$this->addJavascript($this->SocialSBS->config['jsUrl'] . 'mgr/misc/utils.js');
		$this->addJavascript($this->SocialSBS->config['jsUrl'] . 'mgr/widgets/items.grid.js');
		$this->addJavascript($this->SocialSBS->config['jsUrl'] . 'mgr/widgets/items.windows.js');
		$this->addJavascript($this->SocialSBS->config['jsUrl'] . 'mgr/widgets/home.panel.js');
		$this->addJavascript($this->SocialSBS->config['jsUrl'] . 'mgr/sections/home.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			MODx.load({ xtype: "socialsbs-page-home"});
		});
		</script>');
	}


	/**
	 * @return string
	 */
	public function getTemplateFile() {
		return $this->SocialSBS->config['templatesPath'] . 'home.tpl';
	}
}