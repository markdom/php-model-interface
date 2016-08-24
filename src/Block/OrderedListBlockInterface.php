<?php

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
	public function __construct($startIndex);

	/**
	 * @return int
	 */
	public function getStartIndex();

	/**
	 * @param int $startIndex
	 * @return $this
	 */
	public function setStartIndex($startIndex);

}
