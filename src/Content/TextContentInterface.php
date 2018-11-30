<?php

namespace Markdom\ModelInterface\Content;

/**
 * Interface TextContentInterface
 *
 * @package Markdom\ModelInterface\Content
 */
interface TextContentInterface extends ContentInterface
{

	/**
	 * TextContent constructor.
	 *
	 * @param string $text
	 */
	public function __construct(string $text);

	/**
	 * @return string
	 */
	public function getText(): string;

	/**
	 * @param string $text
	 * @return $this
	 */
	public function setText(string $text);

}
