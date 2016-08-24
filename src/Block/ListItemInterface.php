<?php

namespace Markdom\ModelInterface\Block;

use Markdom\Handler\Markdom\MarkdomHandlerInterface;

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
	 * @param MarkdomHandlerInterface $markdomHandler
	 */
	public function onHandle(MarkdomHandlerInterface $markdomHandler);

}
