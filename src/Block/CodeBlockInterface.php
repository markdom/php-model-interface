<?php

namespace Markdom\ModelInterface\Block;

/**
 * Interface CodeBlockInterface
 *
 * @package Markdom\ModelInterface\Block
 */
interface CodeBlockInterface extends BlockInterface
{

	/**
	 * CodeBlock constructor.
	 *
	 * @param string $code
	 * @param string $hint
	 */
	public function __construct($code, $hint = null);

	/**
	 * @return string
	 */
	public function getCode();

	/**
	 * @param string $code
	 * @return $this
	 */
	public function setCode($code);

	/**
	 * @return string
	 */
	public function getHint();

	/**
	 * @param string $hint
	 * @return $this
	 */
	public function setHint($hint);

}
