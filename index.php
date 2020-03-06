<?php
require_once "bootstrap.php";

$shopService = new \src\service\ShopService();
$shopList = $shopService->fundShop();

//for ($index = 0; $index < $shopList->getSize(); $index++) {
//	$shop = $shopList->getShopAt($index);
//	echo $shop->getId() . "\t" . $shop->getName() . "\n";
//}

//if ($argv[1] === "-1") {
//	// 降順
//	for ($index = $shopList->getSize() - 1; $index >= 0; $index--) {
//		$shop = $shopList->getShopAt($index);
//		echo $shop->getId() . "\t" . $shop->getName() . "\n";
//	}
//} else {
//	// 昇順
//	for ($index = 0; $index < $shopList->getSize(); $index++) {
//		$shop = $shopList->getShopAt($index);
//		echo $shop->getId() . "\t" . $shop->getName() . "\n";
//	}
//}

//$iterator = $shopList->iteratorAsc();
//while ($iterator->hasNext()) {
//	$shop = $iterator->next();
//	echo $shop->getId() . "\t" . $shop->getName() . "\n";
//}

if ($argv[1] === "-1") {
	// 降順
	$iterator = $shopList->iteratorDesc();
} else {
	// 昇順
	$iterator = $shopList->iteratorAsc();
}
while ($iterator->hasNext()) {
	$shop = $iterator->next();
	echo $shop->getId() . "\t" . $shop->getName() . "\n";
}
