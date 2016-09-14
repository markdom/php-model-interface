<?php

namespace Markdom\ModelInterface\Block;

use Markdom\DispatcherInterface\DispatcherInterface;
use Markdom\HandlerInterface\HandlerInterface;

/**
 * Interface DocumentInterface
 *
 * @package Markdom\ModelInterface\Block
 */
interface DocumentInterface extends BlockParentInterface, DispatcherInterface
{

	/**
	 * @param HandlerInterface $markdomHandler
	 * @return void
	 */
	public function handle(HandlerInterface $markdomHandler);

}
