<?php

namespace Markdom\ModelInterface\Content;

use Markdom\ModelInterface\Block\BlockInterface;
use Markdom\ModelInterface\Common\NodeInterface;

/**
 * Interface ContentParentInterface
 *
 * ContentParents can adopt Contents
 *
 * @package Markdom\ModelInterface\Content
 */
interface ContentParentInterface extends NodeInterface
{

	const TYPE_EMPHASIS = 'EMPHASIS';
	const TYPE_HEADING = 'HEADING';
	const TYPE_LINK = 'LINK';
	const TYPE_PARAGRAPH = 'PARAGRAPH';

	/**
	 * @return BlockInterface
	 */
	public function getBlock();

	/**
	 * @return ContentSequenceInterface
	 */
	public function getContents();

	/**
	 * @param ContentInterface $content
	 * @return $this
	 */
	public function addContent(ContentInterface $content);

	/**
	 * @param ContentInterface[] $contents
	 * @return $this
	 */
	public function addContents(array $contents);

}
