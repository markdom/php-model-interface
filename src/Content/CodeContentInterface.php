<?php

namespace Markdom\ModelInterface\Content;

/**
 * Interface CodeContentInterface
 *
 * @package Markdom\ModelInterface\Content
 */
interface CodeContentInterface extends ContentInterface
{

	/**
	 * CodeContent constructor.
	 *
	 * @param string $code
	 */
	public function __construct($code);

	/**
	 * @return string
	 */
	public function getCode();

	/**
	 * @param string $code
	 * @return $this
	 */
	public function setCode($code);

}
