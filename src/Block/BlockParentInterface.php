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
