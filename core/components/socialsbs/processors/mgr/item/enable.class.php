<?php

/**
 * Enable an Item
 */
class SocialSBSItemEnableProcessor extends modObjectProcessor {
	public $objectType = 'SocialSBSItem';
	public $classKey = 'SocialSBSItem';
	public $languageTopics = array('socialsbs');
	//public $permission = 'save';


	/**
	 * @return array|string
	 */
	public function process() {
		if (!$this->checkPermissions()) {
			return $this->failure($this->modx->lexicon('access_denied'));
		}

		$ids = $this->modx->fromJSON($this->getProperty('ids'));
		if (empty($ids)) {
			return $this->failure($this->modx->lexicon('socialsbs_item_err_ns'));
		}

		foreach ($ids as $id) {
			/** @var SocialSBSItem $object */
			if (!$object = $this->modx->getObject($this->classKey, $id)) {
				return $this->failure($this->modx->lexicon('socialsbs_item_err_nf'));
			}

			$object->set('active', true);
			$object->save();
		}

		return $this->success();
	}

}

return 'SocialSBSItemEnableProcessor';
