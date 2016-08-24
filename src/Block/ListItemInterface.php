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
	 * @return int
	 */
	public function getIndex();

	/**
	 * @return ListBlockInterface
	 */
	public function getParent();

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
	 */
	public function onHandle(HandlerInterface $markdomHandler);

}
