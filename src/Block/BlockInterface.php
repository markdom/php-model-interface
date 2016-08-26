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

	const TYPE_CODE = BlockType::TYPE_CODE;
	const TYPE_COMMENT = BlockType::TYPE_COMMENT;
	const TYPE_DIVISION = BlockType::TYPE_DIVISION;
	const TYPE_HEADING = BlockType::TYPE_HEADING;
	const TYPE_UNORDERED_LIST = BlockType::TYPE_UNORDERED_LIST;
	const TYPE_ORDERED_LIST = BlockType::TYPE_ORDERED_LIST;
	const TYPE_LIST_ITEM = BlockType::TYPE_LIST_ITEM;
	const TYPE_PARAGRAPH = BlockType::TYPE_PARAGRAPH;
	const TYPE_QUOTE = BlockType::TYPE_QUOTE;

	/**
	 * @return string
	 */
	public function getBlockType();

	/**
	 * @return int
	 */
	public function getIndex();

	/**
	 * @return DocumentInterface
	 */
	public function getDocument();

	/**
	 * @return BlockInterface
	 */
	public function getBlock();

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
