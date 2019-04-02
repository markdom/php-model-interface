<?php

declare(strict_types=1);

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
	 * @noinspection ReturnTypeCanBeDeclaredInspection
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
	 * @return void
	 */
	public function onHandle(HandlerInterface $markdomHandler): void;

}
