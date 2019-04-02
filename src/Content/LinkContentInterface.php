<?php

declare(strict_types=1);

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
	 * @param string $title
	 */
	public function __construct(string $uri, ?string $title = null);

	/**
	 * @return string
	 */
	public function getUri(): string;

	/**
	 * @param string $uri
	 * @return $this
	 */
	public function setUri(string $uri);

	/**
	 * @return string
	 */
	public function getTitle(): ?string;

	/**
	 * @param string $title
	 * @return $this
	 */
	public function setTitle(string $title);

}
