<?php

namespace ElmarHinz\Esp\ResultIterator;

/***************************************************************
*  Copyright notice
*
*  (c) 2012 - 2015 Elmar Hinz <elmar.hinz@gmail.com>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

class MysqliResultIterator implements ResultIteratorInterface {

	private $resultLink;

	public function __construct(\mysqli_result $resultLink) {
		$this->resultLink = $resultLink;
	}

	public function fetchAssociative() {
		return $this->resultLink->fetch_assoc();
	}

	/*
	 * Alias to fetchAssociative.
	 *
	 * DEPRECIATED. Will be removed with 7.x.
	 */
	public function fetchAssociated() {
		return $this->fetchAssociative();
	}

}

?>

