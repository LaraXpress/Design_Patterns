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

	