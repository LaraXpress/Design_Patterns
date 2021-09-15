<?php

 require_once 'book.php';
 require_once 'bookAdapter.php';

$book        = new Book('Harry Porter','Lary Hansman');
$bookAdapter = new BookAdapter($book);
echo $bookAdapter->getBook_Title_Author();