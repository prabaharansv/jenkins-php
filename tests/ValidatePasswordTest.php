<?php
class ValidatePasswordTest extends PHPUnit_Framework_TestCase {
	public function testValidLength() {
		$valPass = new ValidatePassword();
		$this->assertFalse($valPass->validaLength('1234'));
	}
}