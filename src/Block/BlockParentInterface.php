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
	 * @return DocumentInterface
	 */
	public function getDocument();

	/**
	 * @return BlockListInterface
	 */
	public function getBlocks();

	/**
	 * @param BlockInterface $block
	 * @return $this
	 */
	public function addBlock(BlockInterface $block);

}
