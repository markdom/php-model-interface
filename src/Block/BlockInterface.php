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

	public const BLOCK_TYPE_CODE = BlockType::TYPE_CODE;
	public const BLOCK_TYPE_COMMENT = BlockType::TYPE_COMMENT;
	public const BLOCK_TYPE_DIVISION = BlockType::TYPE_DIVISION;
	public const BLOCK_TYPE_HEADING = BlockType::TYPE_HEADING;
	public const BLOCK_TYPE_UNORDERED_LIST = BlockType::TYPE_UNORDERED_LIST;
	public const BLOCK_TYPE_ORDERED_LIST = BlockType::TYPE_ORDERED_LIST;
	public const BLOCK_TYPE_LIST_ITEM = BlockType::TYPE_LIST_ITEM;
	public const BLOCK_TYPE_PARAGRAPH = BlockType::TYPE_PARAGRAPH;
	public const BLOCK_TYPE_QUOTE = BlockType::TYPE_QUOTE;

	/**
	 * @return string
	 */
	public function getBlockType(): string;

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
	public function getParent(): BlockParentInterface;

	/**
	 * @param HandlerInterface $markdomHandler
	 * @return void
	 */
	public function onHandle(HandlerInterface $markdomHandler): void;

}
