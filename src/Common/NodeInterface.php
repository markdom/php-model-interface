<?php

namespace Markdom\ModelInterface\Common;

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
	 * @return string
	 */
	public function getNodeType();

	/**
	 * @return NodeInterface
	 */
	public function getParent();

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
