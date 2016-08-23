<?php

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
	public function isEmpty();

}
