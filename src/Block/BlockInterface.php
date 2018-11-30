<?php

namespace Markdom\ModelInterface\Block;

use Markdom\Common\BlockType;
use Markdom\HandlerInterface\HandlerInterface;
use Markdom\ModelInterface\Common\NodeInterface;

/**
 * Interface BlockInterface
 *
 * Blocks are structural elements
 *
 * @package Markdom\ModelInterface\Block
 */
interface BlockInterface extends NodeInterface
{

	const BLOCK_TYPE_CODE = BlockType::TYPE_CODE;
	const BLOCK_TYPE_COMMENT = BlockType::TYPE_COMMENT;
	const BLOCK_TYPE_DIVISION = BlockType::TYPE_DIVISION;
	const BLOCK_TYPE_HEADING = BlockType::TYPE_HEADING;
	const BLOCK_TYPE_UNORDERED_LIST = BlockType::TYPE_UNORDERED_LIST;
	const BLOCK_TYPE_ORDERED_LIST = BlockType::TYPE_ORDERED_LIST;
	const BLOCK_TYPE_LIST_ITEM = BlockType::TYPE_LIST_ITEM;
	const BLOCK_TYPE_PARAGRAPH = BlockType::TYPE_PARAGRAPH;
	const BLOCK_TYPE_QUOTE = BlockType::TYPE_QUOTE;

	/**
	 * @return string
	 */
	public function getBlockType();

	/**
	 * @param BlockParentInterface $blockParent
	 * @return $this
	 */
	public function onAttach(BlockParentInterface $blockParent);

	/**
	 * @return $this
	 */
	public function onDetach();

	/**
	 * @return BlockParentInterface
	 */
	public function getParent();

	/**
	 * @param HandlerInterface $markdomHandler
	 * @return void
	 */
	public function onHandle(HandlerInterface $markdomHandler);

}
