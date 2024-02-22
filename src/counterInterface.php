<?php

namespace App;

interface Counter
{
    public function increment(): void;
    public function getCount(): int;
}
