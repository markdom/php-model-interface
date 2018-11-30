<?php

namespace Markdom\ModelInterface\Content;

use Markdom\Common\ContentType;
use Markdom\HandlerInterface\HandlerInterface;
use Markdom\ModelInterface\Block\BlockInterface;
use Markdom\ModelInterface\Common\NodeInterface;

/**
 * Interface ContentInterface
 *
 * Contents are non structural elements that represent a Blocks content
 *
 * @package Markdom\ModelInterface\Content
 */
interface ContentInterface extends NodeInterface
{

	const CONTENT_TYPE_CODE = ContentType::TYPE_CODE;
	const CONTENT_TYPE_EMPHASIS = ContentType::TYPE_EMPHASIS;
	const CONTENT_TYPE_IMAGE = ContentType::TYPE_IMAGE;
	const CONTENT_TYPE_LINE_BREAK = ContentType::TYPE_LINE_BREAK;
	const CONTENT_TYPE_LINK = ContentType::TYPE_LINK;
	const CONTENT_TYPE_TEXT = ContentType::TYPE_TEXT;

	/**
	 * @return string
	 */
	public function getContentType();

	/**
	 * @return ContentParentInterface
	 */
	public function getParent();

	/**
	 * @return BlockInterface
	 */
	public function getBlock();

	/**
	 * @param ContentParentInterface $contentParent
	 * @return $this
	 */
	public function onAttach(ContentParentInterface $contentParent);

	/**
	 * @return $this
	 */
	public function onDetach();

	/**
	 * @param HandlerInterface $markdomHandler
	 */
	public function onHandle(HandlerInterface $markdomHandler);

}
