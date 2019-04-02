<?php

declare(strict_types=1);

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
	public function __construct(string $uri, ?string $title = null, ?string $alternative = null);

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

	/**
	 * @return string
	 */
	public function getAlternative(): ?string;

	/**
	 * @param string $alternative
	 * @return $this
	 */
	public function setAlternative(string $alternative);

}
