<?php

namespace Markdom\ModelInterface\Content;

/**
 * Interface EmphasisContentInterface
 *
 * @package Markdom\ModelInterface\Content
 */
interface EmphasisContentInterface extends ContentParentContentInterface
{

	public const LEVEL_1 = 1;
	public const LEVEL_2 = 2;

	/**
	 * EmphasisContent constructor.
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
