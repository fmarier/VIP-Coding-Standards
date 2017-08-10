<?php
/**
 * Unit test class for WordPressVIPMinimum Coding Standard.
 *
 * @package VIPCS\WordPressVIPMinimum
 */

// Cross version compatibility for PHPCS 2.x and 3.x.
if ( ! class_exists( '\AbstractSniffUnitTest' ) ) {
	class_alias( '\PHP_CodeSniffer\Tests\Standards\AbstractSniffUnitTest', '\AbstractSniffUnitTest' );
}

/**
 * Unit test class for the CheckReturnValue sniff.
 *
 * @package VIPCS\WordPressVIPMinimum
 */
class WordPressVIPMinimum_Tests_Functions_CheckReturnValueUnitTest extends AbstractSniffUnitTest {

	/**
	 * Returns the lines where errors should occur.
	 *
	 * @return array <int line number> => <int number of errors>
	 */
	public function getErrorList() {
		return array(
			5 => 1,
			9 => 1,
			14 => 1,
			16 => 1,
			19 => 1,
			23 => 1,
		);
	}

	/**
	 * Returns the lines where warnings should occur.
	 *
	 * @return array <int line number> => <int number of warnings>
	 */
	public function getWarningList() {
		return array();

	}

} // End class.
