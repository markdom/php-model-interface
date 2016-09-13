<?php

namespace Markdom\ModelInterface\Common;

use Markdom\ModelInterface\Block\DocumentInterface;

/**
 * Interface NodeInterface
 *
 * @package Markdom\ModelInterface\Common
 */
interface NodeInterface
{

	const NODE_TYPE_DOCUMENT = 'DOCUMENT';
	const NODE_TYPE_BLOCK = 'BLOCK';
	const NODE_TYPE_CONTENT = 'CONTENT';
	const NODE_TYPE_LIST_ITEM = 'LIST_ITEM';

	/**
	 * @return int
	 */
	public function getIndex();

	/**
	 * @return string
	 */
	public function getNodeType();

	/**
	 * @return DocumentInterface
	 */
	public function getDocument();

	/**
	 * @return NodeInterface
	 */
	public function getParent();

	/**
	 * @return bool
	 */
	public function hasParent();

	/**
	 * @return bool
	 */
	public function hasChildren();

	/**
	 * @return CountableIteratorInterface
	 */
	public function getChildren();

	/**
	 * @return int
	 */
	public function countChildren();

}
