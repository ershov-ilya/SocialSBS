<?php

/**
 * Create an Item
 */
class SocialSBSItemCreateProcessor extends modObjectCreateProcessor {
	public $objectType = 'SocialSBSItem';
	public $classKey = 'SocialSBSItem';
	public $languageTopics = array('socialsbs');
	//public $permission = 'create';


	/**
	 * @return bool
	 */
	public function beforeSet() {
		$name = trim($this->getProperty('name'));
		if (empty($name)) {
			$this->modx->error->addField('name', $this->modx->lexicon('socialsbs_item_err_name'));
		}
		elseif ($this->modx->getCount($this->classKey, array('name' => $name))) {
			$this->modx->error->addField('name', $this->modx->lexicon('socialsbs_item_err_ae'));
		}

		return parent::beforeSet();
	}

}

return 'SocialSBSItemCreateProcessor';