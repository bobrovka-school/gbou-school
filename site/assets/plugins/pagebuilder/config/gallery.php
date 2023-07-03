<?php

	return [
		'title' => 'Page Gallery',

		'show_in_templates' => [5],

//		'show_in_docs' => [ 82 ],

//		'hide_in_docs' => [ 10, 63 ],

		'order' => 2,

		'container' => ['programms'],

		'templates' => [
			'owner' => '
				<div class="gallery">
					<h3 class="text-center news-title">[+text+]</h3>
					<ul class="gallery--list">
						[+documents+]
					</ul>
				</div>
			',
			'documents' => '
				<li class="documents--list-item">
					<p>
						<a target="_blank" href="[+file+]" download="[+text+]">[+text+]</a>
					</p>
				</li>
			',
		],
		'fields' => [
			'text' => [
				'caption' => 'Название галереи',
				'type'    => 'text',
			],
			'documents' => [
				'caption' => 'Изображения',
				'type'    => 'group',
				'fields'  => [
					'text' => [
						'caption' => 'Название',
						'type'    => 'text',
					],
					'file' => [
						'caption' => 'Изображение',
						'type'    => 'image',
					]
				]
			]
		]
	];