<?php

/**
 * @copyright Copyright &copy; Mohammad Ebrahim Amini, faravaghi..ir, 2016
 * @package yii2-widgets
 * @subpackage yii2-jalali-daterangepicker
 * @version 1.0.0
 */

namespace faravaghi\jalaliDateRangePicker;

use Yii;

/**
 * Asset bundle for Jalali DateRangePicker Widget
 *
 * @author Mohammad Ebrahim Amini <faravaghi@gmail.com>
 * @since 1.0
 */
class JalaliRangePickerAsset extends yii\web\AssetBundle
{
	public static $extra_js = [];

	public function init() {
		Yii::setAlias('@jalalidaterangepicker', __DIR__);

		foreach (static::$extra_js as $js_file) {
			$this->js[]= $js_file;
		}

		return parent::init();
	}

	public $sourcePath = '@jalalidaterangepicker/assets/';

	public $css = [
		// 'css/daterangepicker-bs3.css',
		// 'css/bootstrap-daterangepicker.css',
		'css/daterangepicker.css',
	];

	public $js = [
		'js/moment.js',
		'js/moment-jalaali.js',
		'js/daterangepicker.js',
	];

	public $depends = [
		'yii\bootstrap\BootstrapPluginAsset',
	];

/*	public $css = [
		'css/bootstrap-daterangepicker.css',
	];

	public $js = [
		'js/moment.js',
		'js/daterangepicker.js',
	];

	public $depends = [
	];*/
}