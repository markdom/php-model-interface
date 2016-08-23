<?php

namespace Markdom\ModelInterface\Common;

/**
 * Interface CollectionInterface
 *
 * @package Markdom\ModelInterface\Common
 */
interface CollectionInterface
{

	/**
	 * @return int
	 */
	public function size();

	/**
	 * @return bool
	 */
	public function isEmpty();

	/**
	 * @param mixed $item
	 * @return bool
	 */
	public function contains($item);

	/**
	 * @param mixed[] $items
	 * @return bool
	 */
	public function containsAll(array $items);

	/**
	 * @return mixed
	 */
	public function first();

	/**
	 * @return mixed
	 */
	public function last();

	/**
	 * @param int $index
	 * @return mixed
	 */
	public function get($index);

	/**
	 * @param mixed $item
	 * @return int
	 */
	public function indexOf($item);

	/**
	 * @param mixed $item
	 * @return bool
	 */
	public function isFirst($item);

	/**
	 * @param mixed $item
	 * @return bool
	 */
	public function isLast($item);

	/**
	 * @param mixed $item
	 * @return $this
	 */
	public function append($item);

	/**
	 * @param mixed[] $items
	 * @return $this
	 */
	public function appendAll(array $items);

	/**
	 * @param mixed $item
	 * @return $this
	 */
	public function prepend($item);

	/**
	 * @param mixed[] $items
	 * @return $this
	 */
	public function prependAll(array $items);

	/**
	 * @param mixed $item
	 * @param int $index
	 * @return $this
	 */
	public function insert($item, $index);

	/**
	 * @param mixed[] $items
	 * @param int $index
	 * @return $this
	 */
	public function insertAll(array $items, $index);

	/**
	 * @param mixed $item
	 * @param mixed $referenceItem
	 * @return $this
	 */
	public function insertAfter($item, $referenceItem);

	/**
	 * @param mixed[] $items
	 * @param mixed $referenceItem
	 * @return $this
	 */
	public function insertAllAfter(array $items, $referenceItem);

	/**
	 * @param mixed $item
	 * @param mixed $referenceItem
	 * @return $this
	 */
	public function insertBefore($item, $referenceItem);

	/**
	 * @param mixed[] $items
	 * @param mixed $referenceItem
	 * @return $this
	 */
	public function insertAllBefore(array $items, $referenceItem);

	/**
	 * @param mixed $item
	 * @param mixed $replacedItem
	 * @return $this
	 */
	public function replaceItem($item, $replacedItem);

	/**
	 * @param mixed $item
	 * @param int $index
	 * @return $this
	 */
	public function replace($item, $index);

	/**
	 * @return mixed
	 */
	public function removeFirst();

	/**
	 * @return mixed
	 */
	public function removeLast();

	/**
	 * @param mixed[] $items
	 * @return $this
	 */
	public function removeAll(array $items);

	/**
	 * @param mixed $item
	 * @return mixed
	 */
	public function removeItem($item);

	/**
	 * @param int $index
	 * @return mixed
	 */
	public function remove($index);

	/**
	 * @return $this
	 */
	public function clear();

}