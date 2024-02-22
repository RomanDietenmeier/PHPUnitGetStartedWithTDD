<?php

namespace App;

class Counter
{
    private $count = 0;
    public function increment(): void
    {
        $this->count++;
    }
    public function getCount(): int
    {
        return $this->count;
    }
}
