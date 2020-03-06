<?php

namespace src\model;

class ShopListIteratorAsc extends ShopListIterator
{
	/** @var ShopList $shopList */
	protected $shopList;
	/** @var int $index */
	protected $index;

	/**
	 * ShopListIteratorAsc constructor.
	 * @param ShopList $shopList
	 */
	public function __construct(ShopList $shopList)
	{
		$this->shopList = $shopList;
		$this->index = 0;
	}

	public function hasNext(): bool
	{
		return $this->index < $this->shopList->getSize();
	}

	public function next(): Shop
	{
		return $this->shopList->getShopAt($this->index++);
	}
}