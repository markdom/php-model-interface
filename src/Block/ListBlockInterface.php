<?php

declare(strict_types=1);

namespace Markdom\ModelInterface\Block;

/**
 * Interface ListBlockInterface
 *
 * @package Markdom\ModelInterface\Block
 */
interface ListBlockInterface extends BlockInterface
{

	public const LIST_BLOCK_TYPE_ORDERED_LIST = 'ORDERED_LIST';
	public const LIST_BLOCK_TYPE_UNORDERED_LIST = 'UNORDERED_LIST';

	/**
	 * @return string
	 */
	public function getListBlockType(): string;

	/**
	 * @return ListItemSequenceInterface
	 */
	public function getItems(): ListItemSequenceInterface;

	/**
	 * @param ListItemInterface $listItem
	 * @return $this
	 */
	public function addItem(ListItemInterface $listItem);

	/**
	 * @param ListItemInterface[] $listItems
	 * @return $this
	 */
	public function addItems(array $listItems);

}
