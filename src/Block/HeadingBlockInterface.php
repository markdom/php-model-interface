<?php

declare(strict_types=1);

namespace Markdom\ModelInterface\Block;

/**
 * Interface HeadingBlockInterface
 *
 * @package Markdom\ModelInterface\Block
 */
interface HeadingBlockInterface extends ContentParentBlockInterface
{

	public const LEVEL_1 = 1;
	public const LEVEL_2 = 2;
	public const LEVEL_3 = 3;
	public const LEVEL_4 = 4;
	public const LEVEL_5 = 5;
	public const LEVEL_6 = 6;

	/**
	 * HeadingBlock constructor.
	 *
	 * @param int $level
	 */
	public function __construct(int $level);

	/**
	 * @return int
	 */
	public function getLevel(): int;

	/**
	 * @param int $level
	 * @return $this
	 */
	public function setLevel(int $level);

}
