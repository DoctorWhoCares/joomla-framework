<?php
/**
 * @copyright  Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla\Form;

/**
 * Form Field class for the Joomla Platform.
 * Provides an input field for files
 *
 * @link   http://www.w3.org/TR/html-markup/input.file.html#input.file
 * @since  1.0
 */
class Field_File extends Field
{
	/**
	 * The form field type.
	 *
	 * @var    string
	 * @since  1.0
	 */
	public $type = 'File';

	/**
	 * Method to get the field input markup for the file field.
	 * Field attributes allow specification of a maximum file size and a string
	 * of accepted file extensions.
	 *
	 * @return  string  The field input markup.
	 *
	 * @since   1.0
	 *
	 * @note    The field does not include an upload mechanism.
	 * @see     JFormFieldMedia
	 */
	protected function getInput()
	{
		// Initialize some field attributes.
		$accept = $this->element['accept'] ? ' accept="' . (string) $this->element['accept'] . '"' : '';
		$size = $this->element['size'] ? ' size="' . (int) $this->element['size'] . '"' : '';
		$class = $this->element['class'] ? ' class="' . (string) $this->element['class'] . '"' : '';
		$disabled = ((string) $this->element['disabled'] == 'true') ? ' disabled="disabled"' : '';

		// Initialize JavaScript field attributes.
		$onchange = $this->element['onchange'] ? ' onchange="' . (string) $this->element['onchange'] . '"' : '';

		return '<input type="file" name="' . $this->name . '" id="' . $this->id . '"' . ' value=""' . $accept . $disabled . $class . $size
			. $onchange . ' />';
	}
}