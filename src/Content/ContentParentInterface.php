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

	public const CONTENT_PARENT_TYPE_EMPHASIS = 'EMPHASIS';
	public const CONTENT_PARENT_TYPE_HEADING = 'HEADING';
	public const CONTENT_PARENT_TYPE_LINK = 'LINK';
	public const CONTENT_PARENT_TYPE_PARAGRAPH = 'PARAGRAPH';

	/**
	 * @return string
	 */
	public function getContentParentType(): string;

	/**
	 * @return BlockInterface
	 */
	public function getBlock(): BlockInterface;

	/**
	 * @return ContentSequenceInterface
	 */
	public function getContents(): ContentSequenceInterface;

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
