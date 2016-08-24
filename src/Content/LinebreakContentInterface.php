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
	 * @param bool $hardbreak
	 */
	public function __construct($hardbreak);

	/**
	 * @return boolean
	 */
	public function isHardbreak();

	/**
	 * @param boolean $hardbreak
	 * @return $this
	 */
	public function setHardbreak($hardbreak);

}
