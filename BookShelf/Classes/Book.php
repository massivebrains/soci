<?php
namespace BookShelf\Classes;

use BookShelf\Interfaces\ItemInterface;

class Book implements ItemInterface
{
    public $title;
    public $author;

    public function getPage(int $pageNumber) : string
    {
        //Return the contents of the $pageNumber : for now i just return an imgainary string;
        return 'Silence is Golden';
    }
}
