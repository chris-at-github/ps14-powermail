<?php

declare(strict_types=1);

use Ps14\Powermail\Domain\Model\Form;
use Ps14\Powermail\Domain\Model\Page;
use Ps14\Powermail\Domain\Model\Field;

return [
	Form::class => [
		'tableName' => 'tx_powermail_domain_model_form',
	],
	Page::class => [
		'tableName' => 'tx_powermail_domain_model_page',
	],
	Field::class => [
		'tableName' => 'tx_powermail_domain_model_field',
		'properties' => [
			'columnWidth' => [
				'fieldName' => 'tx_powermail_column_width'
			],
		]
	],
];
