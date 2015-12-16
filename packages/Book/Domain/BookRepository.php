<?php

namespace Shin1x1\Book\Domain;

interface BookRepository
{
    /**
     * @return array
     */
    public function resolveAll();
}
