<?php
	require_once 'Inheritence.php';

	$product = new Product('1001','Laptop','1,25,000 USD');
	$product->getProduct();
	

	$book = new Book('1002','Harry Porter','250 USD');
	$book->getProduct();
	

	$cd  = new CD('1003','Michael Jackson','25,000 USD');
	$cd->getProduct();
	

	$dvd = new DVD('1004','Titanic','1,000 USD');
	$dvd->getProduct();

	echo '<hr/>';
	echo '<pre>';
	var_dump($product);
	echo '</pre>';
	echo '<hr/>';
	echo '<pre>';
	var_dump($book);
	echo '</pre>';
	echo '<hr/>';
	echo '<pre>';
	var_dump($cd);
	echo '</pre>';
	echo '<hr/>';
	echo '<pre>';
	var_dump($dvd);
	echo '</pre>';
	echo '<hr/>';	