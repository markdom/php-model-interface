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

	public const TYPE_CODE = BlockType::TYPE_CODE;
	public const TYPE_COMMENT = BlockType::TYPE_COMMENT;
	public const TYPE_DIVISION = BlockType::TYPE_DIVISION;
	public const TYPE_HEADING = BlockType::TYPE_HEADING;
	public const TYPE_UNORDERED_LIST = BlockType::TYPE_UNORDERED_LIST;
	public const TYPE_ORDERED_LIST = BlockType::TYPE_ORDERED_LIST;
	public const TYPE_LIST_ITEM = BlockType::TYPE_LIST_ITEM;
	public const TYPE_PARAGRAPH = BlockType::TYPE_PARAGRAPH;
	public const TYPE_QUOTE = BlockType::TYPE_QUOTE;

	/**
	 * @return string
	 */
	public function getBlockType(): string;

	/**
	 * @return BlockInterface
	 */
	public function getBlock(): BlockInterface;

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
