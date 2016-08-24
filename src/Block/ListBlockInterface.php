<?php

namespace Markdom\ModelInterface\Block;

/**
 * Interface ListBlockInterface
 *
 * @package Markdom\ModelInterface\Block
 */
interface ListBlockInterface extends BlockInterface
{

	/**
	 * @return ListItemListInterface
	 */
	public function getListItems();

}
