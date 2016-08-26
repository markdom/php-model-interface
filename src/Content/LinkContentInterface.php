<?php

namespace Markdom\ModelInterface\Content;

/**
 * Interface LinkContentInterface
 *
 * @package Markdom\ModelInterface\Content
 */
interface LinkContentInterface extends ContentParentContentInterface
{

	/**
	 * LinkContent constructor.
	 *
	 * @param string $uri
	 */
	public function __construct($uri);

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

}
