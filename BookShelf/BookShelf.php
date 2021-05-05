<?php

/**
 * (PHP) Define the classes and their methods (including parameters and return types) [Done]
 * for a system that consist of a bookshelf, books, magazines, and notebooks. [Done]
 * The bookshelf should allow store and retrieval of the items as well as reporting on the state of the bookshelf [Done]
 * (how many items it has, how many more items it can hold) [Done]
 * and initializing the capacity (in number of items it can hold in total). [Done]
 * The other items should allow reading of a single page given the page number that returns the text of the page. [Done]
 * A book has an accessible title and author. [Done]
 * A magazine has an accessible name.  [Done]
 * A notebook has an accessible owner. [Done]
 */

 namespace BookShelf;

use BookShelf\Classes\Book;
use BookShelf\Classes\Magazine;
use BookShelf\Classes\NoteBook;

 class BookShelf
 {
     private $books;
     private $magazines;
     private $noteBooks;

     private $capacity;

     public function __construct(int $capacity)
     {
         $this->capacity = $capacity;
     }
     

     public function storeBook(Book $book) : bool
     {
         $this->books[] = $book;

         return true;
     }

     public function storeMagazine(Magazine $magazine) : bool
     {
         $this->magazines[] = $magazine;

         return true;
     }

     public function storeNoteBook(NoteBook $notebook) : bool
     {
         $this->noteBooks[] = $notebook;

         return true;
     }
     
     public function getCapacity() : int
     {
         return $this->capacity;
     }

     public function getTotalItems() : int
     {
         $totalBooks = is_array($this->books) ? count($this->books) : 0;
         $totalMagazines = is_array($this->magazines) ? count($this->magazines) : 0;
         $totalNoteBooks = is_array($this->noteBooks) ? count($this->noteBooks) : 0;

         return $totalBooks + $totalMagazines + $totalNoteBooks;
     }

     public function getRemainigSpace() : int
     {
         return $this->capacity - $this->getTotalItems();
     }

     public function getBooks() : array
     {
         return $this->books;
     }

     public function getMagazines() : array
     {
         return $this->magazines;
     }

     public function getNoteBooks() : array
     {
         return $this->noteBooks;
     }
 }
