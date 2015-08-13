<?php

use Votemike\DbHelper\Column;
use Votemike\DbHelper\Table;
use Votemike\DbHelper\TableCollection;

class TableCollectionTest extends TestCase {

	public function testAddingColumnToTable() {
		$tableCollection = new TableCollection();
		$tableCollection->addColumnToTable('test1', 'test', 'test', 'test');
		$tableCollection->addColumnToTable('test2', 'test', 'test', 'test');
		$tableCollection->addColumnToTable('test1', 'test', 'test', 'test');

		$this->assertCount(2, $tableCollection->tables);
		$this->assertCount(2, $tableCollection->tables[0]->getColumns());
		$this->assertCount(1, $tableCollection->tables[1]->getColumns());
	}
}
