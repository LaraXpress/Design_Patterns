<?php

	class BookAdapter{
		private $book;

		public function __construct(Book $book)
		{
		    $this->book = $book;
		}

		public function getBook_Title_Author()
		{
		    return $this->book->getTitle().' by '.$this->book->getAuthor();
		}
	}

?>