<?php

declare(strict_types=1);

namespace Markdom\ModelInterface\Block;

/**
 * Interface OrderedListBlockInterface
 *
 * @package Markdom\ModelInterface\Block
 */
interface OrderedListBlockInterface extends ListBlockInterface
{

	/**
	 * OrderedListBlock constructor.
	 *
	 * @param int $startIndex
	 */
	public function __construct(int $startIndex);

	/**
	 * @return int
	 */
	public function getStartIndex(): int;

	/**
	 * @param int $startIndex
	 * @return $this
	 */
	public function setStartIndex(int $startIndex);

}
