<?php
namespace FluidTYPO3\Fromage\Backend\FormComponent\Field;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Claus Due <claus@namelesscoder.net>
 *
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

/**
 * Input Field Object
 *
 * Predefined Form component for adding Input field objects.
 *
 * @package Flux
 */
class TextObject extends AbstractFieldObject {

	/**
	 * @var string
	 */
	protected $name = 'text';

	/**
	 * CONSTRUCTOR
	 */
	public function initializeObject() {
		parent::initializeObject();
		$this->createSliderFieldAndWizard('rows');
		$this->createSliderFieldAndWizard('cols');
	}

	/**
	 * @param string $name
	 */
	protected function createSliderFieldAndWizard($name) {
		$this->createField('Input', $name)
				->setValidate('trim,int')
				->setMinimum(1)
				->setMaximum(100)
				->setSize(2);
	}

}
