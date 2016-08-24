<?php

namespace Markdom\ModelInterface\Block;

use Markdom\Handler\Markdom\MarkdomHandlerInterface;

/**
 * Interface DocumentInterface
 *
 * @package Markdom\ModelInterface\Block
 */
interface DocumentInterface extends BlockParentInterface
{

	/**
	 * @param MarkdomHandlerInterface $markdomHandler
	 * @return void
	 */
	public function handle(MarkdomHandlerInterface $markdomHandler);

}
