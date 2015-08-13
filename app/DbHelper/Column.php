<?php namespace Votemike\DbHelper;

class Column {
	public $name = '';
	public $type = '';
	public $dataType = '';
	private $maxValue;
	private $suggestedType;

	public function __construct($name, $type, $dataType) {
		$this->name = $name;
		$this->type = $type;
		$this->dataType = $dataType;
	}

	public function getSuggestedType() {
		return $this->suggestedType;
	}

	public function isNumeric() {
		return $this->dataType == 'tinyint' || $this->dataType == 'smallint' || $this->dataType == 'mediumint' || $this->dataType == 'int' || $this->dataType == 'bigint';
	}

	public function isTextual() {
		return $this->dataType == 'char' || $this->dataType == 'varchar' || $this->dataType == 'text' || $this->dataType == 'mediumtext' || $this->dataType == 'longtext';
	}

	public function populateWithSuggestedType($threshold = 0.75) {
		if($this->isNumeric()) {
			switch(true) {
				case ($this->maxValue <= (DataType::tinyInt()*$threshold)):
					$this->suggestedType = 'tinyint';
					break;
				case ($this->maxValue <= DataType::smallInt()*$threshold):
					$this->suggestedType = 'smallint';
					break;
				case ($this->maxValue <= DataType::mediumInt()*$threshold):
					$this->suggestedType = 'mediumint';
					break;
				case ($this->maxValue <= DataType::int()*$threshold):
					$this->suggestedType = 'int';
					break;
				default:
					$this->suggestedType = 'bigint';
			}
		}
		if($this->isTextual()) {
			switch(true) {
				case ($this->maxValue <= DataType::char()*$threshold && $this->dataType != 'varchar'): //char and varchar are unequal as they store info differently
					$this->suggestedType = 'char';
					break;
				case ($this->maxValue <= DataType::varChar()*$threshold):
					$this->suggestedType = 'varchar';
					break;
				case ($this->maxValue <= DataType::text()*$threshold): //This should never happen
					$this->suggestedType = 'text';
					break;
				case ($this->maxValue <= DataType::mediumText()*$threshold):
					$this->suggestedType = 'mediumtext';
					break;
				case ($this->maxValue <= DataType::longText()*$threshold):
					$this->suggestedType = 'longtext';
					break;
			}
		}
	}

	public function setMaxValue($value) {
		$this->maxValue = $value;
	}

	public function shouldBeDisplayed() {
		if($this->shouldBeIgnored()) {
			return false;
		}
		if($this->dataType != $this->suggestedType) {
			return true;
		}
		return false;
	}

	private function shouldBeIgnored() {
		if(in_array($this->dataType, ['blob', 'date', 'datetime', 'decimal', 'double', 'enum', 'time', 'timestamp'])) {
			return true;
		}
		return false;
	}
}
