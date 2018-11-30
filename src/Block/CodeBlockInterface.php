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
	public function __construct(string $code, ?string $hint = null);

	/**
	 * @return string
	 */
	public function getCode(): string;

	/**
	 * @param string $code
	 * @return $this
	 */
	public function setCode(string $code);

	/**
	 * @return string
	 */
	public function getHint(): ?string;

	/**
	 * @param string $hint
	 * @return $this
	 */
	public function setHint(string $hint);

}
