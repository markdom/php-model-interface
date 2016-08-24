<?php

namespace Markdom\ModelInterface\Block;

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

	const TYPE_CODE = 'CODE';
	const TYPE_DIVISION = 'DIVISION';
	const TYPE_HEADING = 'HEADING';
	const TYPE_UNORDERED_LIST = 'UNORDERED_LIST';
	const TYPE_ORDERED_LIST = 'ORDERED_LIST';
	const TYPE_LIST_ITEM = 'LIST_ITEM';
	const TYPE_PARAGRAPH = 'PARAGRAPH';
	const TYPE_QUOTE = 'QUOTE';
	const TYPE_HTML = 'HTML';

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
