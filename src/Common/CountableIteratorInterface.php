<?php

declare(strict_types=1);

namespace Markdom\ModelInterface\Common;

/**
 * Interface CountableIteratorInterface
 *
 * @package Markdom\ModelInterface\Common
 */
interface CountableIteratorInterface extends \IteratorAggregate, \Countable
{

	/**
	 * @return bool
	 */
	public function isEmpty(): bool;

}
