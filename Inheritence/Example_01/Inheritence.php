<?php

spl_autoload_register(function($class_name){
	include "classes/".$class_name.".php";
});

class Product{
	private $id;
	private $title;
	private $price;

	public function __construct($id, $title, $price)
	{
	    $this->id    = $id;
	    $this->title = $title;
	    $this->price = $price;
	}

	public function setProduct($id, $title, $price)
	{
	    $this->id    = $id;
	    $this->title = $title;
	    $this->price = $price;
	}

	public function getProduct()
	{
	    echo '<br>----------- Product Information ----------- <br/>';
	    echo "Product Title : {$this->title} <br/>";
	    echo "Product Price : {$this->price} <br/>";
	}
}
$product = new Product('1001','Laptop','1,25,000 USD');
$product->getProduct();

$book = new Book('1002','Harry Porter','250 USD');
$book->getProduct();

$cd  = new CD('1003','Michael Jackson','25,000 USD');
$cd->getProduct();

$dvd = new DVD('1004','Titanic','1,000 USD');
$dvd->getProduct();



