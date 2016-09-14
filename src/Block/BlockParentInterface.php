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

	const BLOCK_PARENT_TYPE_DOCUMENT = 'DOCUMENT';
	const BLOCK_PARENT_TYPE_LIST_ITEM = 'LIST_ITEM';
	const BLOCK_PARENT_TYPE_QUOTE = 'QUOTE';

	/**
	 * @return string
	 */
	public function getContentParentType();

	/**
	 * @return string
	 */
	public function getBlockParentType();

	/**
	 * @return BlockSequenceInterface
	 */
	public function getBlocks();

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
