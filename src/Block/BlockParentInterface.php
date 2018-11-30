<?php

namespace Markdom\ModelInterface\Block;

use Markdom\ModelInterface\Common\NodeInterface;

/**
 * Interface BlockParentInterface
 *
 * BlockParents can adopt Blocks
 *
 * @package Markdom\ModelInterface\Block
 */
interface BlockParentInterface extends NodeInterface
{

	public const BLOCK_PARENT_TYPE_DOCUMENT = 'DOCUMENT';
	public const BLOCK_PARENT_TYPE_LIST_ITEM = 'LIST_ITEM';
	public const BLOCK_PARENT_TYPE_QUOTE = 'QUOTE';

	/**
	 * @return string
	 */
	public function getBlockParentType(): string;

	/**
	 * @return BlockSequenceInterface
	 */
	public function getBlocks(): BlockSequenceInterface;

	/**
	 * @param BlockInterface $block
	 * @return $this
	 */
	public function addBlock(BlockInterface $block);

	/**
	 * @param BlockInterface[] $blocks
	 * @return $this
	 */
	public function addBlocks(array $blocks);

}
