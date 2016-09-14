<?php

namespace Markdom\ModelInterface\Block;

/**
 * Interface ListBlockInterface
 *
 * @package Markdom\ModelInterface\Block
 */
interface ListBlockInterface extends BlockInterface
{

	const LIST_BLOCK_TYPE_ORDERED_LIST = 'ORDERED_LIST';
	const LIST_BLOCK_TYPE_UNORDERED_LIST = 'UNORDERED_LIST';

	/**
	 * @return string
	 */
	public function getListBlockType();

	/**
	 * @return ListItemSequenceInterface
	 */
	public function getListItems();

	/**
	 * @param ListItemInterface $listItem
	 * @return $this
	 */
	public function addListItem(ListItemInterface $listItem);

	/**
	 * @param ListItemInterface[] $listItems
	 * @return $this
	 */
	public function addListItems(array $listItems);

}
