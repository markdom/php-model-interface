<?php

namespace Markdom\ModelInterface\Block;

use Markdom\ModelInterface\DocumentInterface;

/**
 * Interface BlockParentInterface
 *
 * BlockParents can adopt Blocks
 *
 * @package Markdom\ModelInterface\Block
 */
interface BlockParentInterface
{

	/**
	 * @return DocumentInterface
	 */
	public function getDocument();

	/**
	 * @return BlockCollection
	 */
	public function getBlocks();

	/**
	 * @param BlockInterface $block
	 * @return $this
	 */
	public function addBlock(BlockInterface $block);

}
