<?php
/**
 * All Items that is expected to be stored on our bookshelf must implement the item interface
 */
namespace BookShelf\Interfaces;

interface ItemInterface
{
    public function getPage(int $pageNumber) : string;
}
