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
	public function getParent(): ListBlockInterface;

	/**
	 * @return int
	 */
	public function size(): int;

	/**
	 * @param ListItemInterface $item
	 * @return bool
	 */
	public function contains(ListItemInterface $item): bool;

	/**
	 * @param ListItemInterface[] $items
	 * @return bool
	 */
	public function containsAll(array $items): bool;

	/**
	 * @return ListItemInterface
	 */
	public function first(): ListItemInterface;

	/**
	 * @return ListItemInterface
	 */
	public function last(): ListItemInterface;

	/**
	 * @param int $index
	 * @return ListItemInterface
	 */
	public function get(int $index): ListItemInterface;

	/**
	 * @param ListItemInterface $item
	 * @return int
	 */
	public function indexOf(ListItemInterface $item): int;

	/**
	 * @param ListItemInterface $item
	 * @return bool
	 */
	public function isFirst(ListItemInterface $item): bool;

	/**
	 * @param ListItemInterface $item
	 * @return bool
	 */
	public function isLast(ListItemInterface $item): bool;

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
	public function insert(ListItemInterface $item, int $index);

	/**
	 * @param ListItemInterface[] $items
	 * @param int $index
	 * @return $this
	 */
	public function insertAll(array $items, int $index);

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
	public function replace(ListItemInterface $item, int $index);

	/**
	 * @return ListItemInterface
	 */
	public function removeFirst(): ListItemInterface;

	/**
	 * @return ListItemInterface
	 */
	public function removeLast(): ListItemInterface;

	/**
	 * @param ListItemInterface[] $items
	 * @return $this
	 */
	public function removeAll(array $items);

	/**
	 * @param ListItemInterface $item
	 * @return ListItemInterface
	 */
	public function removeItem(ListItemInterface $item): ListItemInterface;

	/**
	 * @param int $index
	 * @return ListItemInterface
	 */
	public function remove(int $index): ListItemInterface;

	/**
	 * @return $this
	 */
	public function clear();

}
