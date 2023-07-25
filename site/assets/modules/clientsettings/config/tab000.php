<?php
return array (
	'caption' => 'ДИРЕКТОР/ШКОЛА',
	'introtext' => '<b style="color: red">Настройки для Школы</b>',
	'settings' => array (
		/**
		'logotip' => array (
			'caption' => 'Логотип<br><span style="color: red;">К размеру 210x210</span>',
			'type' => 'image',
			'note' => '',
			'default_text' => 'assets/templates/projectsoft/images/logo.png',
		),
		*/
		'org_date' => array(
			'caption' => 'Год основания',
			'type' => 'date',
			'note' => '',
			'default_text' => '14-12-2014 00:00:00',
		),
		'mini_name_org' => array (
			'caption' => 'Наименование организации',
			'type' => 'textareamini',
			'note' => 'Короткое Наименование организации',
			'default_text' => 'ГБОУ СОШ с. Бобровка',
			'style' => 'max-height: 2em;'
		),
		'name_org' => array (
			'caption' => 'Наименование организации',
			'type' => 'textareamini',
			'note' => 'Полное Наименование организации',
			'default_text' => 'Государственное бюджетное общеобразовательное учреждение средняя общеобразовательная школа с. Бобровка муниципального района Кинельский Самарской области',
		),
		'address' => array (
			'caption' => 'Адрес',
			'type' => 'textareamini',
			'note' => 'Адрес Школы',
			'default_text' => '446406, Россия, Самарская область, Кинельский район, с. Бобровка, улица Кирова, д. 28-Б.',
		),
		'email' => array (
			'caption' => 'Email Адрес',
			'type' => 'text',
			'note' => 'Email Школы',
			'default_text' => 'so_knl_bobr_sch@samara.edu.ru',
		),
		'phones' => array (
			'caption' => 'Телефоны',
			'type' => 'textareamini',
			'note' => 'Телефоны Школы',
			'default_text' => '8(84663) 3-25-18',
		),
		'director_position' => array (
			'caption' => 'Должность',
			'type' => 'text',
			'note' => 'Должность Директора Школы',
			'default_text' => 'Директор',
		),
		'director' => array (
			'caption' => 'ФИО',
			'type' => 'text',
			'note' => 'ФИО Директора Школы (занимающий должность полностью)',
			'default_text' => 'Гойколова Марина Валерьевна',
		),
		'director_photo' => array (
			'caption' => 'Фотография<br><span style="color: red;">К размеру 480x500</span>',
			'type' => 'image',
			'note' => 'Фотография Директора',
			'default_text' => '',
		),
		'google_map' => array (
			'caption' => 'Google Map',
			'type' => 'text',
			'note' => 'Точка на карте Google',
			'default_text' => '53.2302,50.8420',
		),
		'univers' => array (
			'caption' => 'Университеты',
			'type' => 'custom_tv:multitv',
			'note' => 'Куда пойти учиться',
			'elements' => '',
			'default_text' => '[]',
		),
		'govlist' => array (
			'caption' => 'Сайты',
			'type' => 'custom_tv:multitv',
			'note' => 'Сайты внизу страницы',
			'elements' => '',
			'default_text' => '[]',
		),
	),
);

