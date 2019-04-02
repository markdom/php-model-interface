<?php

declare(strict_types=1);

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

	public const CONTENT_TYPE_CODE = ContentType::TYPE_CODE;
	public const CONTENT_TYPE_EMPHASIS = ContentType::TYPE_EMPHASIS;
	public const CONTENT_TYPE_IMAGE = ContentType::TYPE_IMAGE;
	public const CONTENT_TYPE_LINE_BREAK = ContentType::TYPE_LINE_BREAK;
	public const CONTENT_TYPE_LINK = ContentType::TYPE_LINK;
	public const CONTENT_TYPE_TEXT = ContentType::TYPE_TEXT;

	/**
	 * @return string
	 */
	public function getContentType(): string;

	/**
	 * @noinspection ReturnTypeCanBeDeclaredInspection
	 * @return ContentParentInterface
	 */
	public function getParent();

	/**
	 * @return BlockInterface
	 */
	public function getBlock(): BlockInterface;

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
	public function onHandle(HandlerInterface $markdomHandler): void;

}
