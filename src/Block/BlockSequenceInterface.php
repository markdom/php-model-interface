<?php

declare(strict_types=1);

namespace Markdom\ModelInterface\Block;

use Markdom\ModelInterface\Common\CountableIteratorInterface;

/**
 * Interface BlockSequenceInterface
 *
 * @package Markdom\ModelInterface\Block
 */
interface BlockSequenceInterface extends CountableIteratorInterface
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
	public function getParent(): BlockParentInterface;

	/**
	 * @return int
	 */
	public function size(): int;

	/**
	 * @param BlockInterface $block
	 * @return bool
	 */
	public function contains(BlockInterface $block): bool;

	/**
	 * @param BlockInterface[] $blocks
	 * @return bool
	 */
	public function containsAll(array $blocks): bool;

	/**
	 * @return BlockInterface
	 */
	public function first(): BlockInterface;

	/**
	 * @return BlockInterface
	 */
	public function last(): BlockInterface;

	/**
	 * @param int $index
	 * @return BlockInterface
	 */
	public function get(int $index): BlockInterface;

	/**
	 * @param BlockInterface $block
	 * @return int
	 */
	public function indexOf(BlockInterface $block): int;

	/**
	 * @param BlockInterface $block
	 * @return bool
	 */
	public function isFirst(BlockInterface $block): bool;

	/**
	 * @param BlockInterface $block
	 * @return bool
	 */
	public function isLast(BlockInterface $block): bool;

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
	public function insert(BlockInterface $block, int $index);

	/**
	 * @param BlockInterface[] $blocks
	 * @param int $index
	 * @return $this
	 */
	public function insertAll(array $blocks, int $index);

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
	public function replace(BlockInterface $block, int $index);

	/**
	 * @return BlockInterface
	 */
	public function removeFirst(): BlockInterface;

	/**
	 * @return BlockInterface
	 */
	public function removeLast(): BlockInterface;

	/**
	 * @param BlockInterface[] $blocks
	 * @return $this
	 */
	public function removeAll(array $blocks);

	/**
	 * @param BlockInterface $block
	 * @return BlockInterface
	 */
	public function removeItem(BlockInterface $block): BlockInterface;

	/**
	 * @param int $index
	 * @return BlockInterface
	 */
	public function remove(int $index): BlockInterface;

	/**
	 * @return $this
	 */
	public function clear();

}
