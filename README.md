Jalali Date Range Picker
========================
Date Range Picker for Bootstrap Yii2 Extension

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist faravaghi/yii2-jalali-daterangepicker "*"
```

or add

```
"faravaghi/yii2-jalali-daterangepicker": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= 
use faravaghi\jalaliDateRangePicker\jalaliDateRangePicker;

echo $form->field(
	$model, 
	'findDate'
)
->widget(jalaliDateRangePicker::classname(),[
	'options'  => [
		'format' => 'jYYYY/jMM/jDD',
		'viewformat' => 'jYYYY/jMM/jDD',
		// 'minDate' => '1394/10/17',
		'placement' => 'right',
		'opens' => 'left',
		'showDropdowns'=> true,
		// 'timePicker' => true,
		// 'timePicker24Hour' => true,
		'locale'=>[
			'format'=> 'jYYYY/jMM/jDD',
			'separator'=> ' - ',
			'applyLabel'=> Yii::t('zii', 'Apply'),
			'cancelLabel' => Yii::t('zii', 'Cancel'),
			'fromLabel' => Yii::t('zii', 'From'),
			'toLabel' => Yii::t('zii', 'To'),
			'customRangeLabel' => 'Custom',
			'daysOfWeek'=>[
				'یک',
				'دو',
				'سه',
				'چهار',
				'پنج',
				'جمعه',
				'شنبه',
			],
			'monthNames'=>[
				'فروردین',
				'اردیبهشت',
				'خرداد',
				'تیر',
				'مرداد',
				'شهریور',
				'مهر',   
				'آبان',
				'آذر',
				'دی',
				'بهمن',
				'اسفند',
			],
			'firstDay' => 6
		],
	],
	'htmlOptions' => [
		'class'	=> 'form-control',
		'id' => 'objects-findDate'
	]
]);

?>```
