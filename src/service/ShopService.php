<?php
namespace src\service;

use src\model\Shop;
use src\model\ShopList;

class ShopService
{
	public function fundShop(): ShopList
	{
		$shopList = new ShopList();
		$shopList->appendShop(new Shop("001", "A"));
		$shopList->appendShop(new Shop("002", "B"));
		$shopList->appendShop(new Shop("003", "C"));
		$shopList->appendShop(new Shop("004", "D"));
		$shopList->appendShop(new Shop("005", "E"));
		$shopList->appendShop(new Shop("006", "F"));
		$shopList->appendShop(new Shop("007", "G"));
		$shopList->appendShop(new Shop("008", "H"));
		$shopList->appendShop(new Shop("009", "I"));
		$shopList->appendShop(new Shop("010", "J"));
		return $shopList;
	}
}