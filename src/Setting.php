<?php
namespace navatech\setting;

use navatech\setting\models\Setting as SettingModel;
use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;

/**
 * {@inheritDoc}
 */
class Setting extends Component {

	/**
	 * @param      $code
	 * @param null $default
	 *
	 * @return null|string
	 */
	public function get($code, $default = null) {
		if (!$code) {
			return $default;
		}
		$setting = SettingModel::findOne(['code' => $code]);
		if ($setting) {
			if ($setting->type == SettingModel::TYPE_FILE_PATH) {
				$setting->value = Yii::getAlias($setting->store_dir) . DIRECTORY_SEPARATOR . $setting->value;
			}
			if ($setting->type == SettingModel::TYPE_FILE_URL) {
				if (Module::isAdvanced()) {
					/**@var $module Module */
					$module = Yii::$app->getModule('setting');
					if ($module->isBackend()) {
						$store_dir = str_replace('backend/', '', $setting->store_dir);
					} else {
						$store_dir = str_replace('frontend/', '', $setting->store_dir);
					}
				} else {
					$store_dir = str_replace('app/', '', $setting->store_dir);
				}
				$setting->value = Yii::$app->request->hostInfo . Yii::$app->request->baseUrl . Yii::getAlias($store_dir) . '/' . $setting->value;
			}
			if (in_array($setting->type, [
					SettingModel::TYPE_CHECKBOX,
					SettingModel::TYPE_MULTI_SELECT,
				]) && $setting->value != ''
			) {
				$setting->value = explode(",", $setting->value);
			}
			return $setting->value;
		} else {
			if (YII_ENV_DEV || $default == null) {
				throw new InvalidConfigException('Record "' . $code . '" doesn\'t exists. Make sure that you\'ve added it in the configuration!');
			}
			return $default;
		}
	}

	/**
	 * @param string $code
	 *
	 * @return string
	 */
	public function __get($code) {
		return $this->get($code);
	}
}
