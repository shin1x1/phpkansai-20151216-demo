<?php

namespace App\Repository\Dummy;

use Shin1x1\Book\Domain\BookRepository as BookRepositoryInterface;

class BookRepository implements BookRepositoryInterface
{
    private $data = [
        ['name' => 'book1'],
        ['name' => 'book2'],
        ['name' => 'book3'],
    ];

    /**
     * @return array
     */
    public function resolveAll(): array
    {
        return $this->data;
    }
}