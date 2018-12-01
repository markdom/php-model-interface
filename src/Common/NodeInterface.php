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

	public const NODE_TYPE_DOCUMENT = 'DOCUMENT';
	public const NODE_TYPE_BLOCK = 'BLOCK';
	public const NODE_TYPE_CONTENT = 'CONTENT';
	public const NODE_TYPE_LIST_ITEM = 'LIST_ITEM';

	/**
	 * @return int
	 */
	public function getIndex(): ?int;

	/**
	 * @return string
	 */
	public function getNodeType(): string;

	/**
	 * @return DocumentInterface
	 */
	public function getDocument(): DocumentInterface;

	/**
	 * @noinspection ReturnTypeCanBeDeclaredInspection
	 * @return NodeInterface|null
	 */
	public function getParent();

	/**
	 * @return bool
	 */
	public function hasParent(): bool;

	/**
	 * @return bool
	 */
	public function hasChildren(): bool;

	/**
	 * @noinspection ReturnTypeCanBeDeclaredInspection
	 * @return CountableIteratorInterface|null
	 */
	public function getChildren();

	/**
	 * @return int
	 */
	public function countChildren(): int;

}
