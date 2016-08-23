<?php

namespace Markdom\ModelInterface;

/**
 * Interface DocumentVersionInterface
 *
 * @package Markdom\ModelInterface
 */
interface DocumentVersionInterface
{

	/**
	 * DocumentVersion constructor.
	 *
	 * @param int $major
	 * @param int $minor
	 */
	public function __construct($major, $minor);

	/**
	 * @return int
	 */
	public function getMajor();

	/**
	 * @return int
	 */
	public function getMinor();

}
