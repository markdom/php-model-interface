<?php

namespace Markdom\ModelInterface\Content;

/**
 * Interface LinebreakContentInterface
 *
 * @package Markdom\ModelInterface\Content
 */
interface LinebreakContentInterface extends ContentInterface
{

	/**
	 * LinebreakContent constructor.
	 *
	 * @param bool $hard
	 */
	public function __construct($hard);

	/**
	 * @return bool
	 */
	public function isHard();

	/**
	 * @param bool $hard
	 * @return $this
	 */
	public function setHard($hard);

}
