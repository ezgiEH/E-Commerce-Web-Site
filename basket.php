<?php
function getBasket() {
	return $_SESSION[ 'userBasketSess' ];
}
function setBasket($basket) {
	$_SESSION[ 'userBasketSess' ] = $basket;
}

function addToBasket($urunId, $urunAdi, $adet, $fiyat) {
	global $currentUser;
	$userBasket = getBasket();
	$index = isInBasket($userBasket, $urunId);
	if($currentUser != null) {	
		global $dao; 	
		if($index < 0) {	
			$lastInsertId = $dao->addUserBasket($urunId, $urunAdi, $adet, $fiyat, $currentUser->id);
			if($lastInsertId > 0) {
				$arr['pro_name'] = $urunAdi;
				$arr['pro_id'] = $urunId;
				$arr['sepet_Id'] = $lastInsertId;
				$arr['pro_price'] = $fiyat;
				$arr['pro_adet'] = $adet;
				$arr['user_id'] = $currentUser->id;
				$userBasket[] = $arr; 
				setBasket( $userBasket ); 
				return true;
			} else {
				return false;
			}
		} else {
			$sepetUrun = $userBasket[ $index ];
			$userBasket[$index]['pro_adet'] = $userBasket[$index]['pro_adet'] + $adet;
			$dao->updateBasketItem( $sepetUrun['pro_id'], $userBasket[ $index ][ 'pro_id' ] );
			setBasket( $userBasket );
			return true;
		}
	} else {
		
		if($index < 0) {
			$arr['urunAdi'] = $urunAdi;
			$arr['urunId'] = $urunId;					
			$arr['fiyat'] = $fiyat;
			$arr['adet'] = $adet;
			$arr['userId'] = 0;
			$arr['sepetId'] = 0;
			$userBasket[] = $arr;
			setBasket( $userBasket );
			return true;
		} else {
			$userBasket[$index]['adet'] = $userBasket[$index]['adet'] + $adet;
			setBasket( $userBasket );
			return true;
		}
	}
}

function isInBasket($userBasket, $urunId) {
	if($userBasket == null || empty($userBasket)) {
		return -1;
	}			
	for($a = 0; $a < count($userBasket); $a++) {
		if($userBasket[$a]['urunId'] == $urunId) {
			return $a;
		}
	}			
	return -1;
}

function removeFromBasket($urunId) {
	global $currentUser;
	$basket = getBasket();
	if($basket != null && !empty($basket)) {
		$index = isInBasket($basket, $urunId);
		if($index >= 0) {
			if($currentUser != null) {
				
				global $dao;
				$dao->deleteBasketItem( $basket[ $index ]['sepetId'] );
			}
			$newBasket = array(); 
			foreach($basket as $item) {
				if($item['urunId'] != $urunId) {
					$newBasket[] = $item;
				}
			}
			setBasket($newBasket);
		}
	}
}

function increment($urunId, $adet) {
	global $currentUser;
	$basket = getBasket();
	if($basket != null && !empty($basket)) {
		if($currentUser != null) {
			
			global $dao;
			$dao->incrementBasketItem( $basket[ $index ]['sepetId'], $adet );
		}
		$basket[$index]['adet'] = $basket[$index]['adet'] + $adet;
		setBasket($basket);
	}
}

function getBasketCount() {
	$basket = getBasket();
	return count($basket);
}
?>
