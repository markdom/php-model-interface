<?php

namespace Markdom\ModelInterface\Block;

/**
 * Interface ListBlockInterface
 *
 * @package Markdom\ModelInterface\Block
 */
interface ListBlockInterface extends BlockInterface
{

	const TYPE_ORDERED_LIST = 'ORDERED_LIST';
	const TYPE_UNORDERED_LIST = 'UNORDERED_LIST';

	/**
	 * @return string
	 */
	public function getListBlockType();

	/**
	 * @return ListItemSequenceInterface
	 */
	public function getListItems();

}
