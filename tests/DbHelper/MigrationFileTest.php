<?php

use Votemike\DbHelper\Column;

class MigrationFileTest extends TestCase {

	public function testIfColumnShouldBeDisplayed() {
		$column = $this->generateNumericColumn(255, 1);
		$this->assertFalse($column->shouldBeDisplayed());
	}
}
