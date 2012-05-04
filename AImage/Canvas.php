<?php
class AImage_Canvas {
	public $minSize = array (null, null);
	public $maxSize = array (null, null);
	public $size	= array (null, null);

	/**
	 * Akció, ha az egyik oldal túl kicsi, a másik oldal meg nem túl nagy.
	 **/
	public $whenSmall = self::NOOP;
	/**
	 * Akció, ha az egyik oldal túl nagy, a másik oldal meg nem túl kicsi.
	 **/
	public $whenLarge = self::FIT_ONE;
	/**
	 * Akció, ha az egyik oldal túl nagy, a másik oldal túl kicsi.
	 **/
	public $whenMixed = self::FILL_BOTH;

	const NOOP 			= null;
	
	const FILL_ONE		= 1;
	const FILL_BOTH		= 2;
	const FILL_WIDTH	= 3;
	const FILL_HEIGHT	= 4;

	const FIT_ONE		= 5;
	const FIT_BOTH		= 6;
	const FIT_WIDTH		= 7;
	const FIT_HEIGHT	= 8;

	const ON_SMALL		= 9;
	const ON_LARGE		= 10;
}
?>
