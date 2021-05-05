<?php
/**
 * Using the BookShelf Class
 */
require __DIR__ . '/vendor/autoload.php';

use \BookShelf\BookShelf;
use \BookShelf\Classes\Book;
use \BookShelf\Classes\Magazine;
use \BookShelf\Classes\NoteBook;

 $bookShelf = new BookShelf(20);

  // Add a Book
 $book = new Book();
 $book->title = 'Soci Amazing Documentation';
 $book->author = 'Olaiya Segun';
 $bookShelf->storeBook($book);

 //Add one more book
$anotherBook = new Book();
$anotherBook->title = 'Soci Amazing Documentation 2';
$anotherBook->author = 'Victor Adeshayo';
$bookShelf->storeBook($anotherBook);

// Add a Magazine
$magazine = new Magazine();
$magazine->name = 'Soci Amazing Magazine';
$bookShelf->storeMagazine($magazine);

// Add a NoteBook
$notebook = new NoteBook();
$notebook->owner = 'Olaiya Segun';
$bookShelf->storeNotebook($notebook);
 
print_r([
    'capacity' => $bookShelf->getCapacity(),
    'remaining_space' => $bookShelf->getRemainigSpace(),
    'total_items' => $bookShelf->getTotalItems(),
    'books' => $bookShelf->getBooks(),
    'magazines' => $bookShelf->getMagazines(),
    'notebooks' => $bookShelf->getNoteBooks(),
]);
