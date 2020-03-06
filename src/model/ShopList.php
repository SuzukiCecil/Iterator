<?php

namespace src\model;

class ShopList implements AscendingAggregate, DecendingAggregate
{
	/** @var Shop[] $shops */
	protected $shops;
	/** @var int $size */
	protected $size;

	/**
	 * ShopList constructor.
	 */
	public function __construct()
	{
		$this->shops = array();
		$this->size = 0;
	}

	public function getShopAt(int $index): Shop
	{
		if ($index < 0 || $index > $this->size - 1) {
			throw new \OutOfRangeException("{$index} is out of range");
		}
		return $this->shops[$index];
	}

	public function appendShop(Shop $shop): void
	{
		$this->shops[] = $shop;
		$this->size++;
	}

	public function getSize(): int
	{
		return $this->size;
	}

	public function iteratorAsc(): ShopListIteratorAsc
	{
		return new ShopListIteratorAsc($this);
	}

	public function iteratorDesc(): ShopListIteratorDesc
	{
		return new ShopListIteratorDesc($this);
	}
}