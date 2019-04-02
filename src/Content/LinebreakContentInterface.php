<?php

declare(strict_types=1);

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
	 * @param bool $hard
	 */
	public function __construct(bool $hard);

	/**
	 * @return bool
	 */
	public function isHard(): bool;

	/**
	 * @param bool $hard
	 * @return $this
	 */
	public function setHard(bool $hard);

}
