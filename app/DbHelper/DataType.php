<?php namespace Votemike\DbHelper;

class DataType {
	public static function tinyInt() {
		return self::maxLengthFromBytes(1);
	}

	public static function smallInt() {
		return self::maxLengthFromBytes(2);
	}

	public static function mediumInt() {
		return self::maxLengthFromBytes(3);
	}

	public static function int() {
		return self::maxLengthFromBytes(4);
	}

	public static function bigInt() {
		return self::maxLengthFromBytes(8);
	}

	public static function char() {
		return self::maxLengthFromBytes(1);
	}

	public static function varChar() {
		return self::maxLengthFromBytes(2);
	}

	public static function text() {
		return self::maxLengthFromBytes(2);
	}

	public static function mediumText() {
		return self::maxLengthFromBytes(3);
	}

	public static function longText() {
		return self::maxLengthFromBytes(4);
	}

	//@TODO deal with signed
	private static function maxLengthFromBytes($bytes) {
		return pow(2,$bytes*8)-1;
	}
}
