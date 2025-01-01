<?php

namespace Ps14\Powermail\Domain\Model;

class Field extends \In2code\Powermail\Domain\Model\Field {

	/**
	 * @var string
	 */
	protected string $columnWidth = '';

	public function getColumnWidth(): string {
		return $this->columnWidth;
	}

	public function setColumnWidth(string $columnWidth): void {
		$this->columnWidth = $columnWidth;
	}
}