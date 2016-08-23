<?php

namespace Markdom\ModelInterface;

use Markdom\ModelInterface\Common\NodeInterface;

/**
 * Interface DocumentInterface
 *
 * @package Markdom\ModelInterface
 */
interface DocumentInterface
{

	/**
	 * Document constructor.
	 *
	 * @param DocumentVersionInterface $version
	 */
	public function __construct(DocumentVersionInterface $version);

	/**
	 * @return string
	 */
	public function getNodeType();

	/**
	 * @return NodeInterface
	 */
	public function getParent();

	/**
	 * @param MarkdomHandlerInterface $markdomHandler
	 * @return void
	 */
	public function handle(MarkdomHandlerInterface $markdomHandler);

	/**
	 * @return DocumentInterface
	 */
	public function getDocument();

}
