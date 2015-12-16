<?php

namespace App\Repository\Eloquent;

use App\Book;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Shin1x1\Book\Domain\BookRepository as BookRepositoryInterface;

class BookRepository implements BookRepositoryInterface
{
    /**
     * @var Model|Builder
     */
    private $eloquent;

    /**
     * BookRepository constructor.
     * @param Book $eloquent
     */
    public function __construct(Book $eloquent)
    {
        $this->eloquent = $eloquent;
    }

    /**
     * @return array
     */
    public function resolveAll(): array
    {
        return $this->eloquent->orderBy('id')->get()->toArray();
    }
}