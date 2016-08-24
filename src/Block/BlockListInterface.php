<?php

namespace Markdom\ModelInterface\Block;

use Markdom\ModelInterface\Common\CountableIteratorInterface;

/**
 * Interface BlockListInterface
 *
 * @package Markdom\ModelInterface\Block
 */
interface BlockListInterface extends CountableIteratorInterface
{

	/**
	 * BlockCollection constructor.
	 *
	 * @param BlockParentInterface $parent
	 */
	public function __construct(BlockParentInterface $parent);

	/**
	 * @return BlockParentInterface
	 */
	public function getParent();

	/**
	 * @return int
	 */
	public function size();

	/**
	 * @param BlockInterface $block
	 * @return bool
	 */
	public function contains(BlockInterface $block);

	/**
	 * @param BlockInterface[] $blocks
	 * @return bool
	 */
	public function containsAll(array $blocks);

	/**
	 * @return BlockInterface
	 */
	public function first();

	/**
	 * @return BlockInterface
	 */
	public function last();

	/**
	 * @param int $index
	 * @return BlockInterface
	 */
	public function get($index);

	/**
	 * @param BlockInterface $block
	 * @return int
	 */
	public function indexOf(BlockInterface $block);

	/**
	 * @param BlockInterface $block
	 * @return bool
	 */
	public function isFirst(BlockInterface $block);

	/**
	 * @param BlockInterface $block
	 * @return bool
	 */
	public function isLast(BlockInterface $block);

	/**
	 * @param BlockInterface $block
	 * @return $this
	 */
	public function append(BlockInterface $block);

	/**
	 * @param BlockInterface[] $blocks
	 * @return $this
	 */
	public function appendAll(array $blocks);

	/**
	 * @param BlockInterface $block
	 * @return $this
	 */
	public function prepend(BlockInterface $block);

	/**
	 * @param BlockInterface[] $blocks
	 * @return $this
	 */
	public function prependAll(array $blocks);

	/**
	 * @param BlockInterface $block
	 * @param int $index
	 * @return $this
	 */
	public function insert(BlockInterface $block, $index);

	/**
	 * @param BlockInterface[] $blocks
	 * @param int $index
	 * @return $this
	 */
	public function insertAll(array $blocks, $index);

	/**
	 * @param BlockInterface $block
	 * @param BlockInterface $referenceBlock
	 * @return $this
	 */
	public function insertAfter(BlockInterface $block, BlockInterface $referenceBlock);

	/**
	 * @param BlockInterface[] $blocks
	 * @param BlockInterface $referenceBlock
	 * @return $this
	 */
	public function insertAllAfter(array $blocks, BlockInterface $referenceBlock);

	/**
	 * @param BlockInterface $block
	 * @param BlockInterface $referenceBlock
	 * @return $this
	 */
	public function insertBefore(BlockInterface $block, BlockInterface $referenceBlock);

	/**
	 * @param BlockInterface[] $blocks
	 * @param BlockInterface $referenceBlock
	 * @return $this
	 */
	public function insertAllBefore(array $blocks, BlockInterface $referenceBlock);

	/**
	 * @param BlockInterface $block
	 * @param BlockInterface $replacedBlock
	 * @return $this
	 */
	public function replaceItem(BlockInterface $block, BlockInterface $replacedBlock);

	/**
	 * @param BlockInterface $block
	 * @param int $index
	 * @return $this
	 */
	public function replace(BlockInterface $block, $index);

	/**
	 * @return BlockInterface
	 */
	public function removeFirst();

	/**
	 * @return BlockInterface
	 */
	public function removeLast();

	/**
	 * @param BlockInterface[] $blocks
	 * @return $this
	 */
	public function removeAll(array $blocks);

	/**
	 * @param BlockInterface $block
	 * @return BlockInterface
	 */
	public function removeItem(BlockInterface $block);

	/**
	 * @param int $index
	 * @return BlockInterface
	 */
	public function remove($index);

	/**
	 * @return $this
	 */
	public function clear();

}
