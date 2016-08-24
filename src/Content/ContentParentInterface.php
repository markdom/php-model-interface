<?php

namespace Markdom\ModelInterface\Content;

use Markdom\ModelInterface\Block\ContentParentBlockInterface;
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

	/**
	 * @return ContentParentBlockInterface
	 */
	public function getBlock();

	/**
	 * @return ContentListInterface
	 */
	public function getContents();

	/**
	 * @param ContentInterface $content
	 * @return $this
	 */
	public function addContent(ContentInterface $content);

}
