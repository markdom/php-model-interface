<?php

namespace Markdom\ModelInterface\Block;

use Markdom\ModelInterface\Common\CountableIteratorInterface;

/**
 * Interface ListItemSequenceInterface
 *
 * @package Markdom\ModelInterface\Block
 */
interface ListItemSequenceInterface extends CountableIteratorInterface
{

	/**
	 * ListItemCollection constructor.
	 *
	 * @param ListBlockInterface $parent
	 */
	public function __construct(ListBlockInterface $parent);

	/**
	 * @return ListBlockInterface
	 */
	public function getParent();

	/**
	 * @return int
	 */
	public function size();

	/**
	 * @return bool
	 */
	public function isEmpty();

	/**
	 * @param ListItemInterface $item
	 * @return bool
	 */
	public function contains(ListItemInterface $item);

	/**
	 * @param ListItemInterface[] $items
	 * @return bool
	 */
	public function containsAll(array $items);

	/**
	 * @return ListItemInterface
	 */
	public function first();

	/**
	 * @return ListItemInterface
	 */
	public function last();

	/**
	 * @param int $index
	 * @return ListItemInterface
	 */
	public function get($index);

	/**
	 * @param ListItemInterface $item
	 * @return int
	 */
	public function indexOf(ListItemInterface $item);

	/**
	 * @param ListItemInterface $item
	 * @return bool
	 */
	public function isFirst(ListItemInterface $item);

	/**
	 * @param ListItemInterface $item
	 * @return bool
	 */
	public function isLast(ListItemInterface $item);

	/**
	 * @param ListItemInterface $item
	 * @return $this
	 */
	public function append(ListItemInterface $item);

	/**
	 * @param ListItemInterface[] $items
	 * @return $this
	 */
	public function appendAll(array $items);

	/**
	 * @param ListItemInterface $item
	 * @return $this
	 */
	public function prepend(ListItemInterface $item);

	/**
	 * @param ListItemInterface[] $items
	 * @return $this
	 */
	public function prependAll(array $items);

	/**
	 * @param ListItemInterface $item
	 * @param int $index
	 * @return $this
	 */
	public function insert(ListItemInterface $item, $index);

	/**
	 * @param ListItemInterface[] $items
	 * @param int $index
	 * @return $this
	 */
	public function insertAll(array $items, $index);

	/**
	 * @param ListItemInterface $item
	 * @param ListItemInterface $referenceItem
	 * @return $this
	 */
	public function insertAfter(ListItemInterface $item, ListItemInterface $referenceItem);

	/**
	 * @param ListItemInterface[] $items
	 * @param ListItemInterface $referenceItem
	 * @return $this
	 */
	public function insertAllAfter(array $items, ListItemInterface $referenceItem);

	/**
	 * @param ListItemInterface $item
	 * @param ListItemInterface $referenceItem
	 * @return $this
	 */
	public function insertBefore(ListItemInterface $item, ListItemInterface $referenceItem);

	/**
	 * @param ListItemInterface[] $items
	 * @param ListItemInterface $referenceItem
	 * @return $this
	 */
	public function insertAllBefore(array $items, ListItemInterface $referenceItem);

	/**
	 * @param ListItemInterface $item
	 * @param ListItemInterface $replacedItem
	 * @return $this
	 */
	public function replaceItem(ListItemInterface $item, ListItemInterface $replacedItem);

	/**
	 * @param ListItemInterface $item
	 * @param int $index
	 * @return $this
	 */
	public function replace(ListItemInterface $item, $index);

	/**
	 * @return ListItemInterface
	 */
	public function removeFirst();

	/**
	 * @return ListItemInterface
	 */
	public function removeLast();

	/**
	 * @param ListItemInterface[] $items
	 * @return $this
	 */
	public function removeAll(array $items);

	/**
	 * @param ListItemInterface $item
	 * @return ListItemInterface
	 */
	public function removeItem(ListItemInterface $item);

	/**
	 * @param int $index
	 * @return ListItemInterface
	 */
	public function remove($index);

	/**
	 * @return $this
	 */
	public function clear();

}
