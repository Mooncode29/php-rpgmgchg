<?php
/**
* 
*/

class Product{
	private $id;
	private $name;
	private $price;
	
	public function __construct($idNum,$productName,$productPrice ){
		$this->setProductId($idNum);
		$this->setProductName($productName);
		$this->setProductPrice($productPrice);
		
	}
	public function getProductId(){
		return $this->id;
	}
	public function setProductId($idNum){
		$this->id = $idNum;
	}

	public function getProductName(){
		return $this->name;
	}
	public function setProductName($productName){
		return $this->name= $productName;
	}
	public function getProductPrice(){
		return $this->price;
	}
	public function setProductPrice($productPrice){
		return $this->price= $productPrice;
	}
}
?>