<?php
/**
 * P2SBAdminAsset.php
 *
 * Yii2 asset for SBAdmin
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-sb-admin
 * @class \p2m\assets\P2SBAdminAsset
 */

/**
 * Load this asset with...
 * p2m\sbAdmin\assets\P2SBAdminAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sbAdmin\assets\P2SBAdminAsset',
 */

namespace p2m\sbAdmin\assets;

use yii\web\AssetBundle;

class P2SBAdminAsset extends AssetBundle
{
	public $sourcePath = '@p2m/sbAdmin/assets/lib';

	public $css = [
		'css/sb-admin.min.css',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}
