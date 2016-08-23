<?php

namespace Markdom\ModelInterface\Content;

use Markdom\ModelInterface\Block\ContentBlockInterface;

/**
 * Interface ContentParentInterface
 *
 * ContentParents can adopt Contents
 *
 * @package Markdom\ModelInterface\Content
 */
interface ContentParentInterface
{

	/**
	 * @return ContentBlockInterface
	 */
	public function getBlock();

	/**
	 * @return ContentCollection
	 */
	public function getContents();

	/**
	 * @param ContentInterface $content
	 * @return $this
	 */
	public function addContent(ContentInterface $content);

}
