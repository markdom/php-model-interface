<?php

namespace Markdom\ModelInterface\Content;

use Markdom\Handler\Markdom\MarkdomHandlerInterface;
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

	const TYPE_CODE = 'CODE';
	const TYPE_EMPHASIS = 'EMPHASIS';
	const TYPE_IMAGE = 'IMAGE';
	const TYPE_LINE_BREAK = 'LINE_BREAK';
	const TYPE_LINK = 'LINK';
	const TYPE_TEXT = 'TEXT';
	const TYPE_HTML = 'HTML';

	/**
	 * @return string
	 */
	public function getContentType();

	/**
	 * @return int
	 */
	public function getIndex();

	/**
	 * @return ContentParentInterface
	 */
	public function getParent();

	/**
	 * @return ContentParentBlockInterface
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
	 * @param MarkdomHandlerInterface $markdomHandler
	 */
	public function onHandle(MarkdomHandlerInterface $markdomHandler);

}
