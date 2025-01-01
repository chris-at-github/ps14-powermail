<?php

namespace Ps14\Powermail\Domain\Model;

class Page extends \In2code\Powermail\Domain\Model\Page {

	/**
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ps14\Powermail\Domain\Model\Field>
	 */
	protected $fields = null;
}