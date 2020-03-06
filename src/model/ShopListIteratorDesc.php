<?php

namespace src\model;

class ShopListIteratorDesc extends ShopListIterator
{
	/**
	 * ShopListIteratorDesc constructor.
	 * @param ShopList $shopList
	 */
	public function __construct(ShopList $shopList)
	{
		$this->shopList = $shopList;
		$this->index = $shopList->getSize() - 1;
	}

	public function hasNext(): bool
	{
		return $this->index >= 0;
	}

	public function next(): Shop
	{
		return $this->shopList->getShopAt($this->index--);
	}
}