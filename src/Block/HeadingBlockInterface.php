<?php

namespace Markdom\ModelInterface\Block;

/**
 * Interface HeadingBlockInterface
 *
 * @package Markdom\ModelInterface\Block
 */
interface HeadingBlockInterface extends ContentParentBlockInterface
{

	const LEVEL_1 = 1;
	const LEVEL_2 = 2;
	const LEVEL_3 = 3;
	const LEVEL_4 = 4;
	const LEVEL_5 = 5;
	const LEVEL_6 = 6;

	/**
	 * HeadingBlock constructor.
	 *
	 * @param int $level
	 */
	public function __construct($level);

	/**
	 * @return int
	 */
	public function getLevel();

	/**
	 * @param int $level
	 * @return $this
	 */
	public function setLevel($level);

}
