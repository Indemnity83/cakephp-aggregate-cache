<?php

class AllTestsTest extends CakeTestSuite {

/**
 * Get the suite object.
 *
 * @return CakeTestSuite Suite class instance.
 */
	public static function suite() {
		$suite = new CakeTestSuite('AllTests');
		$suite->addTestDirectoryRecursive(TESTS . 'Case');
		return $suite;
	}
}
