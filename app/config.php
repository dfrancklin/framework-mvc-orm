<?php

$config = \FW\Core\Config::getInstance();

$config->set('views-folder', __DIR__ . '/views');
$config->set('menu', (object) [
	'groups' => [
		(object) [
			'items' => [
				(object) [
					'title' => 'Dashboard',
					'icon' => 'dashboard',
					'href' => '/dashboard',
					'activeRoute' => '/',
				],
				(object) [
					'title' => 'Products',
					'icon' => 'settings',
					'href' => '/products',
					'activeRoute' => ['/products/*'],
					'roles' => ['ADMIN'],
				],
			],
		],
		(object) [
			'title' => 'Administration',
			'icon' => 'build',
			'roles' => ['ADMIN'],
			'items' => [
				(object) [
					'title' => 'Users',
					'icon' => 'face',
					'href' => '/users',
				],
			],
		],
	],
]);
