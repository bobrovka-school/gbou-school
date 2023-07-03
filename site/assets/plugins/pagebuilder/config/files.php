<?php

	return [
		'title' => 'Page Files',

		'show_in_templates' => [5],

//		'show_in_docs' => [ 82 ],

//		'hide_in_docs' => [ 10, 63 ],

		'order' => 1,

		'container' => ['programms'],

		'templates' => [
			'owner' => '
				<div class="documents">
					<ul class="documents--list">
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
			'documents' => [
				'caption' => 'Документы',
				'type'    => 'group',
				'fields'  => [
					'text' => [
						'caption' => 'Название',
						'type'    => 'text',
					],
					'file' => [
						'caption' => 'Файл',
						'type'    => 'file',
					]
				]
			]
		]
	];