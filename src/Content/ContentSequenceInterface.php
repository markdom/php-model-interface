<?php

namespace Markdom\ModelInterface\Content;

use Markdom\ModelInterface\Common\CountableIteratorInterface;

/**
 * Interface ContentSequenceInterface
 *
 * @package Markdom\ModelInterface\Content
 */
interface ContentSequenceInterface extends CountableIteratorInterface
{

	/**
	 * ContentCollection constructor.
	 *
	 * @param ContentParentInterface $parent
	 */
	public function __construct(ContentParentInterface $parent);

	/**
	 * @return ContentParentInterface
	 */
	public function getParent(): ContentParentInterface;

	/**
	 * @return int
	 */
	public function size(): int;

	/**
	 * @param ContentInterface $content
	 * @return bool
	 */
	public function contains(ContentInterface $content): bool;

	/**
	 * @param ContentInterface[] $contents
	 * @return bool
	 */
	public function containsAll(array $contents): bool;

	/**
	 * @return ContentInterface
	 */
	public function first(): ContentInterface;

	/**
	 * @return ContentInterface
	 */
	public function last(): ContentInterface;

	/**
	 * @param int $index
	 * @return ContentInterface
	 */
	public function get(int $index): ContentInterface;

	/**
	 * @param ContentInterface $content
	 * @return int
	 */
	public function indexOf(ContentInterface $content): int;

	/**
	 * @param ContentInterface $content
	 * @return bool
	 */
	public function isFirst(ContentInterface $content): bool;

	/**
	 * @param ContentInterface $content
	 * @return bool
	 */
	public function isLast(ContentInterface $content): bool;

	/**
	 * @param ContentInterface $content
	 * @return $this
	 */
	public function append(ContentInterface $content);

	/**
	 * @param ContentInterface[] $contents
	 * @return $this
	 */
	public function appendAll(array $contents);

	/**
	 * @param ContentInterface $content
	 * @return $this
	 */
	public function prepend(ContentInterface $content);

	/**
	 * @param ContentInterface[] $contents
	 * @return $this
	 */
	public function prependAll(array $contents);

	/**
	 * @param ContentInterface $content
	 * @param int $index
	 * @return $this
	 */
	public function insert(ContentInterface $content, int $index);

	/**
	 * @param ContentInterface[] $contents
	 * @param int $index
	 * @return $this
	 */
	public function insertAll(array $contents, int $index);

	/**
	 * @param ContentInterface $content
	 * @param ContentInterface $referenceContent
	 * @return $this
	 */
	public function insertAfter(ContentInterface $content, ContentInterface $referenceContent);

	/**
	 * @param ContentInterface[] $contents
	 * @param ContentInterface $referenceContent
	 * @return $this
	 */
	public function insertAllAfter(array $contents, ContentInterface $referenceContent);

	/**
	 * @param ContentInterface $content
	 * @param ContentInterface $referenceContent
	 * @return $this
	 */
	public function insertBefore(ContentInterface $content, ContentInterface $referenceContent);

	/**
	 * @param ContentInterface[] $contents
	 * @param ContentInterface $referenceContent
	 * @return $this
	 */
	public function insertAllBefore(array $contents, ContentInterface $referenceContent);

	/**
	 * @param ContentInterface $content
	 * @param ContentInterface $replacedContent
	 * @return $this
	 */
	public function replaceItem(ContentInterface $content, ContentInterface $replacedContent);

	/**
	 * @param ContentInterface $content
	 * @param int $index
	 * @return $this
	 */
	public function replace(ContentInterface $content, int $index);

	/**
	 * @return ContentInterface
	 */
	public function removeFirst(): ContentInterface;

	/**
	 * @return ContentInterface
	 */
	public function removeLast(): ContentInterface;

	/**
	 * @param ContentInterface[] $contents
	 * @return $this
	 */
	public function removeAll(array $contents);

	/**
	 * @param ContentInterface $content
	 * @return ContentInterface
	 */
	public function removeItem(ContentInterface $content): ContentInterface;

	/**
	 * @param int $index
	 * @return ContentInterface
	 */
	public function remove(int $index): ContentInterface;

	/**
	 * @return $this
	 */
	public function clear();

}
