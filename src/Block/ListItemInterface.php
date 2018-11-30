<?php

namespace Markdom\ModelInterface\Block;

use Markdom\HandlerInterface\HandlerInterface;

/**
 * Interface ListItemInterface
 *
 * @package Markdom\ModelInterface\Block
 */
interface ListItemInterface extends BlockParentInterface
{

	/**
	 * @return ListBlockInterface
	 */
	public function getParent(): ListBlockInterface;

	/**
	 * @param ListBlockInterface $listBlock
	 * @return $this
	 */
	public function onAttach(ListBlockInterface $listBlock);

	/**
	 * @return $this
	 */
	public function onDetach();

	/**
	 * @param HandlerInterface $markdomHandler
	 * @return void
	 */
	public function onHandle(HandlerInterface $markdomHandler): void;

}
