<?php

namespace Markdom\ModelInterface\Content;

/**
 * Interface EmphasisContentInterface
 *
 * @package Markdom\ModelInterface\Content
 */
interface EmphasisContentInterface extends ContentParentContentInterface
{

	const LEVEL_1 = 1;
	const LEVEL_2 = 2;

	/**
	 * EmphasisContent constructor.
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
