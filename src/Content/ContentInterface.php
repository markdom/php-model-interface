<?php

namespace Markdom\ModelInterface\Content;

use Markdom\Common\ContentType;
use Markdom\HandlerInterface\HandlerInterface;
use Markdom\ModelInterface\Block\ContentParentBlockInterface;
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

	public const TYPE_CODE = ContentType::TYPE_CODE;
	public const TYPE_EMPHASIS = ContentType::TYPE_EMPHASIS;
	public const TYPE_IMAGE = ContentType::TYPE_IMAGE;
	public const TYPE_LINE_BREAK = ContentType::TYPE_LINE_BREAK;
	public const TYPE_LINK = ContentType::TYPE_LINK;
	public const TYPE_TEXT = ContentType::TYPE_TEXT;

	/**
	 * @return string
	 */
	public function getContentType(): string;

	/**
	 * @return ContentParentInterface
	 */
	public function getParent(): ContentParentInterface;

	/**
	 * @return ContentParentBlockInterface
	 */
	public function getBlock(): ContentParentBlockInterface;

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
	 * @return void
	 */
	public function onHandle(HandlerInterface $markdomHandler): void;

}
