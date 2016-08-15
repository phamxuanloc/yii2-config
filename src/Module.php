<?php
namespace navatech\setting;

use Yii;

class Module extends \navatech\base\Module {

	public    $controllerNamespace = 'navatech\setting\controllers';

	protected $_isBackend;

	public function init() {
		parent::init();
		$this->setViewPath('@navatech/setting/views');
	}

	/**
	 * Check if module is used for backend application.
	 *
	 * @return boolean true if it's used for backend application
	 */
	public function isBackend() {
		if ($this->_isBackend === null) {
			$this->_isBackend = strpos($this->controllerNamespace, 'backend') === false ? false : true;
		}
		return $this->_isBackend;
	}
}
