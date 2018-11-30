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
	 * @param string $comment
	 */
	public function __construct(string $comment);

	/**
	 * @return string
	 */
	public function getComment(): string;

	/**
	 * @param string $comment
	 * @return $this
	 */
	public function setComment(string $comment);

}
