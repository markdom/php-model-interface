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
	public function __construct($text);

	/**
	 * @return string
	 */
	public function getText();

	/**
	 * @param string $text
	 * @return $this
	 */
	public function setText($text);

}
