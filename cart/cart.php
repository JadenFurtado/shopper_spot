<?php

session_start();

class Cart{

	function add_to_cart($product_id,$product_quantity){
		if(!isset($_SESSION['cart'])){
			$_SESSION['cart']=array();
		}
		$a=array(array('product_id' => $product_id,'product_quantity'=>$product_quantity));
		$_SESSION['cart'][$product_id]=array('quantity' =>$product_quantity,'id'=$product_id);
		return true;
	}

}