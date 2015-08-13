<?php

use Votemike\DbHelper\Column;
use Votemike\DbHelper\Table;

class TableTest extends TestCase {

	public function testAddingAndRetrievingColumnsToAndFromTable() {
		$columns = [];
		$columns[] = $this->generateColumn('tinyint');
		$columns[] = $this->generateColumn('tinyint');
		$table = $this->generateTableWithColumns($columns);
		$this->assertCount(2, $table->getColumns());
	}

	public function testAddingSuggestedTypesToTableColumns() {
		$columns = [];
		$columns[] = $this->generateColumn('tinyint', 65535);
		$columns[] = $this->generateColumn('tinyint', 16777215);
		$table = $this->generateTableWithColumns($columns, true);
		$columns = $table->getColumns();
		$this->assertEquals('mediumint', $columns[0]->getSuggestedType());
		$this->assertEquals('int', $columns[1]->getSuggestedType());
	}

	public function testColumnsForDisplay() {
		$columns = [];
		$columns[] = $this->generateColumn('tinyint', 8);
		$columns[] = $this->generateColumn('tinyint', 16777215);
		$table = $this->generateTableWithColumns($columns, true);
		$columns = $table->getColumnsForDisplay();
		$this->assertCount(1, $columns);
		$this->assertEquals('int', $columns[0]->getSuggestedType());
	}

	public function testIfTableShouldBeDisplayed() {
		$columns = [];
		$columns[] = $this->generateColumn('tinyint', 8);
		$columns[] = $this->generateColumn('tinyint', 8);
		$columns[] = $this->generateColumn('decimal', 99.99);
		$table = $this->generateTableWithColumns($columns, true);
		$this->assertFalse($table->shouldBeDisplayed());
	}

	private function generateColumn($type, $maxValue = null) {
		$column = new Column('test', 'test', $type);
		if(!is_null($maxValue)) {
			$column->setMaxValue($maxValue);
		}
		return $column;
	}

	private function generateTableWithColumns($columns, $generateSuggestedType = false) {
		$table = new Table('test');
		foreach($columns as $column) {
			$table->addColumn($column);
		}
		if($generateSuggestedType) {
			$table->populateColumnsWithSuggestedType();
		}
		return $table;
	}

	private function createNumericColumn($maxValue, $threshold = 0.75) {
		$column = new Column('test', 'test', 'tinyint'); //in this test, datatype only serves to say if the column is numeric or not
		$column->setMaxValue($maxValue);
		$column->populateWithSuggestedType($threshold);

		return $column;
	}

	private function createTextualColumn($maxValue, $threshold = 0.75) {
		$column = new Column('test', 'test', 'char'); //in this test, datatype only serves to say if the column is textual or not
		$column->setMaxValue($maxValue);
		$column->populateWithSuggestedType($threshold);

		return $column;
	}
}
