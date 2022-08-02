<?php

return [
	'mode'                  => 'utf-8',
	'format'                => 'A4',
	'author'                => '',
	'subject'               => '',
	'keywords'              => '',
	'creator'               => 'Youikham',
	'display_mode'          => 'fullpage',
	// ...
	'font_path' => base_path('resources/fonts/font/'),
	'font_data' => [
		'Phetsarath_OT' => [
			'R'  => 'Phetsarath_OT.ttf',    // regular font
			'B'  => 'Phetsarath_OT.ttf',       // optional: bold font
			'I'  => 'Phetsarath_OT.ttf',     // optional: italic font
			'BI' => 'Phetsarath_OT.ttf' // optional: bold-italic font
			//'useOTL' => 0xFF,    // required for complicated langs like Persian, Arabic and Chinese
			//'useKashida' => 75,  // required for complicated langs like Persian, Arabic and Chinese
		],
		'PhetsarathOT' => [
			'R'  => 'Phetsarath_OT.ttf',    // regular font
			'B'  => 'Phetsarath_OT.ttf',       // optional: bold font
			'I'  => 'Phetsarath_OT.ttf',     // optional: italic font
			'BI' => 'Phetsarath_OT.ttf' // optional: bold-italic font
			//'useOTL' => 0xFF,    // required for complicated langs like Persian, Arabic and Chinese
			//'useKashida' => 75,  // required for complicated langs like Persian, Arabic and Chinese
		]
		// ...add as many as you want.
	]
	// ...
];
