<?php

namespace Markdom\ModelInterface\Content;

/**
 * Interface ImageContentInterface
 *
 * @package Markdom\ModelInterface\Content
 */
interface ImageContentInterface extends ContentInterface
{

	/**
	 * ImageContent constructor.
	 *
	 * @param string $uri
	 * @param string $title
	 * @param string $alternative
	 */
	public function __construct($uri, $title = null, $alternative = null);

	/**
	 * @return string
	 */
	public function getUri();

	/**
	 * @param string $uri
	 * @return $this
	 */
	public function setUri($uri);

	/**
	 * @return string
	 */
	public function getTitle();

	/**
	 * @param string $title
	 * @return $this
	 */
	public function setTitle($title);

	/**
	 * @return string
	 */
	public function getAlternative();

	/**
	 * @param string $alternative
	 * @return $this
	 */
	public function setAlternative($alternative);

}
