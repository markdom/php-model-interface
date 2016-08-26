<?php

namespace Markdom\ModelInterface\Block;

/**
 * Interface CommentBlockInterface
 *
 * @package Markdom\ModelInterface\Block
 */
interface CommentBlockInterface extends BlockInterface
{

	/**
	 * CommentBlockInterface constructor.
	 *
	 * @param $comment
	 */
	public function __construct($comment);

	/**
	 * @return string
	 */
	public function getComment();

	/**
	 * @param string $comment
	 * @return $this
	 */
	public function setComment($comment);

}
